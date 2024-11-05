<?php
// Include the necessary files
require('bootloader.php');

// User access
user_access();

// Check if the user is logged in
if (!$user->_logged_in) {
    user_login();
}

// Get the ID of the push pin request and post ID from the URL
$post_id = isset($_GET['post_id']) ? intval($_GET['post_id']) : 0;
$pinner_id = $user->_data['user_id']; // Set pinner_id to logged user ID

function createWalletTransaction($sender_id, $receiver_id, $amount) {
    global $db;
  
    // Node type is always 'user' for both sender and receiver
    $node_type = 'user';
    $currentDate = date("Y-m-d H:i:s"); // Get the current date and time
  
    // Begin transaction
    $db->begin_transaction();
    try {
        
        // Sender's transaction: type is "out"
        $senderQuery = $db->prepare("INSERT INTO wallet_transactions (user_id, node_type, node_id, type, amount, date) VALUES (?, ?, ?, 'out', ?, ?)");
        $senderQuery->bind_param('isids', $sender_id, $node_type, $receiver_id, $amount, $currentDate);
        if (!$senderQuery->execute()) {
            throw new Exception("Failed to insert sender transaction.");
        }
  
        // Receiver's transaction: type is "in"
        $receiverQuery = $db->prepare("INSERT INTO wallet_transactions (user_id, node_type, node_id, type, amount, date) VALUES (?, ?, ?, 'in', ?, ?)");
        $receiverQuery->bind_param('isids', $receiver_id, $node_type, $sender_id, $amount, $currentDate);
        if (!$receiverQuery->execute()) {
            throw new Exception("Failed to insert receiver transaction.");
        }
  
        // Commit transaction
        $db->commit();
        return true;
    } catch (Exception $e) {
        // Rollback on failure
        $db->rollback();
        modal("ERROR", __("Database Error"), __($e->getMessage()));
        return false;
    }
  }
// Reject the post by updating the rejection field and processing the refund
if ($post_id && $pinner_id) {
    // Fetch the original post data
    $query = $db->prepare("SELECT * FROM posts WHERE post_id = ?");
    $query->bind_param('i', $post_id);
    $query->execute();
    $original_post = $query->get_result()->fetch_assoc();

    if ($original_post) {
        $pusher_id = $original_post['user_id']; // Get the pusher ID from the post

        // Fetch the push price from the push_settings table for the pusher
        $pushPriceQuery = $db->prepare("SELECT push_price FROM push_settings WHERE user_id = ?");
        $pushPriceQuery->bind_param('i', $pinner_id);
        $pushPriceQuery->execute();
        $pushPriceResult = $pushPriceQuery->get_result()->fetch_assoc();
        $push_price = $pushPriceResult['push_price'] ?? 0; // Set to 0 if not found

        // Update the post to mark it as rejected
        $updateQuery = sprintf(
            "UPDATE posts SET is_pinner_reject = %s WHERE post_id = %s",
            secure(1, 'int'), // Setting is_pinner_reject to true (1)
            secure($post_id, 'int') // Securely passing post_id
        );

        // Execute the update and check for errors
        if ($db->query($updateQuery) === FALSE) {
            error_log("Database Error: " . $db->error);
            modal("ERROR", __("Error"), __("An error occurred while updating the push pin rejection data"));
        } else {
            error_log("Push Pin Data Marked as Rejected for Post ID: " . $post_id);
            
            if ($push_price > 0) {
                // Fetch current balance of pinner
                $walletQuery = $db->prepare("SELECT user_wallet_balance FROM users WHERE user_id = ?");
                $walletQuery->bind_param('i', $pinner_id);
                $walletQuery->execute();
                $pinnerWallet = $walletQuery->get_result()->fetch_assoc();

                // Calculate new balance for pinner (subtract the push price)
                $newPinnerBalance = $pinnerWallet['user_wallet_balance'] - $push_price;

                // Update the pinner's wallet balance
                $updatePinnerBalanceQuery = $db->prepare("UPDATE users SET user_wallet_balance = ? WHERE user_id = ?");
                $updatePinnerBalanceQuery->bind_param('di', $newPinnerBalance, $pinner_id);
                if (!$updatePinnerBalanceQuery->execute()) {
                    error_log("Error updating pinner balance: " . $db->error);
                    modal("ERROR", __("Error"), __("An error occurred while updating the pinner's wallet balance."));
                } else {
                    // Fetch current balance of pusher
                    $walletQueryPusher = $db->prepare("SELECT user_wallet_balance FROM users WHERE user_id = ?");
                    $walletQueryPusher->bind_param('i', $pusher_id);
                    $walletQueryPusher->execute();
                    $pusherWallet = $walletQueryPusher->get_result()->fetch_assoc();

                    // Calculate new balance for pusher (add the push price)
                    $newPusherBalance = $pusherWallet['user_wallet_balance'] + $push_price;

                    // Update the pusher's wallet balance
                    $updatePusherBalanceQuery = $db->prepare("UPDATE users SET user_wallet_balance = ? WHERE user_id = ?");
                    $updatePusherBalanceQuery->bind_param('di', $newPusherBalance, $pusher_id);
                    if (!$updatePusherBalanceQuery->execute()) {
                        error_log("Error updating pusher balance: " . $db->error);
                        modal("ERROR", __("Error"), __("An error occurred while updating the pusher's wallet balance."));
                    }

                    // Insert wallet transactions for both pinner and pusher

                    createWalletTransaction($pinner_id, $pusher_id, $push_price);
                    // $transactionQueryPinner = sprintf(
                    //     "INSERT INTO wallet_transactions (user_id, node_type, node_id, type, amount) VALUES (%s, %s, %s, %s, %s)",
                    //     secure($pinner_id, 'int'),
                    //     secure('user', 'string'),
                    //     secure($pusher_id, 'int'),
                    //     secure('out', 'string'),
                    //     secure($push_price, 'float')
                    // );

                    // $transactionQueryPusher = sprintf(
                    //     "INSERT INTO wallet_transactions (user_id, node_type, node_id, type, amount) VALUES (%s, %s, %s, %s, %s)",
                    //     secure($pusher_id, 'int'),
                    //     secure('user', 'string'),
                    //     secure($pinner_id, 'int'),
                    //     secure('in', 'string'),
                    //     secure($push_price, 'float')
                    // );

                    // Execute both transaction queries
                    // if ($db->query($transactionQueryPinner) === FALSE || $db->query($transactionQueryPusher) === FALSE) {
                    //     error_log("Transaction Error: " . $db->error);
                    //     modal("ERROR", __("Error"), __("An error occurred while processing the refund transaction"));
                    // } else {
                    //     error_log("Refund Transaction Successfully Processed for Post ID: " . $post_id);
                        
                    //     // Optionally redirect or display a success message
                        
                    // }
                    header("Location: pushpin_requests.php?success=1");
            exit;
                }
            } else {
                error_log("No push price found for refund.");
            }
        }
    } else {
        echo "Original post not found.";
    }
} else {
    echo "Invalid post ID or pinner ID.";
}
?>
