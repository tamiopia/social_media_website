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

// Approve the post by creating a new post
if ($post_id && $pinner_id) {
    // Fetch the original post data
    $query = $db->prepare("SELECT * FROM posts WHERE post_id = ?");
    $query->bind_param('i', $post_id);
    $query->execute();
    $original_post = $query->get_result()->fetch_assoc();

    if ($original_post) {
        // Prepare the data for the new post
        $updateQuery = sprintf(
            "UPDATE posts SET is_pinner_aproved = %s WHERE post_id = %s",
            secure(1, 'int'), // Setting is_pinner_aproved to true (1)
            secure($post_id, 'int') // Securely passing post_id
        );
        
        // Log the update query
        error_log("Update Query: " . $updateQuery);
        
        // Execute the update and check for errors
        if ($db->query($updateQuery) === FALSE) {
            error_log("Database Error: " . $db->error);
            modal("ERROR", __("Error"), __("An error occurred while updating the push pin data"));
        } else {
            error_log("Push Pin Data Updated Successfully for Post ID: " . $post_id);
        }
        
        $inputs = [
            'user_type' => $original_post['user_type'],
            'in_group' => $original_post['in_group'] ?? 0,
            'group_id' => $original_post['group_id'] ?? 0,
            'group_approved' => $original_post['group_approved'] ?? 0,
            'in_event' => $original_post['in_event'] ?? 0,
            'event_id' => $original_post['event_id'] ?? 0,
            'event_approved' => $original_post['event_approved'] ?? 0,
            'in_wall' => $original_post['in_wall'] ?? 0,
            'wall_id' => $original_post['wall_id'] ?? 0,
            'post_type' => $original_post['post_type'] ?? 'photos',
            'colored_pattern' => $_POST['colored_pattern'] ?? 0, // from POST data
            'origin_id' => $original_post['origin_id'] ?? null,
            'time' => date('Y-m-d H:i:s'),
            'location' => $original_post['location'] ?? '',
            'privacy' => $original_post['privacy'] ?? 'public',
            'message' => $original_post['text'] ?? 'test text',
            'feeling_action' => $original_post['feeling_action'] ?? '',
            'feeling_value' => $original_post['feeling_value'] ?? '',
            'boosted' => $original_post['boosted'] ?? 0,
            'boosted_by' => $original_post['boosted_by'] ?? null,
            'comments_disabled' => $original_post['comments_disabled'] ?? 0,
            'is_hidden' => $original_post['is_hidden'] ?? 0,
            'for_adult' => $original_post['for_adult'] ?? 0,
            'is_anonymous' => $original_post['is_anonymous'] ?? 0,
            'reaction_like_count' => $original_post['reaction_like_count'] ?? 0,
            'reaction_love_count' => $original_post['reaction_love_count'] ?? 0,
            'reaction_haha_count' => $original_post['reaction_haha_count'] ?? 0,
            'reaction_yay_count' => $original_post['reaction_yay_count'] ?? 0,
            'reaction_wow_count' => $original_post['reaction_wow_count'] ?? 0,
            'reaction_sad_count' => $original_post['reaction_sad_count'] ?? 0,
            'reaction_angry_count' => $original_post['reaction_angry_count'] ?? 0,
            'comments' => $original_post['comments'] ?? 0,
            'shares' => $original_post['shares'] ?? 0,
            'views' => $original_post['views'] ?? 0,
            'post_rate' => $original_post['post_rate'] ?? 0,
            'points_earned' => $original_post['points_earned'] ?? 0,
            'tips_enabled' => $original_post['tips_enabled'] ?? 0,
            'for_subscriptions' => $original_post['for_subscriptions'] ?? 0,
            'is_paid' => $original_post['is_paid'] ?? 0,
            'post_price' => $original_post['post_price'] ?? 0,
            'paid_text' => $original_post['paid_text'] ?? '',
            'processing' => $original_post['processing'] ?? 0,
            'pre_approved' => $original_post['pre_approved'] ?? 1,
            'has_approved' => $original_post['has_approved'] ?? 1,
            'is_pushed' => $original_post['is_pushed'] ?? 1,
            'is_pinner_aproved' => 1, // Mark as approved
            'pinner_id' => (int)$pinner_id, // Cast to int
            'pusher_message' => $original_post['pusher_message'] ?? '',
            'source' => $original_post['source'] ?? ''
        ];
        // echo "<pre>";
        // print_r($original_post['post_type'] );
        // echo "</pre>";
        // Create the new post
        $post = $user->publisher($inputs);
        $new_post_id = $post['post_id'] ?? null; // Make sure we have a new post ID

        if ($new_post_id) {
            // Fetch the original photo URL
            $photo_query = $db->prepare("SELECT * FROM posts_photos WHERE post_id = ?");
            $photo_query->bind_param('i', $post_id);
            $photo_query->execute();
            $original_photo = $photo_query->get_result()->fetch_assoc();

            if ($original_photo) {
                // Get the album ID from posts_photos_albums
                $album_query = $db->prepare("SELECT album_id FROM posts_photos_albums WHERE user_id = ?");
                $album_query->bind_param('i', $pinner_id);
                $album_query->execute();
                $album_result = $album_query->get_result()->fetch_assoc();
                $album_id = $album_result['album_id'] ?? null;

                $updateQuery = sprintf(
                    "UPDATE posts SET post_type = %s WHERE post_id = %s",
                    secure('photos', 'string'), // Correctly passing 'photos' as a string
                    secure($new_post_id, 'int') // Securely passing post_id as an integer
                );
                
                // Log the update query
                error_log("Update Query: " . $updateQuery);
                
                // Execute the update and check for errors
                if ($db->query($updateQuery) === FALSE) {
                    error_log("Database Error: " . $db->error);
                    modal("ERROR", __("Error"), __("An error occurred while updating the push pin data"));
                } else {
                    error_log("Push Pin Data Updated Successfully for Post ID: " . $post_id);
                }

                if ($album_id) {
                    // Insert original photo URL into new post_photos entry with album ID
                    $new_photo_query = $db->prepare("INSERT INTO posts_photos (post_id, source, album_id) VALUES (?, ?, ?)");
                    $new_photo_query->bind_param('isi', $new_post_id, $original_photo['source'], $album_id);
                    if ($new_photo_query->execute()) {
                        // Redirect to the home route upon successful insertion
                        header("Location: /");
                        exit;
                    } else {
                        echo "Failed to insert photo into post.";
                    }
                } else {
                    echo "Album not found for the user.";
                }
                
            } else {
                echo "Original photo not found.";
            }
        } else {
            echo "Error creating the post.";
        }
    } else {
        echo "Original post not found.";
    }
}
?>
