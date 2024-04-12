<?php
// Assume you have already established database connection

// Retrieve user's proficiency level from the database
$user_id = $_SESSION['user_id']; // Assuming you have user authentication and session management
$query = "SELECT proficiency_level FROM progress_tracking WHERE user_id = $user_id ORDER BY timestamp DESC LIMIT 1";
$result = mysqli_query($conn, $query);
if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $proficiency_level = $row['proficiency_level'];

    // Determine lesson category based on proficiency level
    switch ($proficiency_level) {
        case 'A1':
        case 'A2':
            // Redirect to beginner lesson page
            header("Location: beginner_lessons.php");
            break;
        case 'B1':
        case 'B2':
            // Redirect to intermediate lesson page
            header("Location: intermediate_lessons.php");
            break;
        case 'C1':
        case 'C2':
            // Redirect to advanced lesson page
            header("Location: advanced_lessons.php");
            break;
        default:
            // Redirect to default lesson page or handle other cases
            header("Location: default_lessons.php");
            break;
    }
} else {
    // Handle case where user's proficiency level is not found
    // Redirect to default lesson page or handle other cases
    header("Location: default_lessons.php");
}



?>
