<?php
require('bootloader.php'); // Include necessary files

// Check if an ID is provided
// Get post details with the given ID
$post_id = $_GET['id'];
$response = ["success" => false];

if ($post_id) {
    // Fetch post details
    $query = $db->query("SELECT * FROM posts WHERE post_id = $post_id");
    $post = $query->fetch_assoc();

    if ($post) {
        // Prepare response with post details
        $response["post"] = $post;

        // Fetch photo if available from post_photos table
        $photo_query = $db->query("SELECT source FROM posts_photos WHERE post_id = $post_id LIMIT 1");
        $photo = $photo_query->fetch_assoc();

        // Include photo in the response if available
        if ($photo) {
            $response["post"]["source"] = $photo['source'];
        } else {
            $response["post"]["source"] = null; // Ensure it's null if no photo
        }

        $response["success"] = true;
    } else {
        $response["message"] = "Post not found";
    }
}

echo json_encode($response);

?>
