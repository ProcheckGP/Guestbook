<?php
class MessageModel
{
    protected $database;

    public function __construct()
    {
        return $this->database = Database::getInstance();
    }

    public function getAllMessages()
    {
        $stmt = Database::prepare("SELECT * FROM `messages`");
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
