<?php
// Include necessary files
require('bootloader.php');

// User access
user_access();

// Check if the user is logged in
if (!$user->_logged_in) {
    user_login();
}
$userId = $user->_data['user_id'];

// Set the page title
page_header("Push Pin Settings");

// Fetch current settings from the database
function getPushPinSettings($userId) {
    global $db;
    
    $query = $db->prepare("SELECT free_pushes, push_price, payment_type FROM push_settings WHERE user_id = ?");
    if (!$query) {
        die("Database prepare error: " . $db->error);
    }
    
    $query->bind_param('i', $userId);
    $query->execute();
    $result = $query->get_result();
    
    return $result ? $result->fetch_assoc() : null;
}

// Save settings to the database
function savePushPinSettings($userId, $freePushes, $pushPrice, $paymentType) {
    global $db;

    // Validate payment type
    $allowedPaymentTypes = ['auction', 'fixed'];
    if (!in_array($paymentType, $allowedPaymentTypes)) {
        return false; // Invalid payment type
    }

    // Check if settings already exist
    $query = $db->prepare("SELECT COUNT(*) FROM push_settings WHERE user_id = ?");
    if (!$query) {
        die("Database prepare error: " . $db->error);
    }
    
    $query->bind_param('i', $userId);
    $query->execute();
    $result = $query->get_result()->fetch_row();

    if ($result[0] > 0) {
        // Update existing settings
        $query = $db->prepare("UPDATE push_settings SET free_pushes = ?, push_price = ?, payment_type = ? WHERE user_id = ?");
        $query->bind_param('disi', $freePushes, $pushPrice, $paymentType, $userId);
    } else {
        // Insert new settings
        $query = $db->prepare("INSERT INTO push_settings (user_id, free_pushes, push_price, payment_type) VALUES (?, ?, ?, ?)");
        $query->bind_param('idis', $userId, $freePushes, $pushPrice, $paymentType);
    }

    if (!$query) {
        die("Database prepare error: " . $db->error);
    }
    
    return $query->execute();
}
function savePushPinSettingss($userId, $freePushes,$paymentType) {
    global $db;

    // Validate payment type
    $allowedPaymentTypes = ['auction', 'fixed'];
    if (!in_array($paymentType, $allowedPaymentTypes)) {
        return false; // Invalid payment type
    }

    // Check if settings already exist
    $query = $db->prepare("SELECT COUNT(*) FROM push_settings WHERE user_id = ?");
    if (!$query) {
        die("Database prepare error: " . $db->error);
    }
    
    $query->bind_param('i', $userId);
    $query->execute();
    $result = $query->get_result()->fetch_row();

    if ($result[0] > 0) {
        // Update existing settings
        $query = $db->prepare("UPDATE push_settings SET free_pushes = ?, payment_type = ? WHERE user_id = ?");
        $query->bind_param('isi', $freePushes,$paymentType, $userId);
    } else {
        // Insert new settings
        $query = $db->prepare("INSERT INTO push_settings (user_id, free_pushes, payment_type) VALUES (?, ?, ?, ?)");
        $query->bind_param('iii', $userId, $freePushes,$paymentType);
    }

    if (!$query) {
        die("Database prepare error: " . $db->error);
    }
    
    return $query->execute();
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ensure values are properly cast
    $freePushes = intval($_POST['max_pushpins']);
    $paymentType = $_POST['payment_type'];
    $pushPrice = 0; // Default price

    if ($paymentType === 'auction') {
        $pushPrice = 0;
        savePushPinSettingss($userId, $freePushes,$paymentType);
    } else {
        // Ensure pushpin price is numeric
        $pushPrice = is_numeric($_POST['pushpin_price']) ? floatval($_POST['pushpin_price']) : 0;
    }

    // Save the settings to the database
    if (savePushPinSettings($userId, $freePushes, $pushPrice, $paymentType)) {
        $success_message = "Settings saved successfully.";
    } else {
        $error_message = "Error saving settings.";
    }
}

// Get current settings after potential modification
$currentSettings = getPushPinSettings($userId);

// Assign to template
$smarty->assign('settings', [
    'max_pushpins' => $currentSettings['free_pushes'] ?? 0, // Default to 0 if no settings found
    'pushpin_price' => $currentSettings['push_price'] ?? null, // Default to null if no settings found
    'payment_type' => $currentSettings['payment_type'] ?? 'fixed', // Default to 'fixed' if not set
]);

// Display success or error messages if any
if (isset($success_message)) {
    $smarty->assign('success_message', $success_message);
}
if (isset($error_message)) {
    $smarty->assign('error_message', $error_message);
}

// Include the footer
page_footer("pushpin_settings");
?>
