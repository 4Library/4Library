<?php
require_once("c://xampp/htdocs/4Library/Biblioteca/view/head/head.php");

require_once("c://xampp/htdocs/4Library/Biblioteca/controller/BookController.php");

$obj = new booksController();
$date = $obj->showBook($_GET['id']);
?>

<h2 class="text-center">Detalles del libro</h2>

<div class="pb-3">
    <a href="index.php" class="btn btn-primary">Regresar</a>
    <a href="edit.php?id=<?= $date["id"] ?>" class="btn btn-success">Actualizar</a>

    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>

    <!-- Resto del código del modal para eliminar el libro -->
</div>

<table class="table container-fluid">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Título</th>
            <th scope="col">Autor</th>
            <th scope="col">Imagen</th>
            <th scope="col">Descripción</th>
            <th scope="col">Código de barra</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td scope="col"><?= $date["id"] ?></td>
            <td scope="col"><?= $date["title"] ?></td>
            <td scope="col"><?= $date["author"] ?></td>

            <!-- Agrega este código para mostrar la imagen -->
            <td scope="col">
                <img src="<?= $date["image"] ?>" alt="Portada del libro">
            </td>
            
            <td scope="col"><?= $date["description"] ?></td>
            <td scope="col"><?= $date["isbn"] ?></td>
        </tr>
    </tbody>
</table>

<?php
require_once("c://xampp/htdocs/4Library/Biblioteca/view/head/footer.php");
?>
