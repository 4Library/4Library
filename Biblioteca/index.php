<!DOCTYPE html>
<html>

<head>
    <title>Tu Biblioteca Virtual</title>
    <link rel="stylesheet" href="resources/css/style.css">
    <link rel="stylesheet" href="resources/css/style-header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <div class="container">
        <header class="header">
            <img src="Biblioteca\resources\img\logo.png" alt="Logo" class="logo">

            <div class="search-bar">
                <input type="text" id="searchInput" placeholder="Buscar por título o autor">
                <i class="fas fa-search" onclick="searchBooks()"></i>
            </div>
            <div id="searchResults"></div>
        </header>

        <main class="main">
            <button class="add-book-button"
                onclick="window.location.href='controller/BookController.php?action=create'">
                Agregar Libro
            </button>
            <div class="welcome">
                Bienvenido a tu rincón de lecturas
            </div>
            <div class="container">
                <div class="row">
                    <?php
                    // Incluir el modelo y el controlador
                    require_once __DIR__ . '/model/BookModel.php';
                    require_once __DIR__ . '/controller/BookController.php';

                    // Obtener todos los libros desde el modelo
                    $libros = BookModel::getAll();

                    // Verificar si hay libros para mostrar
                    if (count($libros) > 0) {
                        foreach ($libros as $libro) {
                            // Generar una tarjeta (card) de Bootstrap para cada libro
                            echo '<div class="col-6 col-sm-4 col-md-3">';
                            echo '<div class="card mb-4">';
                            echo '<img src="' . $libro['image'] . '" class="card-img-top" alt="' . $libro['title'] . '">';
                            echo '<div class="card-body">';
                            echo '<h5 class="card-title">' . $libro['title'] . '</h5>';
                            echo '<p class="card-text">Autor: ' . $libro['author'] . '</p>';
                            echo '<p class="card-text">ISBN: ' . $libro['isbn'] . '</p>';
                            echo '<a href="view/book/detail.php?id=' . $libro['id'] . '" class="btn btn-secondary">Ver detalles</a>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                    } else {
                        echo '<p>No se encontraron libros.</p>';
                    }
                    ?>
                </div>
            </div>
        </main>

        <footer class="footer">
            Derechos reservados &copy; Tu Biblioteca Virtual
            <?php echo date("Y"); ?>. Visita nuestro <a href="#">sitio web</a>.
        </footer>
    </div>
    <script src="Biblioteca\script.js"></script>
</body>

</html>