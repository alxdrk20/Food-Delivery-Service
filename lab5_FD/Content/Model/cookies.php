<?php

function addToBasket(){
    if (isset($_GET["id"])){
        if (isset($_COOKIE['id'])) {
            setcookie("id", $_COOKIE['id'].",".$_GET["id"], time() + (86400 * 2));
        }else{
            setcookie("id", $_GET["id"]);
        }
    }
}
