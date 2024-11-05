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

// Report the post
if ($post_id && $pinner_id) {
    // Fetch the original post data
    $query = $db->prepare("SELECT * FROM posts WHERE post_id = ?");
    $query->bind_param('i', $post_id);
    $query->execute();
    $original_post = $query->get_result()->fetch_assoc();

    if ($original_post) {
        // Update the post to mark it as reported by the user
        $updateQuery = sprintf(
            "UPDATE posts SET is_pinner_report = %s WHERE post_id = %s",
            secure(1, 'int'), // Setting is_user_report to true (1)
            secure($post_id, 'int') // Securely passing post_id
        );

        // Log the update query
        error_log("Update Query: " . $updateQuery);

        // Execute the update and check for errors
        if ($db->query($updateQuery) === FALSE) {
            error_log("Database Error: " . $db->error);
            modal("ERROR", __("Error"), __("An error occurred while reporting the post."));
        } else {
            error_log("Post reported successfully for Post ID: " . $post_id);

            // Redirect to pushpin requests page with success message
            header("Location: pushpin_requests.php?success=2");
            exit;
        }
    } else {
        echo "Original post not found.";
    }
}
?>
