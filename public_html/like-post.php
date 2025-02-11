<?php
// like-post.php

// Get the post_id from the request
$postId = $_POST['post_id'];

// Read the current like data from the JSON file
$filePath = 'likes.json';
$likesData = json_decode(file_get_contents($filePath), true);

// Check if the post exists, if so, increment the like count
if (isset($likesData[$postId])) {
    $likesData[$postId]++;
} else {
    // If the post doesn't exist in the JSON, initialize it with 1 like
    $likesData[$postId] = 1;
}

// Save the updated like data back to the JSON file
file_put_contents($filePath, data: json_encode($likesData));

// Return the updated like count to the front-end
echo $likesData[$postId];
?>
