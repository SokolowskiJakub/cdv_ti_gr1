<!
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/table.css"
    <title>Document</title>
</head>
<body>
    <h4>Początek pliku</h4>
    <?php
    //iclude , require, include_once, require_once rodzaje podpinania pliku
    //include "./skrypty/scripts_1.php";//może wyświetlać kilka razy
    ////include_once "./skrypty/scripts_1.php";//wyświetla raz
    // require "./skrypty/scripts_1.php";
    // require_once "./skrypty/scripts_1.php";

    ?>
    <h4>Koniec pliku</h4>
    <h3>Lista</h3>
    <?php
      require_once "./skrypty/list.php";
      require_once "./skrypty/table.php";
    ?>



</body>
</html>


