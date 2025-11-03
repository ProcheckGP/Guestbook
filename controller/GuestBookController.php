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
}
