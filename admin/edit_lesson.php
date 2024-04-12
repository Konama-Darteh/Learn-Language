<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Lesson</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #6A0DAD; /* Purple background color */
            color: #FFFFFF; /* White text color */
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #4B0082; /* Dark purple container background */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Shadow effect */
        }

        h2 {
            color: #FFFFFF; /* White color for headings */
            font-size: 24px;
            margin-bottom: 20px;
        }

        label {
            color: #FFFFFF; /* White color for labels */
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            box-sizing: border-box;
            border: none;
            border-radius: 5px;
            background-color: #6A0DAD; /* Light purple input background */
            color: #FFFFFF; /* White text color */
        }

        input[type="submit"] {
            background-color: #6A0DAD; /* Purple submit button color */
            color: #FFFFFF;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #4B0082; /* Darker purple color on hover */
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
        <h2>Update Lesson</h2>
        <?php
        // Include database connection
        include '../settings/connection.php';

        // Check if lesson ID is provided in the URL
        if (isset($_GET['id'])) {
            $lessonId = $_GET['id'];

            // Fetch lesson details from the database based on lesson ID
            $query = "SELECT * FROM lessons WHERE lesson_id=$lessonId";
            $result = mysqli_query($conn, $query);

            if ($result && mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                ?>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>?id=<?php echo $lessonId; ?>" method="post">
                    
                    <input type="hidden" name="lesson_id" value="<?php echo $row['lesson_id']; ?>">
                    <label for="title">Title:</label>
                    <input type="text" id="title" name="title" value="<?php echo $row['title']; ?>" required>
                    <label for="description">Description:</label>
                    <textarea id="description" name="description" required><?php echo $row['description']; ?></textarea>
                    <label for="language_pref">Language Preference:</label>
                    <input type="text" id="language_pref" name="language_pref" value="<?php echo $row['language_pref']; ?>" required>
                    <label for="notes">Notes:</label>
                    <textarea id="notes" name="notes"><?php echo $row['notes']; ?></textarea>
                    <label for="video_url">Video URL:</label>
                    <input type="text" id="video_url" name="video_url" value="<?php echo $row['video_url']; ?>">
                    <input type="submit" value="Update Lesson">
                </form>
                <?php
            } else {
                echo "<p>No lesson found with the provided ID.</p>";
            }
        } else {
            echo "<p>Lesson ID is missing in the URL.</p>";
        }

        // Process form submission for updating lesson
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve form data
            $lessonId = $_POST['lesson_id'];
            $title = $_POST['title'];
            $description = $_POST['description'];
            $languagePref = $_POST['language_pref'];
            $notes = $_POST['notes'];
            $videoUrl = $_POST['video_url'];

            // Update lesson in the database
            $query = "UPDATE lessons SET title='$title', description='$description', language_pref='$languagePref', notes='$notes', video_url='$videoUrl' WHERE lesson_id=$lessonId";
            $result = mysqli_query($conn, $query);

            if ($result) {
                echo "<p>Lesson updated successfully!</p>";
            } else {
                echo "<p>Error updating lesson: " . mysqli_error($conn) . "</p>";
            }
        }
        ?>
        <a href="view_lesson.php" class="view">View Lesson</a>
    </div>
</body>
</html>
