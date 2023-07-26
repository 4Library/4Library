<?php
    require_once("c://xampp/htdocs/4Library/Biblioteca/view/head/head.php");
?>

    <form action="store.php" method="POST" autocomplete="off">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Título del libro</label>

            <input type="text" name="title" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            <label for="exampleInputEmail1" class="form-label">Autor del libro</label>

            <input type="text" name="author" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            <label for="exampleInputEmail1" class="form-label">Portada del libro</label>

            <input type="url" name="image" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            <label for="exampleInputEmail1" class="form-label">Descripción del libro</label>

            <input type="" name="description" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            <label for="exampleInputEmail1" class="form-label">Número del código de barra del libro</label>

            <input type="" name="isbn" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>

        <a href="index.php" class="btn btn-danger">Cancelar</a>
    </form>

<?php
    require_once("c://xampp/htdocs/4Library/Biblioteca/view/head/footer.php");
?>