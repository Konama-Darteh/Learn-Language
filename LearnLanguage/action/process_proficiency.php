<?php
// Start session
session_start();

// Include database connection
include '../../settings/connection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $proficiency = mysqli_real_escape_string($conn, $_POST['proficiency']);


    // Validate proficiency level (optional)

    // Store the proficiency level in the proficiency_assessments table
    $user_id = $_SESSION['user_id'];
    $_SESSION['proficiency_level'] = $proficiency;
    var_dump($_SESSION['user_id']);
    echo "Proficiency: $proficiency<br>";
   
    $query = "INSERT INTO proficiency_assessments (user_id, proficiency_level) VALUES ('$user_id', '$proficiency')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "Proficiency assessment successfully inserted!<br>"; // Debug output

        // Redirect to recommended lesson categories page based on proficiency level
        // Inside the switch statement
        switch ($proficiency) {
            case 'A':
                // echo "Redirecting to beginner lessons...<br>"; // Debug output
                // exit;
                header("Location: ../../view/recommend_lessons.php?level=beginner");
                break;
            case 'B':
                echo "Redirecting to intermediate lessons...<br>"; // Debug output
                header("Location: ../../view/recommend_lessons.php?level=intermediate");
                break;
            case 'C':
                echo "Redirecting to advanced lessons...<br>"; // Debug output
                header("Location: ../../view/recommend_lessons.php?level=advanced");
                break;
            default:
                // Redirect to an error page or handle appropriately
                break;
        }
        
    } else {
        // Handle database error
        $error_message = mysqli_error($conn); // Get the specific MySQL error
        echo "Database Error: $error_message<br>"; // Debug output
        header("Location: ../../view/proficiency.php?error=db_error");
        exit();
    }
} else {
    // If the form is not submitted, redirect back to the proficiency assessment page
    header("Location: ../../view/proficiency.php");
    exit();
}

