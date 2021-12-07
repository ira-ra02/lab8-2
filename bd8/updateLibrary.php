<?php

include_once('db.php');



$id = $_POST['id'];
$manga = $_POST['manga'];
$manhva = $_POST['manhva'];
$comics = $_POST['comics'];



$sql = "UPDATE library SET manga='$manga',manhva='$manhva',comics='$comics' WHERE id='$id'";


if($mysqli->query($sql)){
    echo "Рядок змінено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }




include_once("showLibrary.php");
?>
