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
        include_once("showLibrary.php");    
    ?>

<form action="updateLibrary.php" method="post">
        <label>ІД рядка який змінюємо</label><input name="id" type="text"><br>
        <label>Нове значення manga</label><input name="manga" type="text"><br>
        <label>Нове значення manhva</label><input name="manhva" type="text"><br>
        <label>Нове значення comics</label><input name="comics" type="text"><br>
        
    
        <input type="submit" value="Змінюємо рядок">
</form>

</body>
</html>