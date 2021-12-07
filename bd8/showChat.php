<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>chat</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>chat</h1>


    <?php

    include_once('db.php');

    $sql = "SELECT * FROM chat";


    if($result = $mysqli->query($sql))
    {   
        printf("коментарі: <br><br>");   
        printf("<table><tr><th>id_chat</th><th>text</th></tr>");
        while( $row = $result->fetch_assoc() )
        {
            printf("<tr><td>%s</td><td>%s</td></tr>", $row['id'], $row['text']);
        };
        printf("</table>");
        $result->close();
    };

    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
        <li><a href="showGroupsStudCount.php">Звіт перебування у діючих чатах</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
        
        <li><a href="insertIntoChatForm.php">Вставити рядок</a><br></li>
        <li><a href="updateChatForm.php">Змінити рядок</a><br></li>
        <li><a href="deleteFromChatForm.php">Видалити рядок</a><br></li>
      
    </ul>
    
</body>
</html>
