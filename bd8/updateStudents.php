<?php

include_once('db.php');



$id = $_POST['id'];
$name = $_POST['name'];
$password = $_POST['pass'];
$pictures = $_POST['pic'];

$sql = "UPDATE account SET name='$name', password='$password',pictures='$pictures' WHERE id='$id'";


if($mysqli->query($sql)){
    echo "Рядок змінено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }




include_once("showStudents.php");
?>
