<?php
class ContactController
{
    public function index()
    {
        include 'view/header.php';
        include 'view/contact.php';
        include 'view/footer.php';
    }

    public function processContact()
    {
        header('Location: ?page=erreur404');
        exit();
    }
}
