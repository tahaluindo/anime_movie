<?php
    class mySql{
        private $hostname;
        private $username;
        private$password;
        private $dbname;
        public function __construct($hostname,$username,$password,$dbname)
        {
            if(isset($hostname)){
                $this->hostname = $hostname;
            }
            else{
                $this->hostname = 'localhost';
            }
            if(isset($username)){
                $this->username = $username;
            }
            else{
                $this->username = 'root';
            }    
            if(isset($password)){
                $this->password = $password;
            }
            else{
                $this->password = '';
            }    
            if(isset($dbname)){
                $this->dbname = $dbname;
            }
            else{
                $this->dbname = 'anime_movie';
            }        
        
        }
        public function gethostname(){
            return $this->hostname;
        }
        public function sethostname($hostname){
            $this->hostname = $hostname;
        }
        public function getusername(){
            return $this->username;
        }
        public function setusername($username){
            $this->username = $username;
        }
        public function getpassword(){
            return $this->password;
        }
        public function setpassword($password){
            $this->password = $password;
        }
        public function getdbname(){
            return $this->dbname;
        }
        public function setdbname($dbname){
            $this->dbname = $dbname;
        }

        public function getConnect(){
            try {
                $conn = new PDO("mysql:host=$this->hostname;dbname=$this->dbname", $this->username, $this->password);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $conn;
              } catch(PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
              }
            return $conn;
        }
        
        public function disConnect($connect){
            return $connect->close();
        }
    }

?>