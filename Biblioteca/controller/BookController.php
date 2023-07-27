<?php
    class booksController{
        private $model;

        public function __construct(){
            require_once("c://xampp/htdocs/4Library/Biblioteca/model/BookModel.php");
            $this->model = new booksModel();
        }

        public function saveBook($title, $author, $image_url, $description, $isbn){
            // Validar que la URL de la imagen no esté vacía
            if (!empty($image_url)) {
                // Guardar la URL de la imagen en la base de datos (como un campo VARCHAR)
                $id = $this->model->insertBook($title, $author, $image_url, $description, $isbn);
        
                if ($id !== false) {
                    // Redirigir a la página de detalles del libro con el ID del libro insertado
                    header("Location: show.php?id=".$id);
                    exit();
                } else {
                    // Si ocurrió algún error al insertar el libro, mostrar un mensaje de error
                    echo "Error: No se pudo insertar el libro en la base de datos.";
                    exit();
                }
            } else {
                // Manejar el caso de que la URL de la imagen esté vacía
                // Mostrar un mensaje de error o tomar otra acción según tus necesidades.
                echo "Error: Debes ingresar una URL válida de la imagen.";
                exit();
            }
        }
        

        public function showBook($id){
            return ($this->model->showBook($id) != false) ? $this->model->showBook($id) : header("Location:index.php");
        }

        public function indexBooks(){
            return ($this->model->indexBooks()) ? $this->model->indexBooks() : false;
        }

        public function updateBook($id, $title, $author, $image, $description, $isbn){
            return ($this->model->updateBook($id, $title, $author, $image, $description, $isbn) != false) ? header("Location:show.php?id=".$id) : header("Location:index.php");
        }

        public function deleteBook($id){
            return ($this->model->deleteBook($id)) ? header("Location:/4Library/Biblioteca/index.php") : header("Location:show.php?id=".$id);
        }
    }
?>