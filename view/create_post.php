<?php
// Include database connection
include '..\settings\connection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve post content from the form
    $post_content = $_POST['post_content'];

    // Insert the new post into the database
    $insert_query = "INSERT INTO community_engagement (user_id, post_content) VALUES (1, '$post_content')";
    $insert_result = mysqli_query($conn, $insert_query);

    // Check if the insertion was successful
    if ($insert_result) {
        // Redirect back to the forum page after posting
        header("Location: forum.php");
        exit();
    } else {
        echo "Failed to create post.";
    }
}
?>
