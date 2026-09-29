<?php
    $page = $_GET['page'] ?? 'home';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="piechart.css">
</head>
<body>
    <?php
    include 'navbar.php';
    ?>
    <main>
        <?php
        switch($page){
            case 'lessons':
                include 'lessons.php';
                break;
            case 'stats':
                include 'stats.php';
                break;
            case 'about':
                include 'about.php';
                break;
            default :
                include 'homepage.php';
        }
        ?>
    </main>
    <?php
    include 'footer.php';
    ?>
</body>
</html>