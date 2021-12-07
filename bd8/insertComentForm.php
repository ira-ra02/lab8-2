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
        include_once("showComents.php")    
    ?>

    <form action="insertComent.php" method="post">
        
     
        <label>number</label><input name="number" type="text"><br>
        <label>likes</label><input name="likes" type="text"><br>
        <input type="submit" value="Вставити рядок">
    </form>

</body>
</html>
