<?php
    require_once("c://xampp/htdocs/4Library/Biblioteca/view/head/head.php");
    require_once("c://xampp/htdocs/4Library/Biblioteca/controller/BookController.php");

    $obj = new booksController();
    $rows = $obj->indexBooks();
?>
    <div class="mb-3">
    <a href="/4Library/Biblioteca/view/books/create.php" class="btn btn-primary m-2">Agregar un nuevo libro</a>
    </div>

    <h2 class="text-center mb-5">¡Bienvenido a tu rincon de lecturas!</h2>
<div class="container">

    <?php if (isset($rows) && !empty($rows)): ?>
        <div class="row">
            <?php foreach ($rows as $row): ?>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="card h-100">
                        <img src="<?= $row["image"] ?>" class="card-img-top" alt="Portada del libro" style="max-width: 100%;">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?= $row["title"] ?>
                            </h5>
                            <p class="card-text">Autor:
                                <?= $row["author"] ?>
                            </p>
                            <p class="card-text">ISBN:
                                <?= $row["isbn"] ?>
                            </p>
                            <a href="view/books/show.php?id=<?= $row[0] ?>" class="btn btn-primary">Ver detalle</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <div class="row">
            <div class="col-md-12">
                <p class="text-center">Lo sentimos, no se han encontrado libros registrados.</p>
            </div>
        </div>
    <?php endif; ?>
</div>

<?php
require_once("c://xampp/htdocs/4Library/Biblioteca/view/head/footer.php");
?>