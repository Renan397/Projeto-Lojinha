<?php
include_once "DBConn.class.php";
$DBConn = new DBConn();
class Categorias {
    private $idCategoria;
    private $descricao;

    function __construct($descricao) {
        $this->setDescricao($descricao);
    }
    
    public function getIdCategoria(){
        return $this->idCategoria;
    }

    public function setIdCategoria($idCategoria){
        $this->idCategoria = $idCategoria;
        return $this;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
        return $this;
    }

    public function insertCategoria() {
        $desc_categoriaDB = $this->getDescricao();

        $sqlCommand = "INSERT INTO categorias (descricao) values ('$desc_categoriaDB');";
        return $sqlCommand;
    }
    public function selectCategoria() {
        $desc_categoriaDB = $this->getDescricao();

        $sqlCommand = "SELECT *FROM categorias";
        return $sqlCommand;
    }
    public function updateCategoria() {
        $desc_categoriaDB = $this->getDescricao();

        $sqlCommand = "UPDATE categorias SET descricao = '$desc_categoriaDB' WHERE idCategoria = ''";
        return $sqlCommand;
    }
    public function deleteCategoria() {
        
        $sqlCommand = "DELETE FROM categorias WHERE idCategoria = ''";
        return $sqlCommand;
    }
}
?>