<?php

class Database
{

    public static function connect()
    {
        $servername =  $_ENV['DB_HOST'];
        $db_name = $_ENV['DB_NAME'];
        $username =$_ENV['DB_USERNAME'];
        $db_password = $_ENV['DB_PASSWORD'];

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$db_name", $username, $db_password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

        return $conn;
    }
}
