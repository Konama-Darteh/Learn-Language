<?php
// Start the session to manage user login status
session_start();

// Include the connection file
include '../../settings/connection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data and assign each to a variable
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Write your SELECT query to check if the user exists
    $query = "SELECT * FROM users WHERE email = '$email'";

    // Execute the query
    $result = mysqli_query($conn, $query);

    // Check if the user exists in the database
    if (mysqli_num_rows($result) > 0) {
        // Fetch the user data
        $row = mysqli_fetch_assoc($result);
        
        // Verify the password
        if (password_verify($password, $row['password'])) {
            // Password is correct, create session variables
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['email'] = $row['email'];
            
            // Check the role of the user
            if ($row['role'] == 0) {
                // User is an admin, redirect to the admin page
                header("Location: ..\..\admin\admin_dashboard.php");
                exit();
            } else {
                // User is not an admin, redirect to the homepage
                header("Location: ..\index.php");
                exit();
            }
        } else {
            // Password is incorrect, redirect back to the login page with an error message
            header("Location: ../view/login.php?error=incorrect_password");
            exit();
        }
    } else {
        // User does not exist, redirect back to the login page with an error message
        header("Location: ../view/login.php?error=user_not_found");
        exit();
    }
} else {
    // If the form is not submitted, redirect back to the login page
    header("Location: ../view/login.php");
    exit();
}
?>
