<?php
    class booksController{
        private $model;

        public function __construct(){
            require_once("c://xampp/htdocs/4Library/Biblioteca/model/booksModel.php");
            $this->model = new booksModel();
        }

        public function saveBook($title, $author, $image, $description, $isbn){
            $id = $this->model->insertBook($title, $author, $image, $description, $isbn);
            
            return ($id!=false) ? header("Location:show.php?id=".$id) : header("Location:create.php");
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
            return ($this->model->deleteBook($id)) ? header("Location:index.php") : header("Location:show.php?id=".$id);
        }
    }
?>