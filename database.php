

<?php

class database{

  private $server = 'localhost';
  private $username = 'forum';
  private $password = '1o0H0Zv12nnerymLHbnU';
  private $database = 'performance_forum';

 public function db_connect(){
   try{
      $pdo = new PDO('mysql:host=localhost;dbname=performance_forum', $this->username, $this->password);
      // error mode to exception
      $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      return $pdo;
    } catch(PDOException $e){
      echo "error connecting to database". $e->getMessage();
    }

 }

 /*


    public function update_categories_forum($categorie, $id){
        $pdo = (new database)->db_connect();
        $query = "UPDATE `forums` SET `categories`= CONCAT_WS((' ', categories, ?)) WHERE id=?";
        $stmnt = $pdo->prepare($query);
        $stmnt->execute([$categorie, $id]);



    }*/
    public function add_forum(){
        $pdo = (new database)->db_connect();
        $query = "INSERT INTO `forums`(`name`, `description`) VALUES 
            (:name, :description)";
        $stmnt = $pdo->prepare($query);
        $stmnt->bindParam(':name', $_POST['forumName'], PDO::PARAM_STR);
        $stmnt->bindParam(':description', $_POST['forumDescription'], PDO::PARAM_STR);
        $stmnt->execute();

    }


    public function add_category(){

        $pdo = (new database)->db_connect();
        $query = "INSERT INTO `categorie`(`name`, `description`, `forum`) VALUES 
        (:name, :description, :forum)";
        $stmnt = $pdo->prepare($query);
        $stmnt->bindParam(':name', $_POST['catName'], PDO::PARAM_STR);
        $stmnt->bindParam(':description', $_POST['catDescription'], PDO::PARAM_STR);
        $stmnt->bindParam(':forum', $_POST['catForum'], PDO::PARAM_INT);
        $stmnt->execute();
    }

    public function add_topic(){
        $pdo = (new database)->db_connect();
        $query = "INSERT INTO `topics`(`name`, `description`, `categorie`, `user`) VALUES 
            (:name, :description, :categorie, :user)";
        $stmnt = $pdo->prepare($query);
        $stmnt->bindParam(':name', $_POST['topicName'], PDO::PARAM_STR);
        $stmnt->bindParam(':description', $_POST['topicDescription'], PDO::PARAM_STR);
        $stmnt->bindParam(':categorie', $_POST['topicCategorie'], PDO::PARAM_INT);
        $stmnt->bindParam(':user', $_POST['user'], PDO::PARAM_INT);
        $stmnt->execute();
    }

  public function add_post(){
    $pdo = (new database)->db_connect();
    $query = "INSERT INTO `post`(`body`, `user`, `date`, `topic`) VALUES 
        (:body, :user, :date, :topic)";
    $stmnt = $pdo->prepare($query);
    $stmnt->bindParam(':body', $_POST['postBody'], PDO::PARAM_STR);
    $stmnt->bindParam(':user', $_POST['user'], PDO::PARAM_INT);
    $stmnt->bindValue(':date', date('Y-m-d H:i:s'), PDO::PARAM_STR);
    $stmnt->bindParam(':topic', $_POST['postTopic'], PDO::PARAM_INT);
    $stmnt->execute();
  }


  public function add_user(){
    $pdo = (new database)->db_connect();
    $query = "INSERT INTO `users`(`user_name`, `user_pass`, `user_email`, `user_date`, `user_level`)
    VALUES (:user_name,:user_pass,:user_email,:user_date,:user_level)";
    $stmnt = $pdo->prepare($query);
    $stmnt->bindParam(':user_name', $_POST['user_name'], PDO::PARAM_STR);
    $stmnt->bindParam(':user_pass', sha1($_POST['user_pass']), PDO::PARAM_STR);
    $stmnt->bindParam(':user_email', $_POST['user_email'], PDO::PARAM_STR);
    $stmnt->bindParam(':user_name', $_SERVER['REQUEST_TIME '], PDO::PARAM_STR);
    $stmnt->bindParam(':user_level', 2, PDO::PARAM_INT);
    $stmnt->execute();
    }


    public function getCategory($forum){
        $pdo = (new database)->db_connect();
        $stmt = $pdo->prepare("SELECT * FROM `categorie` where forum=?");
        $stmt->execute([$forum]);
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }


    public function getCategoryForum($forum){
        $pdo = (new database)->db_connect();
        $stmt = $pdo->prepare("SELECT * FROM `categorie` where name=?");
        $stmt->execute([$forum]);
        $row = $stmt->fetchALL(PDO::FETCH_ASSOC);
        return $row;
    }

    public function getPosts($topic){
        $pdo = (new database)->db_connect();
        $stmt = $pdo->prepare("SELECT * FROM `post` where topic =? ");
        $stmt->execute([$topic]);
        $row = $stmt->fetchALL(PDO::FETCH_ASSOC);
        return $row;

    }

    public function getTopics($categorie){
        $pdo = (new database)->db_connect();
        $stmt = $pdo->prepare("SELECT * FROM `topics` where categorie=?");
        $stmt->execute([$categorie]);
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }

    public function getForum($name){
        $pdo = (new database)->db_connect();
        $stmt = $pdo->prepare("SELECT * FROM `forums` where name=?");
        $stmt->execute([$name]);
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }




}
