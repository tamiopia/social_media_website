<?php
require('bootloader.php');

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if the user is logged in
if (!$user->_logged_in) {
    echo json_encode(['status' => 'error', 'message' => 'User is not logged in.']);
    exit;
}

// Get the logged-in user's ID
$userId = $user->_data['user_id'];

// Function to fetch followings
function fetchFollowings($userId) {
    global $pdo;
    try {
        $stmt = $pdo->prepare("SELECT f.following_id, u.user_firstname, u.user_lastname, u.user_name, u.user_picture, u.user_gender
            FROM followings AS f
            JOIN users AS u ON f.following_id = u.user_id
            WHERE f.user_id = :userId");
        $stmt->execute(['userId' => $userId]);
        
        // Debugging statement to check fetched followings data
        $followings = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode(['status' => 'debug', 'message' => 'Fetched followings', 'data' => $followings]);

        return $followings;
    } catch (PDOException $e) {
        echo json_encode(['status' => 'error', 'message' => 'Database query error: ' . $e->getMessage()]);
        exit;
    }
}

// Check if the query parameter is set
if (isset($_GET['q']) && !empty($_GET['q'])) {
    $searchQuery = $_GET['q'];

    // Fetch followings
    $followings = fetchFollowings($userId);

    // Filter followings based on search query
    $filteredResults = array_filter($followings, function($user) use ($searchQuery) {
        // Convert names to lower case for case-insensitive comparison
        return stripos($user['user_firstname'], $searchQuery) !== false || 
               stripos($user['user_lastname'], $searchQuery) !== false || 
               stripos($user['user_name'], $searchQuery) !== false;
    });

    // Debugging statement to check filtered results
    echo json_encode(['status' => 'debug', 'message' => 'Filtered results', 'data' => $filteredResults]);

    // Limit results to 10
    $limitedResults = array_slice($filteredResults, 0, 10);

    // Return the filtered results
    if ($limitedResults) {
        echo json_encode(['status' => 'success', 'data' => $limitedResults]);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'No users found.']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'No query parameter was set.']);
}
?>
