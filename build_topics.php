<?php
include("topics.php");
include("database.php");
session_start();


$cat = (new database)->getTopics($_POST['topicCategorie']);


echo json_encode($cat);

