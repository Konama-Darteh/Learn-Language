<?php
// Include the connection file
include '../../settings/connection.php';

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data and assign each to a variable and remove special characters
    $firstName = mysqli_real_escape_string($conn, $_POST['fname']);
    $lastName = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $dob = mysqli_real_escape_string($conn, $_POST['dob']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $role = mysqli_real_escape_string($conn, $_POST['role']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $passconfirm = mysqli_real_escape_string($conn, $_POST['passconfirm']);
    
    // Check if passwords match
    if ($password !== $passconfirm) {
        // Redirect back to register.php with an error message
        header("Location: ../../view/register.php?error=passwords_mismatch");
        exit();
    }

    // Encrypt the password using the password_hash function and store the hashed version in a variable
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Check if email already exists in the database
    $check_query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $check_query);
    if (mysqli_num_rows($result) > 0) {
        // Email already exists, redirect back to register.php with an error message
        header("Location: ../../view/register.php");
        echo "Email already exist";
        exit();
    }


    // Define the default role for new users
    $defaultRole = 'user';

    // Write your INSERT query using the variables above
    $query = "INSERT INTO users (name, email, password, gender, dob,role) VALUES ('$firstName $lastName', '$email', '$hashedPassword', '$gender', '$dob', '$role')";

    // Execute the query
    $result = mysqli_query($conn, $query);

    // Check if query executed successfully
    if ($result) {
        // Redirect to login page after successful registration
        header("Location: ../../view/login.php");
        exit();
    } else {
        // If execution fails, display error on register.php page
        header("Location: ../../view/register.php?error=registration_failed");
        exit();
    }                            
} else {
    // If the form is not submitted, redirect back to the register.php page
    header("Location: ../../view/register.php");
    exit();
}

// Close the database connection
mysqli_close($conn);
?>
