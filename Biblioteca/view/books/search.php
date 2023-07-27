<?php

require_once("c://xampp/htdocs/4Library/Biblioteca/view/head/head.php");

$host = "localhost";
$dbname = "library_db";
$username = "root";

// Crea la conexión a la base de datos
$conn = new mysqli($host, $username, "", $dbname);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if (isset($_GET['query'])) {
    $search_query = $_GET['query'];

    $sql = "SELECT * FROM tabla_books WHERE title LIKE ? OR author LIKE ?";
    $stmt = $conn->prepare($sql);
    $search_query = "%$search_query%"; // Agrega los caracteres % para la búsqueda
    $stmt->bind_param("ss", $search_query, $search_query);
    $stmt->execute();

    $result = $stmt->get_result();

    // Muestra los resultados
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<p>" . $row["title"] . " - " . $row["author"] . "</p>";
        }
    } else {
        echo "No se encontraron resultados.";
    }

    $stmt->close();
}

$conn->close();
?>

