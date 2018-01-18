<?php


class build_classes
{
    public function buildForum($name)
    {
        $json = (new curl_request())->curlPost(['name' => $name], "http://127.0.0.1/build_forum.php");
        $array = json_decode($json, true);
        $forum = new forum($array[0]['name'], $array[0]['description'], $array[0]['id']);
        return $forum;

    }


    public function buildCategorie($forum)
    {
        $json = (new curl_request())->curlPost(['catForum' => $forum], "http://127.0.0.1/build_categorie.php");
        $array = json_decode($json, true);
        $cats = array(count($array));
        for ($i = 0; $i < count($array); $i++) {
            $cat = new categorie($array[$i]['id'], $array[$i]['name'], $array[$i]['description'], $array[$i]['forum'], $array[$i]['topics']);
            $cats[$i] = $cat;
        }
        return $cats;


    }

    public function buildTopic($categorie)
    {
        $json = (new curl_request())->curlPost(['topicCategorie' => $categorie], "http://127.0.0.1/build_topics.php");
        $array = json_decode($json, true);
        $topics = array(count($array));
        for ($i = 0; $i < count($array); $i++) {
            $topic = new topic($array[$i]['name'], $array[$i]['description'], $array[$i]['categorie'], $array[$i]['user'], $array[$i]['id']);
            $topics[$i] = $topic;
        }

        return $topics;
    }

    public function buildPost($topic)
    {
        $json = (new curl_request())->curlPost(['topic' => $topic], "http://127.0.0.1/build_post.php");

        $prepost = json_decode($json, true);
        $posts = array(count($prepost));
        for ($i = 0; $i < sizeof($prepost); $i++) {
            $post = new post($prepost[$i]['body'], $prepost[$i]['user'], $prepost[$i]['date'], $prepost[$i]['topic'], $prepost[$i]['id']);
            $posts[$i] = $post;
        }
        return $posts;
    }

}