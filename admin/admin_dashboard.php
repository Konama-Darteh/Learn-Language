<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 100px auto;
            padding: 20px;
            background-color: plum;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #6a0dad;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            background-color: #6a0dad;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
        }

        .button:hover {
            background-color: #8c3ddb;
        }

        .lesson-links {
            margin-top: 20px;
        }

        .lesson-links a {
            display: block;
            margin-bottom: 10px;
            color: wheat;
            text-decoration: none;
        }

        .lesson-links a:hover {
            color: #6a0dad;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to the Admin Dashboard</h1>
        <div class="lesson-links">
            <a href="view_lesson.php" class="button">View All Lessons</a>
            <a href="add_lesson.php" class="button">Add New Lesson</a>
            <a href="logout.php">Logout</a>
            
        </div>
    </div>
</body>
</html>
