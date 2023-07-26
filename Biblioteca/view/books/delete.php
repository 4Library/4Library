<?php
    require_once("c://xampp/htdocs/4Library/Biblioteca/controller/booksController.php");

    $obj = new booksController();
    $obj->deleteBook($_GET['id']);
?>