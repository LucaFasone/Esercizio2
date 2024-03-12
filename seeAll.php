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
    $keys = array_keys($_SESSION);
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
    if($_POST["SortingOrder"] !== NULL && $_POST["value"] != "cf"){
        for($i = 0; $i < count($keys); $i++){
            for($j = $i + 1; $j < count($keys); $j++){
                if($_POST["SortingOrder"] == "ASC" && $_SESSION[$keys[$i]][$_POST["value"]] > $_SESSION[$keys[$j]][$_POST["value"]] || $_POST["SortingOrder"] == "DESC" && $_SESSION[$keys[$i]][$_POST["value"]] < $_SESSION[$keys[$j]][$_POST["value"]]){
                    $temp = $_SESSION[$keys[$i]];
                    $_SESSION[$keys[$i]] = $_SESSION[$keys[$j]];
                    $_SESSION[$keys[$j]] = $temp;
                }
            }
        }
        foreach($_SESSION as $key => $value){
            echo $key . " ->  ";
            foreach($value as $key2 => $value2){
                echo $key2 . ': ' . $value2."<br>";
            }
        }
    }
    if($_POST["value"] == "cf"){
        for ($i = 0; $i < count($keys) - 1; $i++) {
            for ($j = $i + 1; $j < count($keys); $j++) {
                if (($_POST["SortingOrder"] == "ASC" && $_SESSION[$keys[$i]] > $_SESSION[$keys[$j]]) || ($_POST["SortingOrder"] == "DESC" && $_SESSION[$keys[$i]] < $_SESSION[$keys[$j]])) {
                    $temp = $_SESSION[$keys[$i]];
                    $_SESSION[$keys[$i]] = $_SESSION[$keys[$j]];
                    $_SESSION[$keys[$j]] = $temp;
                }
            }
        }
        foreach($_SESSION as $key => $value){
            echo $key . " ->  ";
            foreach($value as $key2 => $value2){
                echo $key2 . ': ' . $value2."<br>";
            }
        }

    }
}
?>