<?php
require_once("c://xampp/htdocs/4Library/Biblioteca/view/head/head.php");
?>

<form action="store.php" method="POST" autocomplete="off">
    <div class="m-4">
        <label for="exampleInputEmail1" class="form-label">Título del libro</label>

        <input type="text" name="title" required class="form-control" id="exampleInputEmail1"
            aria-describedby="emailHelp">

        <label for="exampleInputEmail1" class="form-label">Autor del libro</label>

        <input type="text" name="author" required class="form-control" id="exampleInputEmail1"
            aria-describedby="emailHelp">

        <label for="exampleInputImageURL" class="form-label">URL de la imagen</label>
        <input type="text" name="image_url" required class="form-control" id="exampleInputImageURL">


        <label for="exampleInputEmail1" class="form-label">Descripción del libro</label>

        <input type="" name="description" required class="form-control" id="exampleInputEmail1"
            aria-describedby="emailHelp">

        <label for="exampleInputEmail1" class="form-label">Número del código de barra del libro</label>

        <input type="" name="isbn" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <button type="submit" class="btn btn-primary m-4">Guardar</button>

    <a href="/4Library/Biblioteca/index.php" class="btn btn-danger">Cancelar</a>
</form>

<?php
require_once("c://xampp/htdocs/4Library/Biblioteca/view/head/footer.php");
?>