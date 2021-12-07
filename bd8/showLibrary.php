<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>chat</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>library</h1>


    <?php

    include_once('db.php');

    $sql = "SELECT * FROM library";


    if($result = $mysqli->query($sql))
    {   
        printf("для читання: <br><br>");   
        printf("<table><tr><th>id</th><th>manga</th><th>manhva</th><th>comics</th><th>number</th></tr>");
        while( $row = $result->fetch_assoc() )
        {
            printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['id'], $row['manga'],$row['manhva'],$row['comics'],$row['number']);
        };
        printf("</table>");
        $result->close();
    };

    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
        <li><a href="showGroupsStudCount.php">Звіт прочитаного</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
        
        <li><a href="insertLibraryIntoForm.php">Вставити рядок</a><br></li>
        <li><a href="updateLibraryForm.php">Змінити рядок</a><br></li>
        <li><a href="deleteFromLibraryForm.php">Видалити рядок</a><br></li>
      
    </ul>
    
</body>
</html>
