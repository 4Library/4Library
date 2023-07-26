<?php
    require_once("c://xampp/htdocs/4Library/Biblioteca/view/head/head.php");

    require_once("c://xampp/htdocs/4Library/Biblioteca/controller/booksController.php");

    $obj = new booksController();
    $date = $obj->showBook($_GET['id']);
?>

    <h2 class="text-center">Detalles del libro</h2>

    <div class="pb-3">
        <a href="index.php" class="btn btn-primary">Regresar</a>

        <a href="edit.php?id=<?= $date[0]?>" class="btn btn-success">Actualizar</a>
      
        <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>

  
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar este libro?</h5>

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        ⚠ Una vez eliminado no se podra recuperar los datos de este libro.
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>

                        <a href="delete.php?id=<?= $date[0]?>" class="btn btn-danger">Eliminar</a>
                    </div>
                </div>
            </div>
        </div>
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
                <td scope="col"><?= $date["id"]?></td>
                <td scope="col"><?= $date["title"]?></td>
                <td scope="col"><?= $date["author"]?></td>
                <td scope="col"><?= $date["image"]?></td>
                <td scope="col"><?= $date["description"]?></td>
                <td scope="col"><?= $date["isbn"]?></td>
            </tr>
        </tbody>
    </table>

<?php
    require_once("c://xampp/htdocs/4Library/Biblioteca/view/head/footer.php");
?>