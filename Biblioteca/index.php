<!DOCTYPE html>
<html>

<head>
    <title>Tu Biblioteca Virtual</title>
    <link rel="stylesheet" href="resources/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <div class="container">
        <header class="header">
            <img src="ruta/a/tu/logo.png" alt="Logo" class="logo">
            <div class="welcome">
                Bienvenido a tu rincón de lecturas
            </div>

            <div class="search-bar">
                <input type="text" placeholder="Buscar por título o autor">
                <i class="fas fa-search"></i>
            </div>
        </header>

        <main class="main">
            <button class="add-book-button"
                onclick="window.location.href='controller/BookController.php?action=create'">
                Agregar Libro
            </button>
            <div class="books-container"></div>
            <?php
            // Incluir el modelo y el controlador
            require_once __DIR__ . '/model/BookModel.php';
            require_once __DIR__ . '/controller/BookController.php';

            // Obtener todos los libros desde el modelo
            $libros = BookModel::getAll();

            // Verificar si hay libros para mostrar
            if (count($libros) > 0) {
                foreach ($libros as $libro) {
                    echo '<div class="book">';
                    echo '<img class="book-img" src="' . $libro['imagen'] . '" alt="' . $libro['titulo'] . '">';
                    echo '<h2>' . $libro['titulo'] . '</h2>';
                    echo '<p>Autor: ' . $libro['autor'] . '</p>';
                    echo '<a href="../view/book/edit.php?id=' . $libro['id'] . '" ?>Editar</a>';
                    echo '<a href="controller/BookController.php?action=delete&id=' . $libro['id'] . '" onclick="return confirm(\'¿Estás seguro de que deseas eliminar este libro?\')">Eliminar</a>';
                    echo '<a href="../view/book/detail.php?id=' . $libro['id'] . '">Ver detalles</a>';
                    echo '</div>';
                }
            } else {
                echo '<p>No se encontraron libros.</p>';
            }
            ?>

        </main>

        <footer class="footer">
            Derechos reservados &copy; Tu Biblioteca Virtual
            <?php echo date("Y"); ?>. Visita nuestro <a href="#">sitio web</a>.
        </footer>
    </div>
</body>

</html>