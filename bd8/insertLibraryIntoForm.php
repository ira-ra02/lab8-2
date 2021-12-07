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
        include_once("showLibrary.php")    
    ?>

    <form action="insertIntoLibrary.php" method="post">
        
      
        <label>manga</label><input name="manga" type="text"><br>
        <label>manhva</label><input name="manhva" type="text"><br>
        <label>comics</label><input name="comics" type="text"><br>
         <label>number</label><input name="number" type="text"><br>
    
        <input type="submit" value="Вставити рядок">
    </form>

</body>
</html>
