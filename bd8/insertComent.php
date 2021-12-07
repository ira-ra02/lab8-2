<?php

include_once('db.php');


 $number = $_POST['number']; $likes = $_POST['likes'];

$sql = "INSERT INTO comment (number,likes) VALUES ( '$number','$likes' )";


if($mysqli->query($sql)){
    echo "Рядок вставлено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }


include_once("showComents.php");

?>
