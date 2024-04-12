<?php
// Start session
session_start();

// Include database connection
include '..\settings\connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: purple; /* Light gray background */
        }

        .lesson-container {
            width: 80%;
            margin: auto;
            padding: 20px;
            background-color: plum; /* White background for lesson container */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Shadow effect */
        }

        .lesson-title {
            color: #6A0DAD; /* Purple color for the title */
            font-size: 24px;
        }

        .lesson-description {
            color: #4B0082; /* Dark purple color for the description */
            font-size: 16px;
        }

        .video-container {
            margin-top: 20px;
        }

        .video-container iframe {
            width: 100%;
            height: 480px;
        }

        .audio-player {
            margin-top: 20px;
        }

        .audio-player audio {
            width: 100%;
        }

        a.home-link {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #6A0DAD;
            color: #FFFFFF;
            padding: 8px 12px;
            border-radius: 5px;
            text-decoration: none;
        }

        /* Style for the Complete Lesson link */
        .complete-lesson-link {
            display: block; 
            margin-top: 20px; 
            background-color: #6A0DAD;
            color: #FFFFFF;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="lesson-container">
        <?php
        // Check if the user is logged in and has a proficiency level set
        if (isset($_SESSION['user_id']) && isset($_SESSION['proficiency_level'])) {
            // Get the user's proficiency level
            $proficiency = $_SESSION['proficiency_level'];

            // Define the SQL query to fetch lessons based on the proficiency level
            $query = "SELECT l.*, m.content_type, m.content_url 
                      FROM lessons l 
                      LEFT JOIN lesson_media m ON l.lesson_id = m.lesson_id 
                      WHERE l.language = 'English' AND l.language_pref = '$proficiency'";
            $result = mysqli_query($conn, $query);

            if ($result) {
                // Check if there are any lessons available
                if (mysqli_num_rows($result) > 0) {
                    // Loop through the lessons
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<h2 class='lesson-title'>{$row['title']}</h2>";
                        echo "<p class='lesson-description'>{$row['description']}</p>";
                        
                        // Check if multimedia content is available
                        if ($row['content_type'] == 'video') {
                            // Display embedded video from YouTube
                            echo "<div class='video-container'>";
                            echo "<iframe src='{$row['content_url']}' title='Video Player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
                            echo "</div>";
                        } elseif ($row['content_type'] == 'audio') {
                            // Display audio player
                            echo "<div class='audio-player'>";
                            echo "<audio controls>";
                            echo "<source src='{$row['content_url']}' type='audio/mpeg'>";
                            echo "Your browser does not support the audio tag.";
                            echo "</audio>";
                            echo "</div>";
                        }
                    }
                } else {
                    echo "<p>No lessons available for your proficiency level.</p>";
                }
            } else {
                echo "<p>Error fetching lessons from the database.</p>";
            }
        } else {
            // Redirect the user to the proficiency assessment page if the proficiency level is not set
            header("Location: proficiency.php");
            exit();
        }
        
        
        ?>

      <!-- Home link -->
    <a href="../LearnLanguage/index.php" class="home-link">Home</a>

    <!-- Complete Lesson link -->
    <a href="assessment.php?level=<?php echo $proficiency; ?>" class="complete-lesson-link">Complete Lesson</a>

    </div>
</body>
</html>
