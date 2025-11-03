<?php
require_once 'model/MessageModel.php';
require_once 'server/database.php';

class GuestBookController
{
    private $message;

    public function __construct()
    {
        $this->message = new MessageModel();
    }

    public function read()
    {
        $messages = $this->message->getAllMessages();

        require_once 'view/header.php';
        require_once 'view/formAddMessage.php';
        require_once 'view/outputMessage.php';
        require_once 'view/footer.php';
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['name'], $_POST['email'], $_POST['title'], $_POST['content'])) {
                $this->message->createNewMessage(
                    $_POST['name'],
                    $_POST['email'],
                    $_POST['title'],
                    $_POST['content'],
                    date("Y-m-d H:i:s")
                );
            }
        }
    }
}
