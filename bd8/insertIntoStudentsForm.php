<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Вставка даних</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        include_once("showStudents.php")    
    ?>

    <form action="insertIntoStudents.php" method="post">
        
        <label>name</label><input name="name" type="text"><br>
        <label>password</label><input name="pass" type="text"><br>
        <label>picture</label><input name="pic" type="text"><br>
        <input type="submit" value="Вставити рядок">
    </form>

</body>
</html>
