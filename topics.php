<?php

class topic
{


    private $name;
    private $description;
    private $categorie;
    private $user;
    private $id;

    public function __toString()
    {
        $output = "<a href=http://localhost/forum_extern/forum-posts.php><h4>Topic name: </h4>$this->name <br>  <h4>Topic description:</h4> $this->description<br><h4>Topic id</h4> $this->id</a>";
        return $output;
    }


    public function __construct($name, $description, $categorie, $user, $id)
    {
        $this->name = $name;
        $this->description = $description;
        $this->categorie = $categorie;
        $this->user = $user;
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }



    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date): void
    {
        $this->date = $date;
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

    /**
     * @return mixed
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * @param mixed $categorie
     */
    public function setCategorie($categorie): void
    {
        $this->categorie = $categorie;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user): void
    {
        $this->user = $user;
    }

}



