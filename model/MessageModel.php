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

    public function createNewMessage($name, $email, $title, $content, $created)
    {
        $stmt = Database::prepare("INSERT INTO `messages` (name, email, title, content, created)
                                VALUES (?, ?, ?, ?, ?)");
        return $stmt->execute([$name, $email, $title, $content, $created]);
    }
}
