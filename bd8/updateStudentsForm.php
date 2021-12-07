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
        include_once("showStudents.php");    
    ?>

<form action="updateStudents.php" method="post">
        <label>ІД рядка який змінюємо</label><input name="id" type="text"><br>
        <label>Нове значення name</label><input name="name" type="text"><br>
        <label>Нове значення password</label><input name="pass" type="text"><br>
        <label>Нове значення pictures</label><input name="pic" type="text"><br>
        <input type="submit" value="Змінюємо рядок">
</form>

</body>
</html>