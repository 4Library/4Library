<?php
    class booksController{
        private $model;

        public function __construct(){
            require_once("c://xampp/htdocs/4Library/Biblioteca/model/BookModel.php");
            $this->model = new booksModel();
        }

        public function saveBook($title, $author, $image_url, $description, $isbn){
            if (!empty($image_url)) {
                $id = $this->model->insertBook($title, $author, $image_url, $description, $isbn);
        
                if ($id !== false) {
                    header("Location: show.php?id=".$id);
                    exit();
                } else {
                    
                    echo "Error: No se pudo insertar el libro en la base de datos.";
                    exit();
                }
            } else {
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