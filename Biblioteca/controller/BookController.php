<?php
require_once __DIR__ . '/../model/BookModel.php';

if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'list';
}

switch ($action) {
    case 'list':
        // Obtener todos los libros desde el modelo
        $libros = BookModel::getAll();
        // Mostrar la vista para listar los libros
        require_once __DIR__ . '/../view/book/list.php';
        break;

    case 'show':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            // Obtener un libro por su ID desde el modelo
            $libro = BookModel::getById($id);
            // Mostrar la vista para mostrar los detalles del libro
            if ($libro) {
                require_once '../view/book/detail.php';
            } else {
                echo 'El libro no fue encontrado.';
            }
        } else {
            echo 'ID de libro no especificado.';
        }
        break;

    case 'create':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Procesar el formulario para agregar el nuevo libro
            $titulo = $_POST['titulo'];
            $autor = $_POST['autor'];
            $descripcion = $_POST['descripcion'];
            $imagen = $_POST['imagen']; // Aquí puedes almacenar la URL de la imagen o manejar el archivo de imagen subido

            // Crear un nuevo libro con los datos ingresados
            $nuevoLibro = array(
                'titulo' => $titulo,
                'autor' => $autor,
                'descripcion' => $descripcion,
                'imagen' => $imagen
            );

            // Insertar el nuevo libro en la base de datos utilizando el método insertBook() en el modelo
            $resultado = BookModel::insertBook($nuevoLibro);

            if ($resultado) {
                // Redirigir a la lista de libros después de agregar el libro
                header('Location: BookController.php?action=list');
                exit();
            } else {
                echo 'Error al agregar el libro';
            }
        } else {
            // Mostrar el formulario para agregar un nuevo libro
            require_once '../view/book/create.php';
        }
        break;

    case 'edit':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            // Obtener un libro por su ID desde el modelo
            $libro = BookModel::getById($id);
            // Mostrar la vista para editar el libro
            if ($libro) {
                require_once '../view/book/edit.php';
            } else {
                echo 'El libro no fue encontrado.';
            }
        } else {
            echo 'ID de libro no especificado.';
        }
        break;

    case 'delete':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            // Llamar al método delete() del modelo para eliminar el libro
            $resultado = BookModel::delete($id);

            // Verificar si la eliminación fue exitosa y redirigir nuevamente a la lista de libros
            if ($resultado) {
                header('Location: BookController.php?action=list');
                exit();
            } else {
                echo 'Error al eliminar el libro';
            }
        } else {
            echo 'ID de libro no especificado.';
        }
        break;

    default:
        echo 'Acción no válida';
        break;
}
?>
