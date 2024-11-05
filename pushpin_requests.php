<?php 
// Include the necessary files
/**
 * pushpin_requests
 * 
 * @package Sngine
 * @author Zamblek
 */

// Fetch bootloader
require('bootloader.php');

if (isset($_GET['success']) && $_GET['success'] == 1) {
    echo "<div class='alert alert-success'>Post reported successfully.</div>";
}
if (isset($_GET['success']) && $_GET['success'] == 2) {
    echo "<div class='alert alert-success'>post rejected successfully.</div>";
}
// User access
user_access();

// Check if the user is logged in
if (!$user->_logged_in) {
    user_login();
}

// Set the page title
page_header("Push Pin Requests");

// Fetch push pin requests for the logged-in user
function getPushPinRequests($userId) {
    global $db;
    $requests = [];
    
    // Fetch only requests where the pinner_id matches the logged-in user ID
    $query = $db->prepare("SELECT * FROM posts WHERE is_pushed = '1' AND pinner_id = ? AND is_pinner_aproved = '0' AND is_pinner_reject='0' AND is_pinner_report='0'");
$query->bind_param('i', $userId);
$query->execute();
$result = $query->get_result();

    while($row = $result->fetch_assoc()) {
        // Fetch user data for the pusher using user_id from posts
        $user_query = $db->prepare("SELECT * FROM users WHERE user_id = ?");
        $user_query->bind_param('i', $row['user_id']);
        $user_query->execute();
        $user_result = $user_query->get_result();
        $user = $user_result->fetch_assoc();

        // Include pusher's data in the request
        $row['pusher_name'] = $user['user_firstname'] . ' ' . $user['user_lastname'];
        $row['pusher_username'] = $user['user_name'];
        $row['pusher_picture'] = $user['user_picture'];
        $row['pusher_message'] = $row['pusher_message'];

        // Set pusher icon based on gender
        if ($user['user_gender'] === 1) {
            $row['pusher_icon'] = '/content/themes/default/images/blank_profile_male.png';
        } elseif ($user['user_gender'] === 2) {
            $row['pusher_icon'] = '/content/themes/default/images/blank_profile_female.png';
        } else {
            $row['pusher_icon'] = '/content/themes/default/images/blank_profile.png'; // A neutral default
        }

        // Push the complete request to the array
        $requests[] = $row;
    }
    
    return $requests;
}

// Fetch the pushpin requests for the logged-in user
$push_requests = getPushPinRequests($user->_data['user_id']);

// Assign push requests to Smarty or your template engine
$smarty->assign('push_requests', $push_requests); // Assuming you're using Smarty or a similar template engine
$smarty->assign('logged_user_id', $user->_data['user_id']);

// Display the page
page_footer("pushpin_requests");
?>
