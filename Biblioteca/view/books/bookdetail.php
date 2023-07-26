<?php
require_once("c://xampp/htdocs/4Library/Biblioteca/view/head/head.php");
require_once("c://xampp/htdocs/4Library/Biblioteca/controller/BookController.php");

$obj = new booksController();
$book = $obj->showBook($_GET['id']);
?>

<div class="container mt-4">
    <h2 class="text-center">Detalles del Libro</h2>

    <div class="card mb-3">
        <img src="<?= $book["image"] ?>" class="card-img-top" alt="Portada del libro">
        <div class="card-body">
            <h5 class="card-title"><?= $book["title"] ?></h5>
            <p class="card-text"><?= $book["author"] ?></p>
            <p class="card-text"><?= $book["description"] ?></p>
            <a href="edit.php?id=<?= $book["id"] ?>" class="btn btn-success">Editar</a>
            <a href="delete.php?id=<?= $book["id"] ?>" class="btn btn-danger">Eliminar</a>
        </div>
    </div>
</div>

<?php
require_once("c://xampp/htdocs/4Library/Biblioteca/view/head/footer.php");
?>
