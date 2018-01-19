<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>love</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="form_catch.js"> </script>
    <style>
        .forum {
            display: inline-block;
            -webkit-box-sizing: content-box;
            box-sizing: content-box;
            width: 8em;
            position: relative;
            margin: 15px 20px;
            padding: 40px 30px;
            border: 2px solid;
            -webkit-border-radius: 20px;
            border-radius: 20px;
            font: italic normal normal 12px/40px "Times New Roman", Times, serif;
            color: rgba(15,14,14,0.9);
            text-align: center;
            -o-text-overflow: clip;
            text-overflow: clip;
            background: rgba(214,252,255,1);
            -webkit-box-shadow: 5px 5px 20px 1px rgba(0,0,0,0.3) ;
            box-shadow: 5px 5px 20px 1px rgba(0,0,0,0.3) ;
            text-shadow: 0 0 0 rgba(0,0,0,0.2) ;
            -webkit-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1) 10ms;
            -o-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1) 10ms;
            transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1) 10ms;
        }
    </style>
</head>
<body>
<?php

include("database.php");
include("curl_request.php");
include_once ("forum.php");
include_once ("categorie.php");
include_once("build_classes.php");


$fora = (new build_classes())->buildForum();
    for($i = 0; $i < count($fora); $i++){
        echo $fora[$i];
    }


echo "<br>";

echo "<h4>maak hier een forum aan je een database</h4>";
echo "<form method='post' action=postForum.php id='forum_input' class='form'>";
echo "<input style='height:40px'  type='text' name='forumName' placeholder='name' size=40><br>";
echo "<input style='height:40px' type='text' name='forumDescription' placeholder='description' size=40><br>";
echo "<input type='submit' value='submit'>";
echo "</form>";





?>
