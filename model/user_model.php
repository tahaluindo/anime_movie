<?php
    
    class user
    {
        public $user_password;
        public $user_email;
        public function __construct($useremail,$password)
        {
            $this->user_email = $useremail;
            $this->user_password = $password;
        }
        public function setpassword($value){
            $this->user_password = $value;
        }
        public function setEmail($value){
            $this->user_email = $value;
        }
        public function getpassword(){
            return $this->user_password;
        }
        public function getEmail(){
            return $this->user_email;
        }
        public function getInsert(){
            $conn  = new mySql(null,null,null,null);
            $conned = $conn ->getConnect();
            try {
                $sql = "INSERT INTO users (email,password) VALUES (?,?)";
                $stmt= $conned->prepare($sql);
                $stmt->execute([$this->user_email,$this->user_password]);
                echo 'insert successfully !!';
            } catch (Throwable $th) {
                echo 'select fail !!';
            }
        }
        public function getUser(){
            $conn  = new mySql(null,null,null,null);
            $conned = $conn ->getConnect();
            try {
                $stmt = $conned->prepare("SELECT * FROM users WHERE email=?");
                $stmt->execute([$this->user_email]); 
                $user = $stmt->fetch();
                return $user;
                echo 'get user successfully !!';
            } catch (Throwable $th) {
                echo ' fail !!';
            }

            $conn->disConnect($conned);
        }
        public function getAlluser(){
            $conn  = new mySql(null,null,null,null);
            $conned = $conn ->getConnect();
            try {
                $stmt = $conned->query("SELECT * FROM users");
                $user = $stmt->fetchAll();
                return $user;
                echo 'get user successfully !!';
            } catch (Throwable $th) {
                echo ' fail !!';
            }
            $conn->disConnect($conned);
        }
        public function getDeleteUser(){
            $conn  = new mySql(null,null,null,null);
            $conned = $conn ->getConnect();
            try {
                $sql = "DELETE FROM users WHERE email=?";
                $stmt= $conned->prepare($sql);
                $stmt->execute([$this->user_email]);
            } catch (Throwable $th) {
                echo $th;
            }

        }
    }
?>