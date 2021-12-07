<?php

include_once('db.php');


$name = $_POST['id_chat']; $password = $_POST['text']; 

$sql = "INSERT INTO chat (id,text) VALUES ('$name', '$password' )";


if($mysqli->query($sql)){
    echo "Рядок вставлено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }


include_once("showChat.php");

?>
