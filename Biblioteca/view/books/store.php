<?php
    require_once("c://xampp/htdocs/4Library/Biblioteca/controller/BookController.php");

    $obj = new booksController();
    $obj->saveBook($_POST['title'], $_POST['author'], $_POST['image_url'], $_POST['description'], $_POST['isbn']);
?>