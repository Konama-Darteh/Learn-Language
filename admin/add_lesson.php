<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Lesson</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2e6ff; /* Purple background color */
            color: #FFFFFF; /* White text color */
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
            background-color: #4B0082; /* Dark purple container background */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Shadow effect */
        }

        h2 {
            color: #FFFFFF; /* White color for headings */
        }

        label {
            color: #FFFFFF; /* White color for labels */
            margin-bottom: 10px;
            display: block;
        }

        input[type=text], textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            box-sizing: border-box;
            background-color: #6A0DAD; /* Purple input background color */
            color: #FFFFFF; /* White text color */
            border: none;
            border-radius: 5px;
        }

        input[type=submit] {
            background-color: #6A0DAD; /* Purple submit button color */
            color: #FFFFFF; /* White text color */
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #4B0082; 
        }
        .view{
            text-decoration: none;
            color: white;
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #6A0DAD;
            padding: 8px 12px;
            border-radius: 5px;
            
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Add Lesson</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>

            <label for="language">Language:</label>
            <input type="text" id="language" name="language" required>

            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="4" required></textarea>


            <label for="language_pref">Language Preference:</label>
            <input type="text" id="language_pref" name="language_pref" required>

            <label for="notes">Notes:</label>
            <textarea id="notes" name="notes" rows="4"></textarea>

            <label for="video_url">Video URL:</label>
            <input type="text" id="video_url" name="video_url" required>

            <input type="submit" value="Add Lesson">
        </form>
    </div>

    <?php
    // Include database connection
    include '..\settings\connection.php';

    // Process form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $title = $_POST['title'];
        $description = $_POST['description'];
        $language= $_POST['language'];
        $languagePref = $_POST['language_pref'];
        $notes = $_POST['notes'];
        $videoUrl = $_POST['video_url'];

        // Insert new lesson into database
        $query = "INSERT INTO lessons (language, title, description, language_pref, notes, video_url) VALUES ('$language', '$title', '$description', '$languagePref', '$notes', '$videoUrl')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "<script>alert('Lesson added successfully!');</script>";
        } else {
            echo "<script>alert('Error adding lesson: " . mysqli_error($conn) . "');</script>";
        }
    }
    ?>
    <a href="view_lesson.php" class="view">View Lesson</a>
</body>
</html>
