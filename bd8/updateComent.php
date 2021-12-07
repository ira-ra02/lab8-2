<?php

include_once('db.php');



$id = $_POST['id'];
$number = $_POST['numb'];
$likes = $_POST['like'];


$sql = "UPDATE comment SET  number='$number',likes='$likes' WHERE id='$id'";


if($mysqli->query($sql)){
    echo "Рядок змінено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }




include_once("showComents.php");
?>
