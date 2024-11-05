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
    echo "<div class='alert alert-success'>Post rejected successfully.</div>";
}

// User access
user_access();

// Check if the user is logged in
if (!$user->_logged_in) {
    user_login();
}

// Set the page title
page_header("Sent Pushpins");

global $db;

// Use the logged-in user's ID
$userId = $user->_data['user_id'];; // Assuming $user->id contains the logged-in user's ID

// Fetch push pin requests for the logged-in user
// Approved requests
$approved_requests = $db->prepare("SELECT * FROM posts WHERE is_pushed = '1' AND user_id = ? AND is_pinner_aproved = '1'");
$approved_requests->bind_param('i', $userId);
$approved_requests->execute();
$approved_requests_result = $approved_requests->get_result()->fetch_all(MYSQLI_ASSOC);
$approved_requests_result = !empty($approved_requests_result) ? $approved_requests_result : 0; // Set to 0 if empty

// Reported requests
$reported_requests = $db->prepare("SELECT * FROM posts WHERE is_pushed = '1' AND user_id = ? AND is_pinner_report = '1'");
$reported_requests->bind_param('i', $userId);
$reported_requests->execute();
$reported_requests_result = $reported_requests->get_result()->fetch_all(MYSQLI_ASSOC);
$reported_requests_result = !empty($reported_requests_result) ? $reported_requests_result : 0; // Set to 0 if empty

// Rejected requests
$rejected_requests = $db->prepare("SELECT * FROM posts WHERE is_pushed = '1' AND user_id = ? AND is_pinner_reject= '1'");
$rejected_requests->bind_param('i', $userId);
$rejected_requests->execute();
$rejected_requests_result = $rejected_requests->get_result()->fetch_all(MYSQLI_ASSOC);
$rejected_requests_result = !empty($rejected_requests_result) ? $rejected_requests_result : 0; // Set to 0 if empty

// Pass these variables to the template
$smarty->assign('approved_requests', $approved_requests_result);
$smarty->assign('reported_requests', $reported_requests_result);
$smarty->assign('rejected_requests', $rejected_requests_result);

// Display the page
page_footer("sent_pushpins");
?>
