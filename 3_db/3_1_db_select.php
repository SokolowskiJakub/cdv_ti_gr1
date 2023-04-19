<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
	<h4>Tabela zajęcia</h4>
	<?php
		require_once  "./scripts/connect.php";
		$sql ="SELECT * FROM zajęcia INNER JOIN cities ON zajęcia.cities_id=cities.id INNER JOIN states ON states.id=cities.state_id;";
        $result = $conn->query($sql);
        while ($user = $result->fetch_assoc()){
           // echo $user["firstName"]."<br>";
            echo <<< USERS
                Imię i Nazwisko: $user[firstName] $user[lastName],
                data urodzenia: $user[birth]
                <br>
                 miasto:$user[city], województwo: $user[state]
                 <br>
                 Data utworzenia użytkownika: $user[create_at]
                 <hr>
                <br>
USERS;
        }
	?>
</body>
</html>