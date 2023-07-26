<?php
    require_once("c://xampp/htdocs/4Library/Biblioteca/controller/booksController.php");

    $obj = new booksController();
    $obj->updateBook($_POST['id'], $_POST['title'], $_POST['author'], $_POST['image'], $_POST['description'], $_POST['isbn']);
?>