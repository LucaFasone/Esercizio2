<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    foreach($_SESSION as $key => $value){
        echo $key . " ->  ";
        foreach($value as $key2 => $value2){
            echo $key2 . ': ' . $value2."<br>";
        }
    }
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["cf"])){
        if(isset($_SESSION[$_POST["cf"]])){
            foreach($_SESSION[$_POST["cf"]] as $key => $value){
                echo $key.": ".$value."<br>";
            }
        }
    }
    if(isset($_POST["name"])){
        foreach($_SESSION as $key => $value){
            if($_SESSION[$key]["nome"] == $_POST["name"]){
                foreach($value as $key2 => $value2){
                    echo $key2.": ".$value2."<br>";
                }
            }
            echo "-------- <br>";
        }
    }
}
?>