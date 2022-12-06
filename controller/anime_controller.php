<?php
    include '/wamp/www/anime_movie/model/anime_modal.php';
    include '/wamp/www/anime_movie/utils/mySql.php';
    $anime = new anime('','','','','','','');
    $animes = $anime->getAllAnime();
    if(isset($_GET['animeid'])){
        $anime->id=$_GET['animeid'];
        $anime_details = $anime->getAnime();
    }
?>