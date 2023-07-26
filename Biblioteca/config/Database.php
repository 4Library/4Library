<?php
    class database{
        private $host= "localhost";
        private $dbname="library_db";
        private $book = "root";

        public function conexion(){
            try{
                $PDO = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->book);

                return $PDO;
            }catch(PDOException $e){
                return $e -> getMessage();
            }
        }
    }
?>