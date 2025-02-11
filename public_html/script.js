// script.js
function likePost(postId) {
    const likesCountElement = document.getElementById(`likes-count-${postId}`);

    // Make an AJAX request to the server to like the post
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "like-post.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onload = function() {
        if (xhr.status === 200) {
            // Update the likes count on success
            likesCountElement.innerText = xhr.responseText;
        } else {
            console.log("Error: " + xhr.status);
        }
    };
    xhr.send("post_id=" + postId); // Send the post_id to the server
}
