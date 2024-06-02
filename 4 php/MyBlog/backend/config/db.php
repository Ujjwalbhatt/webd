<?php
class Database {
    private static $connection = null;

    public static function connect() {
        if (self::$connection === null) {
            try {
                self::$connection = new PDO(
                    'mysql:host=localhost;dbname=myblog', 
                    'root', // Replace with your MySQL username
                    '' // Replace with your MySQL password
                );
                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo 'Connection failed: ' . $e->getMessage();
            }
        }
        return self::$connection;
    }
}
?>
