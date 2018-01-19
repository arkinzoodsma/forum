<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>love</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="form_catch.js"></script>
    <style>
        .posts {
            display: inline-block;
            -webkit-box-sizing: content-box;
            -moz-box-sizing: content-box;
            box-sizing: content-box;
            position: relative;
            margin: 10px;
            padding: 15px 20px;
            border: 3px solid rgba(0,0,0,0.89);
            -webkit-border-radius: 3px;
            border-radius: 3px;
            font: normal 25px/20px "Times New Roman", Times, serif;
            color: rgba(0,142,198,1);
            -o-text-overflow: clip;
            text-overflow: clip;
            background: rgba(207,226,247,1);
            text-shadow: 1px 1px 0 rgba(255,255,255,0.66) ;
            -webkit-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
            -moz-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
            -o-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
            transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
        }
    </style>
</head>
<?php

include("database.php");
include("curl_request.php");
include_once ("post.php");
include_once("build_classes.php");



if(isset($_SESSION['topic'])) {
    $topics = (new build_classes())->buildPost($_GET['topic']);

    for ($i = 0; $i < count($topics); $i++) {
        echo $topics[$i];
    }
}

?>


<h4>Hiermee maak je een post</h4>
<form method='post' action=postPost.php id='forum_input' class='form'>
    <input style='height:40px' type='text' name='body' placeholder="body" size=40><br>
    <input style='height:40px' type='hidden' name='user' value="1"><br>
    <input style='height:40px' type='hidden' name='topic' value=<?php if(isset($_GET['topic'])){ echo $_GET['topic'];} ?><br>
    <input type='submit' value='submit'>
</form>
</body>
</html>