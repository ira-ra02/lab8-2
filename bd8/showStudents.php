<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>account</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>account</h1>


    <?php

    include_once('db.php');

    $sql = 'SELECT * FROM account ORDER BY id';


    /* Надсилаємо запит серверу */
    if($result = $mysqli->query($sql)) {   // $mysqli - наш об'єкт, через який здійснюємо підключення, query - метод, який дозволяє виконати довільний запит

        printf("головна форма: <br><br>");   // <br> в html - розрив рядка
        printf("<table><tr><th>id</th><th>name</th><th>password</th><th>pictures</t</tr>");   // <br> в html - розрив рядка
        /* Вибірка результатів запиту  */
        while( $row = $result->fetch_assoc() ){ // fetch_assoc() повертає рядок із запиту у вигляді асоціативного масиву, наприклад $row = ['id'=>'1', 'pib'=>'Олександр', 'grupa'=>'ІПЗ-31']
            printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['id'], $row['name'], $row['password'],$row['pictures']); //виводимо результат на сторінку
        };
        printf("</table>");
        /*Звільняємо пам'ять*/
        $result->close();
    };

    /*Закриваємо з'єднання*/
    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
        <li><a href="insertIntoStudentsForm.php">Вставити рядок</a><br></li>
        <li><a href="updateStudentsForm.php">Змінити рядок</a><br></li>
        <li><a href="deleteFromStudentsForm.php">Видалити рядок</a><br></li>
        <li><a href="showStudentsGroupsKurators.php">Звіт створення сторінки Manglib</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>
