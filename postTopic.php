<?php
session_start();
foreach ($_POST as $key => $value) {
    ${$key} = $value;
    $_SESSION[$key] = $value;
}

include_once ("curl_request.php");

$data = array (
    'topicName' => $_POST['topicName'],
    'topicDescription' => $_POST['topicDescription'],
    'topicCategorie' => $_POST['topicCategorie'],
    'user' => $_POST['user']);


(new curl_request())->curlPost($data, "http://172.16.3.11/catch_topics.php");


/*
class postTopic
{
private $url = "http://127.0.0.1/forum_extern/catch_topics.php";

public function createTopic($name, $categorie, $user){
    $data = [
        'name' => $_POST['name'],
        'description' => $_POST['description'],
        'categorie' => $_POST['categorie'],
        'user' => $_POST['user']
    ];
    (new curl_request())->curlPost($data, $this->url);
    return $data;
}
}*/

?>


