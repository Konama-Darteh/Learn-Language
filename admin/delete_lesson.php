<?php
// Include database connection
include '../settings/connection.php';

// Process delete request
if (isset($_GET['id'])) {
    $delete_id = $_GET['id'];
    // Delete lesson from the database
    $delete_query = "DELETE FROM lessons WHERE lesson_id = $delete_id";
    $delete_result = mysqli_query($conn, $delete_query);
    if ($delete_result) {
        // Redirect back to the lesson listings page
        header("Location: view_lesson.php");
        exit();
    } else {
        // Handle deletion failure
        echo "Failed to delete lesson.";
    }
} else {
    // Handle case where ID is not provided
    echo "Lesson ID is missing.";
}
?>
