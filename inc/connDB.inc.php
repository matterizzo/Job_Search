<?php

    $servername = 'localhost';
    $username = 'rizzo_admin';
    $password = '***';
    $dbname = 'rizzo_db';

    $connection = new mysqli($servername, $username, $password, $dbname);
    if ($connection->connect_error){
        die('Connection Failed'.$conn->connection_error);
    }

?>
