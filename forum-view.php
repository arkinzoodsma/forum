<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>love</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="form_catch.js"> </script>
</head>
<body>
<?php

include("database.php");
include("curl_request.php");
include_once ("forum.php");
include_once ("categorie.php");
include_once("build_classes.php");



if(isset($_SESSION['forumName'])){

$fora = (new build_classes())->buildForum($_SESSION['forumName']);

echo $fora;}

echo "<br>";

echo "<h4>Hiermee maak je een database</h4>";
echo "<form method='post' action=postForum.php id='forum_input' class='form'>";
echo "<input style='height:40px'  type='text' name='forumName' placeholder='name' size=40><br>";
echo "<input style='height:40px' type='text' name='forumDescription' placeholder='description' size=40><br>";
echo "<input type='submit' value='submit'>";
echo "</form>";



if(isset($_SESSION['catForum'])) {

    $categories = (new build_classes())->buildCategorie($_SESSION['catForum']);

    for ($i = 0; $i < count($categories); $i++) {
        echo $categories[$i];
    }

}

?>


<br>
<h4>Hiermee maak je een categorie</h4>
<form method='post' action=postCategorie.php id='forum_input' class='form'>
    <input style='height:40px' type='text' name='catName' placeholder="name" size=40><br>
    <input style='height:40px' type='text' name='catDescription' placeholder="description" size=40><br>
    <input style='height:40px' type='text' name='catForum' placeholder="forum" size=40><br>
    <input type='submit' value='submit'>
</form>
</body>
</html>
