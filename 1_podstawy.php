<!doctype html>
<html lang ="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no,initial-scale=1.0
        maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    $firstName = "Janusz123";
    $lastName = "Nowak";
    echo "Imię i Nazwisko: $firstName $lastName<br>";
    echo 'Imię i Nazwisko: $firstName $lastName<br>';


    echo <<< TEXT
    <br>
    Imię i Nazwisko: $firstName $lastName
    <hr>
    TEXT;
//herdoc
$text =  <<< TEXT
    <br>
    Imię i Nazwisko: $firstName $lastName
    <hr>
    TEXT;
echo $text;

//nowdoc
echo <<< 'TEXT'
    <br>
    Imię i Nazwisko: $firstName $lastName
    <hr>
    TEXT;


$bin = 0b1010;
echo $bin; //10

$oct = 0101;
echo $oct; //65

$hex = 0xA;
echo $hex; //10
?>
</body>
</html>