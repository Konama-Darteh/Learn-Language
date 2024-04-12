<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assessment Results</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2e6ff; /* Purple background color */
            color: #FFFFFF; /* White text color */
            margin: 0;
            padding: 0;
        }

        .result-container {
            width: 80%;
            margin: auto;
            padding: 20px;
            background-color: #4B0082; /* Dark purple container background */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Shadow effect */
        }

        h2 {
            color: #FFFFFF; /* White color for headings */
            text-align: center;
            margin-bottom: 20px;
        }

        p {
            margin-bottom: 10px;
        }

        .score {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }

        .fun-message {
            text-align: center;
        }

        .fun-message img {
            width: 50px;
            height: 50px;
            margin-top: 20px;
        }
        img{
            width: 30px;
            height: 40px;
            margin-top: 20px;

        }
        .home {
            position: 150px;
            top: 10px;
            right: 10px;
            background-color: #6A0DAD; 
            color: #f2e6ff; 
            padding: 8px 12px;
            border-radius: 5px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="result-container">
        <?php
        // Start session
        session_start();

        // Define correct answers for each proficiency level
        $correctAnswers = [
            'A' => ['answer1' => 'A', 'answer2' => 'B'], // Beginner level
            'B' => ['answer1' => 'C', 'answer2' => 'D'], // Intermediate level
            'C' => ['answer1' => 'E', 'answer2' => 'F'], // Advanced level
        ];

        // Check if the form was submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Check if answers are set and not empty
            if (isset($_POST['answer1']) && isset($_POST['answer2']) && !empty($_POST['answer1']) && !empty($_POST['answer2'])) {
                // Get the submitted answers
                $answer1 = $_POST['answer1'];
                $answer2 = $_POST['answer2'];

                // Get the proficiency level from the session
                $level = isset($_SESSION['proficiency_level']) ? $_SESSION['proficiency_level'] : '';

                // Check if the proficiency level is valid
                if (isset($correctAnswers[$level])) {
                    // Get the correct answers for the current proficiency level
                    $correctAnswer1 = $correctAnswers[$level]['answer1'];
                    $correctAnswer2 = $correctAnswers[$level]['answer2'];

                    // Compare the selected answers with the correct answers
                    $score = 0;
                    if ($answer1 === $correctAnswer1) {
                        $score++;
                    }
                    if ($answer2 === $correctAnswer2) {
                        $score++;
                    }

                    // Display the score and a fun message based on the score
                    echo "<h2>Assessment Results</h2>";
                    echo "<div class='score'>You scored $score out of 2!</div>";
                    echo "<div class='fun-message'>";
                    if ($score == 2) {
                        echo "<p>Wow, you're a language master! 🌟🎉</p>";
                        echo "<img src='../assets/images/trophy.jpeg' alt='Trophy'>";
                    } elseif ($score == 1) {
                        echo "<p>Not bad! Keep practicing! 👍</p>";
                        echo "<img src='../assets/images/biceps.jpeg' alt='Flexed biceps'>";
                    } else {
                        echo "<p>Don't worry, practice makes perfect! 💪</p>";
                        echo "<img src='../assets/images/sad.jpeg' alt='Pensive face'>";
                    }
                    echo "</div>";
                } else {
                    echo "<p>Error: Invalid proficiency level.</p>";
                }
            } else {
                // Handle case where answers are not set or empty
                echo "<p>Error: Answers not provided.</p>";
            }
        } else {
            // Handle case where form was not submitted
            echo "<p>Error: Form not submitted.</p>";
        }
        ?>
        <a href="..\index.php" name="home">Home</a>
    </div>
</body>
</html>
