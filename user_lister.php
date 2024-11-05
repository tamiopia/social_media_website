<?php 
require('bootloader.php');

if (!$user->_logged_in) {
    user_login();  // Redirect or handle login if the user is not logged in
}

$userId = $user->_data['user_id'];  // Get logged-in user's ID

// Fetch followings data with pagination, user details, and push settings for each following
function fetchFollowings($userId, $page = 1, $limit = 10) {
    global $db;
    $offset = ($page - 1) * $limit;

    // SQL query to fetch followings with user details, user picture, user gender, and push settings
    $sql = "SELECT f.following_id, 
               u.user_firstname, u.user_lastname, u.user_name, 
               u.user_picture, u.user_gender,
               ps.free_pushes, ps.payment_type, 
               ps.push_price, ps.availability -- Include availability here
        FROM followings AS f
        JOIN users AS u ON f.following_id = u.user_id
        LEFT JOIN push_settings AS ps ON f.following_id = ps.user_id
        WHERE f.user_id = ?
        LIMIT ?, ?";

    $stmt = $db->prepare($sql);
    if (!$stmt) {
        die("Statement preparation failed: " . $db->error);
    }

    // Bind parameters for user_id, offset, and limit
    $stmt->bind_param('iii', $userId, $offset, $limit);

    // Execute and check for errors
    if (!$stmt->execute()) {
        die("Execution failed: " . $stmt->error);
    }

    $result = $stmt->get_result();

    // Fetch followings with user and push details into an array
    $followings = [];
    while ($row = $result->fetch_assoc()) {
        // Determine the profile picture based on user_picture and user_gender
        if (!empty($row['user_picture'])) {
            $row['profile_photo'] = "//content/uploads/" . $row['user_picture']; // Prepend the path to the user's picture
        } else {
            // If no user picture is available, set a default based on gender
            $row['profile_photo'] = ($row['user_gender'] == 1) ? 
                "/content/themes/default/images/blank_profile_male.png" : 
                "/content/themes/default/images/blank_profile_female.png";
        }

        // Include availability in the user data
        $row['availability'] = $row['availability'] ? 'Available' : 'Not Available';

        // Append the processed user row to followings
        $followings[] = $row;
    }

    // Count total followings for pagination
    $countQuery = "SELECT COUNT(*) as total
                   FROM followings AS f
                   JOIN users AS u ON f.following_id = u.user_id
                   WHERE f.user_id = ?";
    $countStmt = $db->prepare($countQuery);
    if (!$countStmt) {
        die("Statement preparation failed: " . $db->error);
    }

    // Bind user_id parameter for count query
    $countStmt->bind_param('i', $userId);

    if (!$countStmt->execute()) {
        die("Execution failed: " . $countStmt->error);
    }

    $totalCount = $countStmt->get_result()->fetch_assoc()['total'];

    return ['followings' => $followings, 'total' => $totalCount];
}

// Handle pagination parameters
$page = (int)($_GET['page'] ?? 1);
$limit = 10;

// Fetch data
$data = fetchFollowings($userId, $page, $limit);

// Output JSON data
header('Content-Type: application/json');
echo json_encode([
    'page' => $page,
    'total' => $data['total'],
    'followings' => $data['followings']
]);
?>
