<?php

include_once('db.php');


 $manga = $_POST['manga'];$manhva = $_POST['manhva'];$comics = $_POST['comics'];$number = $_POST['number']; 

$sql = "INSERT INTO library (number,manga,manhva,comics) VALUES ('$number', '$manga', '$manhva', '$comics' )";


if($mysqli->query($sql)){
    echo "Рядок вставлено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }


include_once("showLibrary.php");

?>
