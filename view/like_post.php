<?php
session_start();
// Include database connection
include '..\settings\connection.php';

// Check if the action and post_id parameters are set
if (isset($_GET['action']) && isset($_GET['post_id'])) {
    $action = $_GET['action'];
    $postId = $_GET['post_id'];

    // Get user ID from session (assuming user authentication and session handling)
    $userId = $_SESSION['user_id'];


    // Check if the user has already liked or disliked the post
    $check_query = "SELECT * FROM post_likes WHERE user_id = '$userId' AND post_id = '$postId'";
    $check_result = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($check_result) == 0) {
        // Insert the action (like or dislike) into the post_likes table
        $insert_query = "INSERT INTO post_likes (post_id, user_id, action) VALUES ('$postId', '$userId', '$action')";
        $insert_result = mysqli_query($conn, $insert_query);

        // Check if the insertion was successful
        if ($insert_result) {
            // Return success response
            http_response_code(200);
            exit();
        } else {
            // Return error response
            http_response_code(500);
            exit();
        }
    } else {
        // User has already liked or disliked the post
        http_response_code(400);
        exit();
    }
} else {
    // Return error response if action or post_id parameters are not set
    http_response_code(400);
    exit();
}
?>
