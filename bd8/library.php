<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Library</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Library</h1>


    <?php

    include_once('db.php');

    $sql = 'SELECT * FROM library';


    if($result = $mysqli->query($sql)) {  

        printf("прочитане: <br><br>");   
        printf("<table><tr><th>id_librery</th><th>manga</th><th>manhva</th><th>comics</th></tr>");   
        while( $row = $result->fetch_assoc() ){ 
            printf("<tr><td>%s</td><td>%s</td></tr>", $row['id'], $row['manga'], $row['manhva'], $row['comics']); 
        };
        printf("</table>");
        
        $result->close();
    };

    
    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>
