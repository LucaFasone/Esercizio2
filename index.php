<?php
session_start();
if(isset($_GET["logout"])){
    session_destroy();
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $_SESSION[$_POST["cf"]] = array();

    foreach($_POST as $key => $value){
        $_SESSION[$_POST["cf"]][$key] = $value;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="insert.php">Inserisci</a>
    <br>
    <a href="seeAll.php">Vedi tutti</a>
    <br>
     <form action="seeAll.php" method="post">
        <label for="">Serch for CF</label>
        <input type="text" name="cf">
        <button type="submit">Submit</button>
    </form>
    <form action="seeAll.php" method="post">
        <select name="SortingOrder">
            <option value="ASC">ASC</option>
            <option value="DESC">DESC</option>
        </select>
        <select name="value">
            <option value="nome">name</option>
            <option value="eta">eta</option>
            <option value="cf">cf</option>
        </select>
        <button type="submit">Submit</button>

    </form>
    <br>
    <form action="seeAll.php" method="post">
        <label for="">Serch for Name</label>
        <input type="text" name="name">
        <button type="submit">Submit</button>
    </form>
    <a href="index.php?logout=true">Logout</a>
    <br>
</body>
</html>