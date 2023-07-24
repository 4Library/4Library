<!DOCTYPE html>
<html>
<head>
    <title>Biblioteca - Agregar Nuevo Libro</title>
    <link rel="stylesheet" href="../resources/css/style.css">
</head>
<body>
    <h1>Agregar Nuevo Libro</h1>
    <form action="../controller/BookController.php?action=create" method="post">
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required><br>

        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autor" required><br>

        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion" rows="4" required></textarea><br>

        <label for="imagen">URL de la Imagen:</label>
        <input type="text" id="imagen" name="imagen" required><br>

        <input type="submit" value="Agregar Libro">
    </form>
</body>
</html>
