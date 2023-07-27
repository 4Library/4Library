<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php
        echo (empty($_GET['id']))
            ? ((strpos($_SERVER['REQUEST_URI'], 'create')) ? "Agregando nuevo libro" : "Index")
            : ((strpos($_SERVER['REQUEST_URI'], 'show')) ? "Detalles del registro " . $_GET['id'] : "Actualizar registro " . $_GET['id']);
        ?>
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="resources/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .header-bg {
            background-image: url('../../resources/img/portada.jpg');
            background-size: cover;
            background-position: center;
        }

        .search-bar {
            position: absolute;
            bottom: 20%;
            right: 20px;
            display: flex;
            align-items: center;
        }

        .search-bar input[type="text"] {
            padding: 4px 25px;
            border-radius: 5px;
            border: 1px solid #666;
        }

        .search-bar i {
            position: absolute;
            right: 10px;
            top: 7px;
        }
    </style>
</head>

<body>
    <div class="header-bg container-fluid p-2">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
            <a class="navbar-brand" href="/4Library/Biblioteca/index.php">
            <img src="../../resources/img/Logo-def.png" alt="Logo" width="100" height="40">
        </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="search-bar">
                    <input type="text" id="searchInput" placeholder="Buscar por título o autor">
                    <i class="fas fa-search" onclick="searchBooks()"></i>
                </div>
                <div id="searchResults"></div>
            </div>
        </nav>
    </div>
</body>
