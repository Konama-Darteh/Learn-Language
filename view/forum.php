<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum</title>
    <style>
        /* CSS styling for the forum */
        body {
            font-family: Arial, sans-serif;
            background-color: #6A0DAD;
            color: #FFFFFF;
            margin: 0;
            padding: 0;
        }

        .post-container {
            background-color: #4B0082;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #FFFFFF;
            font-size: 24px;
            margin-bottom: 10px;
        }

        p {
            color: #FFE4B5;
            font-size: 16px;
            margin-bottom: 5px;
        }

        .create-post-form {
            margin-top: 20px;
        }

        .create-post-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: none;
            resize: vertical;
        }

        .create-post-form button {
            background-color: #6A0DAD;
            color: #FFFFFF;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .create-post-form button:hover {
            background-color: #4B0082;
            /* Darker purple color on hover */
        }

        a[name="home"] {
            position: absolute;
            top: 20px;
            /* Adjust top position */
            right: 20px;
            /* Adjust right position */
            background-color: #6A0DAD;
            color: #FFFFFF;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <!-- Existing Posts Section -->
    <h2>Existing Posts</h2>
    <div class="post-container">
        <?php
        include '..\settings\connection.php';

        $query = "SELECT 
        c.*, 
        COUNT(CASE WHEN pl.action = 'like' THEN 1 ELSE NULL END) AS likeCount,
        COUNT(CASE WHEN pl.action = 'dislike' THEN 1 ELSE NULL END) AS dislikeCount
    FROM 
        community_engagement c
    LEFT JOIN 
        post_likes pl ON c.post_id = pl.post_id
    GROUP BY 
        c.post_id
    ORDER BY 
        c.post_date DESC;
    ";
        $result = mysqli_query($conn, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='post'>";
                echo "<p>{$row['post_content']}</p>";
                echo "<p>Posted on: {$row['post_date']}</p>";
                echo "<button onclick='likePost({$row['post_id']})'>Like</button>";
                echo "<button onclick='dislikePost({$row['post_id']})'>Dislike</button>";
                echo "<span class='like-count'>{$row['likeCount']}</span>"; // Display like count
                echo "<span class='dislike-count'>{$row['dislikeCount']}</span>"; // Display dislike count
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "<p>No posts found.</p>";
        }
        ?>
    </div>

    <!-- Form for Creating New Posts -->
    <div class="create-post-form">
        <h2>Create a New Post</h2>
        <form action="create_post.php" method="post">
            <textarea name="post_content" placeholder="Write your post here" rows="4" required></textarea>
            <button type="submit">Post</button>
        </form>
    </div>

    <script>
        function likePost(postId) {
            console.log('postId:', postId); // Debugging

            // Select the like button before the fetch call
            const likeButton = document.querySelector(`button[data-post-id="${postId}"][data-action="like"]`);
            console.log('likeButton:', likeButton); // Debugging


            // Send the AJAX request
            console.log('ajaxRequest');
            const ajax = new XMLHttpRequest();
            ajax.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    window.location.reload() // Debugging
                }
            };
            ajax.open('GET', 'like_post.php?action=like&post_id='+postId, true);
            ajax.send();
            
        }


        function dislikePost(postId) {
            console.log('postId:', postId); // Debugging

            // Select the like button before the fetch call
            const likeButton = document.querySelector(`button[data-post-id="${postId}"][data-action="like"]`);
            console.log('likeButton:', likeButton); // Debugging


            // Send the AJAX request
            console.log('ajaxRequest');
            const ajax = new XMLHttpRequest();
            ajax.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    window.location.reload() // Debugging
                }
            };
            ajax.open('GET', 'like_post.php?action=dislike&post_id='+postId, true);
            ajax.send();
            
        }
    </script>

    <a href="..\LearnLanguage\index.php" name="home">Home</a>
</body>

</html>