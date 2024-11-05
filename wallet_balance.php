
<?php

/**
 * wallet
 * 
 * @package Sngine
 * @author Zamblek
 */

// fetch bootloader
require('bootloader.php');// wallet_balance.php

// Include necessary files and initialize any required classes
include_once('_init.php');

// Check if the user is logged in
if (!$user->_logged_in) {
    // Redirect to login if not logged in
    user_login();
}
page_header("wallet balance");
// Get the logged-in user ID
$user_id = $user->_data['user_id'];

// Fetch the wallet balance from the database
$sql = "SELECT user_wallet_balance FROM users WHERE user_id = ?";
$stmt = $db->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->bind_result($wallet_balance);
$stmt->fetch();
$stmt->close();

// Pass the wallet balance to the template
$smarty->assign('wallet_balance', $wallet_balance);

// Load the template for Wallet Balance page

page_footer("wallet_balance");
?>