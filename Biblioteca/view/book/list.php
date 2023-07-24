<!DOCTYPE html>
<html>
<head>
    <title>Biblioteca - Lista de Libros</title>
    <link rel="stylesheet" href="../resources/css/style.css">
</head>
<body>
    <h1>Lista de Libros</h1>
    <br><br>

    <!-- Aquí se muestra la lista de libros -->
    <?php foreach ($libros as $libro): ?>
        <div class="book-item">
            <img src="<?php echo $libro['imagen']; ?>" alt="<?php echo $libro['titulo']; ?>">
            <h2><?php echo $libro['titulo']; ?></h2>
            <p><?php echo $libro['autor']; ?></p>
            <a href="../view/book/detail.php?id=<?php echo $libro['id']; ?>">Ver detalles</a>
            <a href="../view/book/edit.php?id=<?php echo $libro['id']; ?>">Editar</a>
            <a href="controller/BookController.php?action=delete&id=<?php echo $libro['id']; ?>" onclick="return confirm('¿Estás seguro de que deseas eliminar este libro?')">Eliminar</a>
        </div>
    <?php endforeach; ?>
</body>
</html>
