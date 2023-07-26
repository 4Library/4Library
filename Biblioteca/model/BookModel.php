<?php
    class booksModel{
        private $PDO;

        public function __construct(){
            require_once("c://xampp/htdocs/4Library/Biblioteca/config/Database.php");
            $con = new Database();
            $this->PDO = $con->conexion();
        }

        public function insertBook($title, $author, $image, $description, $isbn){
            $stament = $this->PDO->prepare("INSERT INTO books VALUES (null, :title, :author, :image, :description, :isbn)");

            $stament->bindParam(":title", $title);
            $stament->bindParam(":author", $author);
            $stament->bindParam(":image", $image);
            $stament->bindParam(":description", $description);
            $stament->bindParam(":isbn", $isbn);
            
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
        }

        public function showBook($id){
            $stament = $this->PDO->prepare("SELECT * FROM books WHERE id = :id limit 1");

            $stament->bindParam(":id", $id);

            return ($stament->execute()) ? $stament->fetch() : false;
        }

        public function indexBooks(){
            $stament = $this->PDO->prepare("SELECT * FROM books");

            return ($stament->execute()) ? $stament->fetchAll() : false;
        }

        public function updateBook($id, $title, $author, $image, $description, $isbn){
            $stament = $this->PDO->prepare("UPDATE books SET title = :title, author = :author, image = :image, description = :description, isbn = :isbn WHERE id = :id");

            $stament->bindParam(":id", $id);
            $stament->bindParam(":title", $title);
            $stament->bindParam(":author", $author);
            $stament->bindParam(":image", $image);
            $stament->bindParam(":description", $description);
            $stament->bindParam(":isbn", $isbn);

            return ($stament->execute()) ? $id : false;
        }

        public function deleteBook($id){
            $stament = $this->PDO->prepare("DELETE FROM books WHERE id = :id");

            $stament->bindParam(":id", $id);

            return ($stament->execute()) ? true : false;
        }
    }
?>