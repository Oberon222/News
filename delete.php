<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $conn = new PDO("mysql:host=localhost;dbname=localhostpu911", "root","");
    $sql = "DELETE FROM 'news' WHERE 'news'.'id'=?";
    $conn->prepare($sql)->execute([$_POST['id']]);
}
?>
