<?php

require_once __DIR__ . '/../config/Database.php';

class BookModel {
    public static function getAll() {
        global $db;

        // Preparar y ejecutar la consulta para obtener todos los libros
        $sql = "SELECT * FROM libros";
        $result = $db->query($sql);

        // Verificar si la consulta se ejecutó correctamente
        if ($result) {
            $libros = $result->fetch_all(MYSQLI_ASSOC);
            return $libros;
        } else {
            return array(); // Devolver un array vacío si no se encontraron libros
        }
    }

    public static function getById($id) {
        global $db;

        // Preparar y ejecutar la consulta para obtener el libro por su ID
        $sql = "SELECT * FROM libros WHERE id = ?";
        $stmt = $db->prepare($sql);
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
        global $db;
    
        // Preparar la consulta SQL para insertar el nuevo libro
        $sql = "INSERT INTO libros (titulo, autor, descripcion, imagen) VALUES (?, ?, ?, ?)";
        $stmt = $db->prepare($sql);
        $stmt->bind_param("ssss", $bookData['titulo'], $bookData['autor'], $bookData['descripcion'], $bookData['imagen']);
    
        // Ejecutar la consulta y verificar si se insertó correctamente
        $result = $stmt->execute();
        return $result;
    }
    

    public function update($id, $bookData) {
        global $db;

        // Preparar la consulta SQL para actualizar el libro
        $sql = "UPDATE libros SET titulo = ?, autor = ?, descripcion = ?, imagen = ? WHERE id = ?";
        $stmt = $db->prepare($sql);
        $stmt->bind_param("ssssi", $bookData['titulo'], $bookData['autor'], $bookData['descripcion'], $bookData['imagen'], $id);

        // Ejecutar la consulta y verificar si se actualizó correctamente
        $result = $stmt->execute();
        return $result;
    }

    public function delete($id) {
        global $db;

        // Preparar la consulta SQL para eliminar el libro
        $sql = "DELETE FROM libros WHERE id = ?";
        $stmt = $db->prepare($sql);
        $stmt->bind_param("i", $id);

        // Ejecutar la consulta y verificar si se eliminó correctamente
        $result = $stmt->execute();
        return $result;
    }
}