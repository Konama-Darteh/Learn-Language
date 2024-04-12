<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson Listings</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #6A0DAD; /* Purple background color */
            color: #FFFFFF; /* White text color */
            margin: 0;
            padding: 0;
        }

        .lesson {
            background-color: #4B0082; /* Dark purple container background */
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Shadow effect */
            position: relative; /* Position relative for absolute positioning of buttons */
        }

        h2 {
            color: #FFFFFF; /* White color for headings */
            font-size: 24px;
            margin-bottom: 10px;
        }

        p {
            color: #FFE4B5; /* Light yellow color for text */
            font-size: 16px;
            margin-bottom: 5px;
        }

        .edit-btn,
        .delete-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #6A0DAD;
            color: #FFFFFF;
            padding: 8px 12px;
            border-radius: 5px;
            text-decoration: none;
        }

        .delete-btn {
            background-color: #FF0000; /* Red color for delete button */
            right: 70px; /* Adjust position */
        }
    </style>
</head>
<body>
    <?php
    // Include database connection
    include '..\settings\connection.php';

    // Retrieve lessons from the database
    $query = "SELECT * FROM lessons";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='lesson'>";
            echo "<h2>{$row['title']}</h2>";
            echo "<p>{$row['description']}</p>";
            // Edit and delete buttons
            echo "<a href='edit_lesson.php?id={$row['lesson_id']}' class='edit-btn'>Edit</a>";
            echo "<a href='delete_lesson.php?id={$row['lesson_id']}' class='delete-btn'>Delete</a>";
            echo "</div>";
        }
    } else {
        echo "<p>No lessons found.</p>";
    }
    ?>
    <a href="admin_dashboard.php" class="home">Home</a>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson Listings</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #6A0DAD; /* Purple background color */
            color: #FFFFFF; /* White text color */
            margin: 0;
            padding: 0;
        }

        .lesson {
            background-color: #4B0082; /* Dark purple container background */
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Shadow effect */
            position: relative; /* Position relative for absolute positioning of buttons */
        }

        h2 {
            color: #FFFFFF; /* White color for headings */
            font-size: 24px;
            margin-bottom: 10px;
        }

        p {
            color: #FFE4B5; /* Light yellow color for text */
            font-size: 16px;
            margin-bottom: 5px;
        }

        .edit-btn,
        .delete-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        background-color: #6A0DAD; /* Purple color for delete button */
        color: whitesmoke; /* White text color */
        padding: 8px 12px;
        border-radius: 5px;
        text-decoration: none;
    }


        .delete-btn {
            background-color: #FF0000; /* Red color for delete button */
            right: 70px; /* Adjust position */
        }
        .home {
            position: 150px;
            top: 10px;
            right: 10px;
            background-color: #6A0DAD; 
            color: #FFFFFF; 
            padding: 8px 12px;
            border-radius: 5px;
            text-decoration: none;
        }

    </style>
</head>
<body>
    <?php
    // Include database connection
    include '../settings/connection.php';

    // Retrieve lessons from the database
    $query = "SELECT * FROM lessons";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='lesson'>";
            echo "<h2>{$row['title']}</h2>";
            echo "<p>{$row['description']}</p>";
            // Edit and delete buttons
            echo "<a href='edit_lesson.php?id={$row['lesson_id']}' class='edit-btn'>Edit</a>";
            echo "<a href='delete_lesson.php?id={$row['lesson_id']}' class='delete-btn'>Delete</a>";
            echo "</div>";
        }
    } else {
        echo "<p>No lessons found.</p>";
    }
    ?>
    <a href="admin_dashboard.php" class="home">Home</a>

    
</body>
</html>
