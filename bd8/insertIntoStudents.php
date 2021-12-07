<?php

include_once('db.php');


$name = $_POST['name']; $password = $_POST['pass']; $pic = $_POST['pic'];

$sql = "INSERT INTO account (name,password,pictures) VALUES ('$name', '$password','$pic' )";


if($mysqli->query($sql)){
    echo "Рядок вставлено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }


include_once("showStudents.php");

?>
