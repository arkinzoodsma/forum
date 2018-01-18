<?php
session_start();
foreach ($_POST as $key => $value) {
    ${$key} = $value;
    $_SESSION[$key] = $value;
}
include_once ("curl_request.php");


$data = array (
    'catName'=>$_POST['catName'],
    'catDescription'=>$_POST['catDescription'],
    'catForum' => $_POST['catForum']);


(new curl_request())->curlPost($data, "http://localhost/catch_categorie.php");

/*
class postCategorie
{
    private $url = 'http://127.0.0.1/forum_extern/catch_categorie.php';

    public function createCategorie($name, $forum) {
        $data = [
            'categoryName' => $name,
            'categoryForum' => $forum
        ];
        (new curl_request())->curlPost($data, $this->url);
        return $data;
    }

}*/
?>





