<?php
session_start();
foreach ($_POST as $key => $value) {
    ${$key} = $value;
    $_SESSION[$key] = $value;
}
include_once ("curl_request.php");

$data = array (
    'forumName'=>$_POST['forumName'],
    'forumDescription'=>$_POST['forumDescription']);


(new curl_request())->curlPost($data, "http://172.16.3.11/catch_forum.php");
?>