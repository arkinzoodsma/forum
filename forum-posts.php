<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>love</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="form_catch.js"></script>
</head>
<?php

include("database.php");
include("curl_request.php");
include_once ("post.php");
include_once("build_classes.php");



if(isset($_SESSION['topic'])) {
    $topics = (new build_classes())->buildPost($_SESSION['topic']);

    for ($i = 0; $i < count($topics); $i++) {
        echo $topics[$i];
    }
}

?>


<h4>Hiermee maak je een post</h4>
<form method='post' action=postPost.php id='forum_input' class='form'>
    <input style='height:40px' type='text' name='body' placeholder="body" size=40><br>
    <input style='height:40px' type='text' name='user' placeholder="user-1" size=40><br>
    <input style='height:40px' type='text' name='topic' placeholder="topic-3" size=40><br>
    <input type='submit' value='submit'>
</form>
</body>
</html>