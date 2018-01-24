<?php


/**
 * Class categorie
 */
class categorie
{
    private $forum;
    private $id;
    private $name;
    private $description;
    private $topics;

        public function __toString()
        {
           $output = "<div class='categories'><a href=http://172.16.3.11/forum-topics.php?topicCategorie=$this->id><h3>Categorie name:</h3> $this->name <br> <h3> Categorie description:</h3> $this->description <h3></a></div> ";

            return $output;
        }

    /**
     * categorie constructor.
     * @param $forum
     * @param $name
     * @param $description
     * @param $id
     */
    public function __construct($id, $name ,$description, $forum)
    {
        $this->forum = $forum;
        $this->name = $name;
        $this->description = $description;
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTopics()
    {
        return $this->topics;
    }

    /**
     * @param mixed $topics
     */
    public function setTopics($topics): void
    {
        $this->topics = $topics;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }



    /**
     * @return mixed
     */
    public function getForum()
    {
        return $this->forum;
    }

    /**
     * @param mixed $forum
     */
    public function setForum($forum): void
    {
        $this->forum = $forum;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {

        $this->name = $name;
    }


}