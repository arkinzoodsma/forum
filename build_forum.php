<?php
session_start();

include("forum.php");
include("database.php");


$cat = (new database)->getForum($_POST['name']);
//$cat = (new database)->getForum('test');



echo json_encode($cat);

