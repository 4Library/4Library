<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../resources/css/styles.css">
    <title><?php
        echo (empty($_GET['id'])) 
        ? ((strpos($_SERVER['REQUEST_URI'],'create')) ? "Agregando nuevo libro" : "Index")
        : ((strpos($_SERVER['REQUEST_URI'],'show')) ? "Detalles del registro ".$_GET['id'] : "Actualizar registro ".$_GET['id'] );
    ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>

  <body>
  <div class="container-fluid bg-dark p-2 mb-3">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        
        <div class="container-fluid">
            
            <a class="navbar-brand" href="/4Library/Biblioteca/index.php">
                <img class="logo" src="./resources/img/logo.svg" alt="Logo 4 Library" style="width: 200px; height: 100px;">
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
                
                <!-- Search box -->
                <<form class="d-flex" action="books/search.php" method="GET">
                <input class="form-control me-2" type="search" placeholder="search" aria-label="search" name="query">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>

            </div>
        </nav>
    </div>
    <div class="container-fluid">
      <!-- Aqui es donde se supone que se mostrarà el resultado de la busqueda-->
      <div id="resultado_busqueda"></div>
    </div>

    <!-- Script para cargar el contenido de search.php en el div "resultado_busqueda" -->
    <script>
        function cargarBusqueda() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("resultado_busqueda").innerHTML = this.responseText;
          }
        };
        xhttp.open("GET", "search.php", true);
        xhttp.send();
      }
      
      cargarBusqueda();
    </script>

  </body>
</html>
