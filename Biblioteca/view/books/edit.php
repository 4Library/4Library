<?php
    require_once("c://xampp/htdocs/4Library/Biblioteca/view/head/head.php");

    require_once("c://xampp/htdocs/4Library/Biblioteca/controller/BookController.php");

    $obj = new booksController();
    $book = $obj->showBook($_GET['id']);
?>

  <form action="update.php" method="post" autocomplete="off">
    <h2>Modificando datos del libro</h2>

    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Id</label>
        <div class="col-sm-10">
        <input type="text" name="id" readonly class="form-control-plaintext" id="staticEmail" value="<?= $book[0]?>">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo título</label>
        <div class="col-sm-10">
            <input type="text" name="title" class="form-control" id="inputPassword" value="<?= $book[1]?>">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo autor</label>
        <div class="col-sm-10">
            <input type="text" name="author" class="form-control" id="inputPassword" value="<?= $book[2]?>">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nueva imagen</label>
        <div class="col-sm-10">
            <input type="" name="image" class="form-control" id="inputPassword" value="<?= $book[3]?>">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nueva descripción</label>
        <div class="col-sm-10">
            <input type="text" name="description" class="form-control" id="inputPassword" value="<?= $book[4]?>">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo número de código de barra</label>
        <div class="col-sm-10">
            <input type="text" name="isbn" class="form-control" id="inputPassword" value="<?= $book[5]?>">
        </div>
    </div>

    <div>
        <input type="submit" class="btn btn-success" value="Actualizar">
        <a class="btn btn-danger" href="show.php?id=<?= $book[0]?>">Cancelar</a>
    </div>
  </form>

<?php
    require_once("c://xampp/htdocs/4Library/Biblioteca/view/head/footer.php");
?>