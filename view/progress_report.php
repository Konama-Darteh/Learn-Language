<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progress Report</title>
    <style>
        .progress-table-container {
            max-width: 800px;
            margin: 20px auto;
            overflow-x: auto;
        }

        .progress-table {
            width: 100%;
            border-collapse: collapse;
        }

        .progress-table th, .progress-table td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }

        .progress-table th {
            background-color: #f2f2f2;
            font-weight: bold;
            text-align: left;
        }

        .progress-table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        body{
            background-color: plum;
        }

        .home{
            text-decoration: none;
            padding: 50px;
            margin: 100px;
        }

        .recommendations {
            margin-top: 20px;
        }

        .recommendations h3 {
            margin-bottom: 10px;
        }

        .recommendations ul {
            padding-left: 20px;
        }
    </style>
</head>
<body>
    <?php
    // Include database connection
    include '../settings/connection.php';

    session_start();

    // Check if user is logged in and session variable is set
    if (isset($_SESSION['user_id'])) {
        // Retrieve user ID from session
        $user_id = $_SESSION['user_id'];

        // Query to retrieve progress data for the user
        $query = "SELECT lessons.title, lessons.language_pref, progress_tracking.completion_status, proficiency_assessments.proficiency_level
                  FROM progress_tracking
                  LEFT JOIN lessons ON progress_tracking.lesson_id = lessons.lesson_id
                  LEFT JOIN proficiency_assessments ON progress_tracking.user_id = proficiency_assessments.user_id
                  WHERE progress_tracking.user_id = $user_id";

        $result = mysqli_query($conn, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            // Display progress report table
            echo "<h2>Progress Report</h2>";
            echo "<div class='progress-table-container'>";
            echo "<table class='progress-table'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th>Lesson Title</th>";
            echo "<th>Language Preference</th>";
            echo "<th>Completion Status</th>";
            echo "<th>Proficiency Level</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            
            // Loop through progress data and populate the table rows
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>{$row['title']}</td>";
                echo "<td>{$row['language_pref']}</td>";
                echo "<td>{$row['completion_status']}</td>";
                echo "<td>{$row['proficiency_level']}</td>";
                echo "</tr>";
            }
            
            echo "</tbody>";
            echo "</table>";
            echo "</div>";

            // Recommendations based on progress
            echo "<div class='recommendations'>";
            echo "<h3>Recommendations:</h3>";
            echo "<ul>";
            
            // Sample recommendations - You can customize this based on actual progress data
            echo "<li>Continue practicing with lessons at a similar proficiency level.</li>";
            echo "<li>Explore lessons in new topics to broaden your language skills.</li>";
            
            echo "</ul>";
            echo "</div>";
        } else {
            echo "No progress data found for the user.";
        }
    } else {
        // Redirect to login page or display error message
        echo "User is not logged in or session variable is not set.";
    }
    ?>

    <a href="..\LearnLanguage\index.php" name=home>Home</a>
</body>
</html>
