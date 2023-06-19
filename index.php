<?php
    if(isset($_GET['page'])){
        /*if($_GET['page'] == "registro" || ($_GET['page'] == "registro" && isset($_GET['state']))){
            include("views/registrar.php");
        } else if($_GET['page'] == "password" && !isset($_GET['state'])){
            header('Location: password/change');
        } else if($_GET['page'] == "password" || ($_GET['page'] == "password" && isset($_GET['state']))){
            include("views/password.php");
        } else */
        if($_GET['page'] == "home"){
            include("pages/home.php");
        } else if($_GET['page'] == "login" /* || ($_GET['page'] == "login" && isset($_GET['state']))*/){
            include("pages/login.php");
        } /*else if($_GET['page'] == "gmpanel"){
            include("views/settings.php");
        } else if($_GET['page'] == "eventos"){
            include("views/evento.php");
        } else if($_GET['page'] == "forbidden"){
            include("views/forbidden.php");
        } else if($_GET['page'] == "profile"){
            include("views/profile.php");
        } else if($_GET['page'] == "canje"){
            include("views/canje.php");
        } else if($_GET['page'] == "mercado"){
            include("views/store.php");
        }*/
    } else{
        header('Location: login');
    }
?>