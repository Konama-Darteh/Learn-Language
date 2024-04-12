<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assessment Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2e6ff; /* Purple background color */
            color: #FFFFFF; /* White text color */
            margin: 0;
            padding: 0;
        }

        .assessment-container {
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

        h3 {
            color: #FFE4B5; /* Light yellow color for subheadings */
        }

        p {
            margin-bottom: 10px;
        }

        input[type=text] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            box-sizing: border-box;
        }

        input[type=submit] {
            background-color: #6A0DAD; /* Purple submit button color */
            color: #FFFFFF;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #4B0082; /* Darker purple color on hover */
        }
    </style>

    <!-- SweetAlert----->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        // Function to show SweetAlert confirmation
        function showConfirmation() {
            swal({
                title: "Are you sure?",
                text: "Your scores will be available shortly.",
                icon: "info",
                buttons: true,
                dangerMode: false,
            })
            .then((willSubmit) => {
                if (willSubmit) {
                    // If user confirms, submit the form
                    document.getElementById("assessmentForm").submit();
                }
            });
        }
    </script>
</head>
<body>
    <div class="assessment-container">
        <h2>Assessment Questions</h2>
        <?php
        // Check if the proficiency level is set in the URL
        if (isset($_GET['level'])) {
            $level = $_GET['level'];
            
            // Display questions based on the proficiency level
            if ($level == 'A') {
                // Sample beginner level questions
                echo "<h3>Beginner Level Questions</h3>";
                echo "<form id='assessmentForm' action='..\LearnLanguage\action\process_answer.php' method='post'>";
                echo "<p>Question 1: What is a noun?</p>";
                echo "<input type='radio' name='answer1' value='A'> A) A person, place, thing, or idea<br>";
                echo "<input type='radio' name='answer1' value='B'> B) A word that describes an action<br>";
                echo "<input type='radio' name='answer1' value='C'> C) A type of pronoun<br>";

                echo "<p>Question 2: Define a verb.</p>";
                echo "<input type='radio' name='answer2' value='A'> A) A person, place, thing, or idea<br>";
                echo "<input type='radio' name='answer2' value='B'> B) A word that describes an action<br>";
                echo "<input type='radio' name='answer2' value='C'> C) A type of pronoun<br>";

                echo "<input type='button' value='Submit' onclick='showConfirmation()'>";
                echo "</form>";
            } elseif ($level == 'B') {
                // Sample intermediate level questions
                echo "<h3>Intermediate Level Questions</h3>";
                // Add intermediate level multiple-choice questions here
            } elseif ($level == 'C') {
                // Sample advanced level questions
                echo "<h3>Advanced Level Questions</h3>";
                // Add advanced level multiple-choice questions here
            } else {
                // Handle invalid proficiency levels
                echo "<p>Invalid proficiency level.</p>";
            }
        } else {
            // Handle cases where proficiency level is not set
            echo "<p>Proficiency level not specified.</p>";
        }
        ?>
    </div>
</body>
</html>
