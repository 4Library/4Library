<!DOCTYPE html>
<html>
<head>
    <title>Editar Libro</title>
    <link rel="stylesheet" href="../resources/css/style-form.css">
</head>
<body>
    <h1>Editar Libro</h1>
    <form action="../controller/BookController.php?action=editbook" method="post">
    <!-- Campos del formulario para editar -->
    <input type="hidden" name="id" value="<?php echo $libro['id']; ?>">
    <label for="titulo">Título:</label>
    <input type="text" id="titulo" name="titulo" value="<?php echo $libro['titulo']; ?>" required><br>
    <label for="autor">Autor:</label>
    <input type="text" id="autor" name="autor" value="<?php echo $libro['autor']; ?>" required><br>
    <label for="descripcion">Descripción:</label>
    <textarea id="descripcion" name="descripcion" rows="4" required><?php echo $libro['descripcion']; ?></textarea><br>
    <label for="imagen">URL de la Imagen:</label>
    <input type="text" id="imagen" name="imagen" value="<?php echo $libro['imagen']; ?>" required><br>
    <input type="submit" value="Guardar Cambios">
</form>

</body>
</html>

