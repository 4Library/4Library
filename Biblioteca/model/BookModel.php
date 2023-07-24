<?php
require_once __DIR__ . '/../config/Database.php';

class BookModel {
    public static function getAll() {
        global $conn;
        // Lógica para obtener todos los libros desde la base de datos
        $sql = "SELECT * FROM libros";
        $result = $conn->query($sql);

        // Verificar si la consulta se ejecutó correctamente
        if ($result) {
            $libros = $result->fetch_all(MYSQLI_ASSOC);
            return $libros;
        } else {
            return array(); // Devolver un array vacío si no se encontraron libros
        }
    }

    public static function getById($id) {
        global $conn;
        // Lógica para obtener un libro por su ID desde la base de datos
        $sql = "SELECT * FROM libros WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        // Verificar si la consulta se ejecutó correctamente
        if ($result && $result->num_rows > 0) {
            $libro = $result->fetch_assoc();
            return $libro;
        } else {
            return null; // Devolver null si no se encontró el libro con el ID especificado
        }
    }

    public static function insertBook($bookData) {
        global $conn;
        // Lógica para insertar un libro en la base de datos
        $sql = "INSERT INTO libros (titulo, autor, descripcion, imagen) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $bookData['titulo'], $bookData['autor'], $bookData['descripcion'], $bookData['imagen']);
        $result = $stmt->execute();
        return $result;
    }

    public static function update($id, $bookData) {
        global $conn;
        // Lógica para actualizar un libro en la base de datos
        $sql = "UPDATE libros SET titulo = ?, autor = ?, descripcion = ?, imagen = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssi", $bookData['titulo'], $bookData['autor'], $bookData['descripcion'], $bookData['imagen'], $id);
        $result = $stmt->execute();
        return $result;
    }

    public static function delete($id) {
        global $conn;
        // Lógica para eliminar un libro de la base de datos
        $sql = "DELETE FROM libros WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $result = $stmt->execute();
        return $result;
    }
}
