<?php

class Database {

    private static $hostname = 'containers-us-west-123.railway.app';
    private static $port = '6510'; // 加上端口
    private static $username = 'root';
    private static $password = 'AbcDef123456!';
    private static $dbname = 'railway';
    private static $connection = null;

    public static function connect()
    {
        if (!self::$connection)
            self::$connection = new PDO(
                "mysql:host=" . self::$hostname . ";port=" . self::$port . ";dbname=" . self::$dbname,
                self::$username,
                self::$password
            );
        return self::$connection;
    }

    public function disconnect()
    {
        self::$connection = null;
    }
}
?>
