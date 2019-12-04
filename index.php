<!DOCTYPE html>
<html lang="pl" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Mój CMS</title>
    </head>
    <body>
        <?php
            $host = 'localhost';
            $db_user = 'root';
            $db_user_pass = '';
            $db_name = 'moj_CMS';

            //Data source name string z to ciąg znaków zawierający informacje o źródle danych wymagany przez ODBC (Open DataBase Connectivity – otwarte łącze baz danych) do nawiązania połączenia z bazą danych.
            $dsn = "mysql:host=$host;dbname=$db_name";


            try {

                $connection = new PDO($dsn, $db_user, $db_user_pass);

            } catch (PDOException $e) {

                echo 'There was a problem connecting to the database: ' . $e->getMessage();

            }
            $query = $connection->query("SELECT * FROM element WHERE typ_elementu='html'"); // querying the database
            while($row = $query->fetch()){
                // echo implode(", ", $row) . "</br>";
                echo $row['typ_elementu'] . "</br>";
            }
         ?>
    </body>
</html>
