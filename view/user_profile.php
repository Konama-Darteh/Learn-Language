<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <!-- Add your CSS stylesheets and JavaScript files here -->
</head>
<body>
    <h1>User Profile</h1>
    <div class="profile-info">
        <h2>Profile Information</h2>
        
        <p>Name: John Doe</p>
        <p>Email: john@example.com</p>
        <!-- Add more user information fields as needed -->

        <!-- Profile picture -->
        <img src="uploads/profile_picture.jpg" alt="Profile Picture" width="150">

        <!-- Form to update profile information -->
        <form action="update_profile.php" method="post" enctype="multipart/form-data">
            <h2>Update Profile</h2>
            <label for="profilePicture">Profile Picture:</label>
            <input type="file" id="profilePicture" name="profilePicture">
            <button type="submit" name="updateProfile">Update Profile</button>
        </form>
    </div>
</body>
</html>
