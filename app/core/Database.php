<?php

class Database {

    private static $host;
    private static $port;
    private static $db;
    private static $user;
    private static $pw;

    private static function connect() {
        self::$host = 'localhost';
        self::$port = '3306';
        self::$db   = 'test';
        self::$user = 'root';
        self::$pw   = '';
        
        $pdo = new \PDO('mysql:host=' . self::$host . ';dbname=' . self::$db .';charset=utf8', self::$user, self::$pw);
        $pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);
        $pdo->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
        return $pdo;
    }

    public static function query($query, $params = array()) {
        $stmt = self::connect()->prepare($query);
        $stmt->execute($params);
        $data = $stmt->fetchAll();
        return $data;
    }
}

?>