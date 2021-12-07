<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title> Mangalib</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Mangalib</h1>


    <?php

    include_once('db.php');

    // $sql = 'SELECT s.pib, g.group_name,k.pib_kuratora FROM students AS s LEFT JOIN groups AS g ON s.grupa_id = g.id INNER JOIN kurators AS k ON g.kurator_id = k.id ORDER BY s.pib';
    $sql = 'SELECT name,password,pictures,manga,manhva,comics,text,likes FROM account AS s LEFT JOIN library AS g on s.id = g.number LEFT JOIN comment AS c ON c.number = g.number LEFT JOIN chat  ON c.number = chat.id;';
     printf("<h3>Сторінка Manglib: </h3><br>");   
        
         
    if($result = $mysqli->query($sql)) {

        printf("<h3>Manglib.Manhva: </h3><br>");   
        printf("<table><tr><th>Ім'я</th><th>Пароль</th><th>Кількість лайків</th><th>Манга</th><th>Комікс</th><th>Манхва</th><th>Кількість коментарів</th><th>Прочитано</th></tr>");   
        while( $row = $result->fetch_assoc() ){ 
           printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['name'], $row['password'], $row['pictures'], $row['manga'], $row['manhva'], $row['comics'], $row['text'], $row['likes']);
        };
        printf("</table>");
        
        $result->close();
    }

    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
        <li><a href="showStudents.php">Таблиця Mangalib</a><br></li>
        <li><a href="showGroups.php">Таблиця Comments </a><br></li>
        <li><a href="showKurators.php">Таблиця Chat</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>
