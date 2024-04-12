<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson Selection</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2e6ff; /* Purple themed background */
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #4b0082; /* Purple themed text color */
        }

        form {
            text-align: center;
            margin-top: 50px;
        }

        label {
            font-size: 18px;
            color: #4b0082; /* Purple themed text color */
        }

        select {
            padding: 10px;
            font-size: 16px;
            border: 2px solid #4b0082; /* Purple themed border */
            border-radius: 5px;
            margin-top: 10px;
        }

        button {
            padding: 10px 20px;
            background-color: #4b0082; /* Purple themed background */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
        }

        button:hover {
            background-color: #6a1a9b; /* Darker purple on hover */
        }

        p {
            margin-top: 20px;
            color: #4b0082; /* Purple themed text color */
        }

        a {
            text-decoration: none;
            color: #6a1a9b; /* Purple themed link color */
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Select Your Proficiency Level</h1>
    <form action="../LearnLanguage/action/process_proficiency.php" method="post">
        <label for="proficiency">Choose your proficiency level:</label>
        <select name="proficiency" id="proficiency" required>
            <option value="A">A - Beginner</option>
            <option value="B">B - Intermediate</option>
            <option value="C">C - Advanced</option>
        </select>
        <br><br>
        <button type="submit">Submit</button>
        <p>Don't know your proficiency?</p>
        <p>click here to take the test <a href='https://www.transparent.com/learn-english/proficiency-test.html' target="_blank">Take Test</a></p>
    </form>
</body>
</html>
