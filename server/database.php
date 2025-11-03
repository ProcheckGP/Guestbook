<?php
class Database
{
    private static $instance = null;
    private $connection = null;

    protected function __construct()
    {
        $config = require __DIR__ . '/config.php';

        $this->connection = new PDO(
            $config['dsn'],
            $config['username'],
            $config['password'],
            $config['options']
        );
    }

    protected function __clone() {}

    public function __wakeup()
    {
        throw new \BadMethodCallException('Не удаётся десериализовать подключене к базе данных');
    }

    public static function getInstance(): Database
    {
        if (null === self::$instance) {
            self::$instance = new static();
        }
        return self::$instance;
    }

    public static function connection(): \PDO
    {
        return static::getInstance()->connection;
    }

    public static function prepare($statement): \PDOStatement
    {
        return static::connection()->prepare($statement);
    }

    public static function lastInsertId()
    {
        return intval(static::connection()->lastInsertId());
    }
}
