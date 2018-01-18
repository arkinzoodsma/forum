<?php
session_start();
foreach ($_POST as $key => $value) {
    ${$key} = $value;
    $_SESSION[$key] = $value;
}

include_once ("curl_request.php");

$data = array (
    'postBody' => $_POST['body'],
    'user' => $_POST['user'],
    'postTopic' => $_POST['topic']);


(new curl_request())->curlPost($data, "http://localhost/catch_post.php");

/*
class postPost
{
    private $url = "http://127.0.0.1/forum_extern/catch_post.php";

    public function createPost($body, $topic, $user){
        $data = [
            'post_body' => $body,
            'post_topic' => $topic,
            'post_user' => $user
        ];
        (new curl_request())->curlPost($data, $this->url);
        return $data;
    }
}*/