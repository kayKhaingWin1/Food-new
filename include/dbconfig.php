<?php

class Database {

    private static $connection = null;

    public static function connect()
    {
        if (!self::$connection) {
            $hostname = 'sql101.iceiy.com'; 
            $port     = '3306';             
            $username = 'icei_39711552';   
            $password = 'sally2002911';   
            $dbname   = 'icei_39711552_food_order'; 

            $dsn = "mysql:host=$hostname;port=$port;dbname=$dbname;charset=utf8mb4";

            try {
                self::$connection = new PDO($dsn, $username, $password);
                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Database connection failed: " . $e->getMessage());
            }
        }

        return self::$connection;
    }

    public function disconnect()
    {
        self::$connection = null;
    }
}

?>
