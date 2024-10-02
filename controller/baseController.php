<?php
    //const title = "le Joker";
    $_ver = phpversion();
    $lang = ["fr","en","it",];
    $styleCss = "public/css/style.css";
    $date = date(' y - m - d');
    $years = new DateTime();

    class User
    {
        public $title = "Le Joker";
        //static $info = "Informations sur le film Le Joker";
    }
    const info = "Informations sur le film Le Joker";

    $newtitle = new User();
?>