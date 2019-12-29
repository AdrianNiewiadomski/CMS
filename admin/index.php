<?php
    include 'ElementHTML.class.php';

    //Data source name string z to ciąg znaków zawierający informacje o źródle danych wymagany przez ODBC (Open DataBase Connectivity – otwarte łącze baz danych) do nawiązania połączenia z bazą danych.
    // $dsn = "mysql:host=$host;dbname=$db_name";
    $host = 'localhost';
    $db_name = 'moj_CMS';
    $dsn = "mysql:host=$host;dbname=$db_name;charset=utf8mb4";

    $db_user = 'root';
    $db_user_pass = '';

    $elementy = [];
    try {

        $connection = new PDO($dsn, $db_user, $db_user_pass);
        $query = $connection->query("SELECT * FROM tabela");
        while($row = $query->fetch()){
            // echo implode(", ", $row) . "</br>";
            // echo $row['typ_elementu'] . "</br>";
            $elementy[] = new Element($row);
        }

        include 'edytor.php';

    } catch (PDOException $e) {

        echo "Błąd połączenia z bazą danych!<br>";
        echo $e->getMessage();
    }
    //include 'edytor.php';
?>
