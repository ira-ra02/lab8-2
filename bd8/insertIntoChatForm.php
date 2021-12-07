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
        include_once("showChat.php")    
    ?>

    <form action="insertIntoChat.php" method="post">
        
        <label>id</label><input name="id_chat" type="text"><br>
        <label>text</label><input name="text" type="text"><br>
    
        <input type="submit" value="Вставити рядок">
    </form>

</body>
</html>
