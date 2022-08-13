<?php
    $DB_SERVER = 'localhost';
    $DB_USER = 'root';
    $DB_PASSWORD = '';
    $DB_NAME = 'pi_upet';
    $port = 3306;

    $link = new PDO("mysql:host=$DB_SERVER;port=$port;dbname=" . $DB_NAME, $DB_USER, $DB_PASSWORD);

    if ($link === false){
        die("ERRO: não foi possivel realizar a conexao com o BD");
    }
?>