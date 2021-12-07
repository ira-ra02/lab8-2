<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>comment</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>comment</h1>


    <?php

    include_once('db.php');

    $sql = "SELECT * FROM comment";


    if($result = $mysqli->query($sql))
    {   
        printf("коментарі: <br><br>");   
        printf("<table><tr><th>id_comment</th><th>number</th><th>likes</th></tr>");
        while( $row = $result->fetch_assoc() )
        {
            printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>", $row['id'], $row['number'], $row['likes']);
        };
        printf("</table>");
        $result->close();
    };

    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
        <li><a href="showGroupsStudCount.php">Звіт залишених коментарів</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
        
        <li><a href="insertComentForm.php">Вставити рядок</a><br></li>
        <li><a href="updateComentForm.php">Змінити рядок</a><br></li>
        <li><a href="deleteFromCommentForm.php">Видалити рядок</a><br></li>
      
    </ul>
    
</body>
</html>
