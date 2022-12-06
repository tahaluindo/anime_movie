<?php
    class anime{
        public $id;
        public $title;
        public $image;
        public $video;
        public $ranking;
        public $description;
        public $genres;
        function __construct($id,$title,$image,$video,$ranking,$description,$genres)
        {
            $this->id = $id;
            $this->title = $title;
            $this->image = $image;
            $this->video = $video;
            $this->ranking = $ranking;
            $this->description = $description;
            $this->genres = $genres;
        }
        public function getInsert(){
            $conn  = new mySql(null,null,null,null);
            $conned = $conn ->getConnect();
            try {
                $sql = "INSERT INTO animes (id,title,image,video,ranking,description,genres) VALUES (?,?,?,?,?,?,?)";
                $stmt= $conned->prepare($sql);
                $stmt->execute([$this->id,$this->title,$this->image,$this->video,$this->ranking,$this->description,$this->genres]);
                echo 'insert successfully !!';
            } catch (Throwable $th) {
                echo $th;
            }
            $conn->disConnect($conned);
        }
        public function getAnime(){
            $conn  = new mySql(null,null,null,null);
            $conned = $conn ->getConnect();
            try {
                $stmt = $conned->prepare("SELECT * FROM animes WHERE id=?");
                $stmt->execute([$this->id]); 
                $anime = $stmt->fetch();
                return $anime;
                echo 'get anime successfully !!';
            } catch (Throwable $th) {
                echo ' fail !!';
            }

            $conn->disConnect($conned);
        }
        public function getAllAnime(){
            $conn  = new mySql(null,null,null,null);
            $conned = $conn ->getConnect();
            try {
                $stmt = $conned->query("SELECT * FROM animes");
                $user = $stmt->fetchAll();
                return $user;
                echo 'get user successfully !!';
            } catch (Throwable $th) {
                echo ' fail !!';
            }
            $conn->disConnect($conned);
        }
    }
?>