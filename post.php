<?php
    class post{


        private $body;
        private $user;
        private $date;
        private $topic;

        public function __toString()
        {
           $output = "<div class='post'>User:  $this->body <br></div>";
           return $output;
        }


        public function __construct($body = null, $user = null, $topic = null, $date = null){
            $this->user = $user;
            $this->body = $body;
            $this->date = $date;
            $this->topic = $topic;

        }

        public function __set($property, $value ){
            if(property_exists($this, $property)){
                $this->$property = $value;
            }
        }

        /**
         * @return mixed
         */
        public function getBody()
        {
            return $this->body;
        }

        /**
         * @param mixed $body
         */
        public function setBody($body): void
        {
            $this->body = $body;
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
        public function getTopic()
        {
            return $this->topic;
        }

        /**
         * @param mixed $topic
         */
        public function setTopic($topic): void
        {
            $this->topic = $topic;
        }







    }


