<!DOCTYPE html>
<html>
<head>
    <title>Biblioteca - Detalles del Libro</title>
    <link rel="stylesheet" href="../resources/css/style.css">
</head>
<body>
    <?php if (isset($libro) && $libro): ?>
        <h1>Detalles del Libro</h1>
        <img src="<?php echo $libro['imagen']; ?>" alt="<?php echo $libro['titulo']; ?>">
        <h2><?php echo $libro['titulo']; ?></h2>
        <p>Autor: <?php echo $libro['autor']; ?></p>
        <p><strong>ISBN:</strong> <?php echo $libro['isbn']; ?></p>
        <p><strong>Descripción:</strong> <?php echo $libro['descripcion']; ?></p>
    <?php else: ?>
        <p>El libro no fue encontrado.</p>
    <?php endif; ?>

    <a href="../view/book/list.php">Volver a la Lista de Libros</a>
</body>
</html>

