<?php
// include necessary files and initialize DB
require('../../../bootstrap.php');

// Check if the user is logged in
if (!$user->_logged_in) {
    header('Content-Type: application/json');
    echo json_encode(['error' => 'User not logged in']);
    exit();
}

// Define the function to fetch pushpin requests
function getPushPinRequests() {
    global $db, $user;

    // Array to hold requests
    $requests = [];

    // Fetch pushpin requests where is_pushed is set to '1' and pinner_id matches current user ID
    $query = $db->query(sprintf(
        "SELECT id, pinner_name, message FROM posts WHERE is_pushed = '1' AND pinner_id = %s",
        secure($user->_data['user_id'], 'int')
    ));

    // Check if the query was successful
    if ($query) {
        while ($row = $query->fetch_assoc()) {
            $requests[] = $row;
        }
    } else {
        // Error handling (optional: log errors if necessary)
        return ['error' => 'Failed to retrieve pushpin requests'];
    }

    return $requests;
}

// Output the pushpin requests as JSON
header('Content-Type: application/json');
echo json_encode(getPushPinRequests());
exit();
