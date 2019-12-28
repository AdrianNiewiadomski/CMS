<!DOCTYPE html>
<html lang="pl" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Mój CMS</title>
    </head>
    <body>
        <?php
            //Data source name string z to ciąg znaków zawierający informacje o źródle danych wymagany przez ODBC (Open DataBase Connectivity – otwarte łącze baz danych) do nawiązania połączenia z bazą danych.
            // $dsn = "mysql:host=$host;dbname=$db_name";





            $db_user = 'root';
            $db_user_pass = '';

            $host = 'localhost';
            $db_name = 'moj_CMS';

            $dsn = "mysql:host=$host;dbname=$db_name";

            try {

                //$pdo = new PDO($dsn, $db_user, $db_user_pass);
                // $pdoStatement = $pdo->query("SELECT * FROM tabela");
                // $tablica = $pdoStatement->fetchAll();
                // foreach ($tablica as $wiersz) {
                //     //echo implode(", ", $wiersz) . "</br>";
                //     echo $wiersz['typ_elementu'] . "</br>";
                // }

                $connection = new PDO($dsn, $db_user, $db_user_pass);
                $query = $connection->query("SELECT * FROM tabela");
                while($row = $query->fetch()){
                    // echo implode(", ", $row) . "</br>";
                    echo $row['typ_elementu'] . "</br>";
                }

            } catch (PDOException $e) {

                echo "Błąd połączenia z bazą danych!<br>";
                echo $e->getMessage();
            }

        ?>

        <iframe src="../index.html" width="" height=""></iframe>

    </body>
</html>
