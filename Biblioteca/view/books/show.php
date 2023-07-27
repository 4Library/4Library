<?php
require_once("c://xampp/htdocs/4Library/Biblioteca/view/head/head.php");
require_once("c://xampp/htdocs/4Library/Biblioteca/controller/BookController.php");

$obj = new booksController();
$date = $obj->showBook($_GET['id']);
?>

<h2 class="text-center mb-5">Detalle del libro</h2>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <img src="<?= $date["image"] ?>" alt="Portada del libro" class="img-fluid" style="max-height: 300px;">
        </div>
        <div class="col-md-8">
            <h3>
                <?= $date["title"] ?>
            </h3>
            <p>Autor:
                <?= $date["author"] ?>
            </p>
            <p>ISBN:
                <?= $date["isbn"] ?>
            </p>
            <p>Descripción:
                <?= $date["description"] ?>
            </p>

            <div class="col-md-8">
                <div class="pb-3">
                    <a href="/4Library/Biblioteca/index.php" class="btn btn-primary">Regresar</a>
                    <a href="edit.php?id=<?= $date["id"] ?>" class="btn btn-primary">Modificar</a>
                    <a class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#id<?= $date["id"] ?>">Eliminar</a>
                </div>
            </div>

            <div class="modal fade" id="id<?= $date["id"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar este libro?</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ⚠ Una vez eliminado no se podrá recuperar los datos de este libro
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <a href="delete.php?id=<?= $date["id"] ?>" class="btn btn-danger">Eliminar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once("c://xampp/htdocs/4Library/Biblioteca/view/head/footer.php");
?>