<?php


class forum{


    private $id;
    private $name;
    private $description;


    public function __toString()
    {
        $output= "<div class='forum'><a href=http://localhost/forum_extern/forum-view.php?id=$this->id><h2>Forum: $this->name</h2> <h3>Description: $this->description</h3></a></div>";
        return $output;
    }

    /**
     * forum constructor.s
     * @param $name
     * @param $description
     * @param $categories
     */
    public function __construct($name, $description, $id)
    {
        $this->name = $name;
        $this->description = $description;
        $this->id = $id;

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






}

