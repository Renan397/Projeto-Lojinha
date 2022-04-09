<?php
include_once "DBConn.class.php";
$DBConn = new DBConn();
class NivelUsuarios {
    private $idNivelUsuario;
    private $nivel;   

    public function __construct($nivel){
        $this->setNivel($nivel);
    }

    public function getIdNivelUsuario(){
        return $this->idNivelUsuario;
    }

    public function setIdNivelUsuario($idNivelUsuario){
        $this->idNivelUsuario = $idNivelUsuario;
        return $this;
    }

    public function getNivel(){
        return $this->nivel;
    }

    public function setNivel($nivel){
        $this->nivel = $nivel;
        return $this;
    }

    public function insertNivelUsuario() {
        $nivel_usuarioDB = $this->getNivel();

        $sqlCommand = "INSERT INTO nivelUsuarios (nivel) values ('$nivel_usuarioDB');";
        return $sqlCommand;
    }
    public function selectNivelUsuario() {
    
        $sqlCommand = "SELECT *FROM nivelUsuarios;";
        return $sqlCommand;
    }
    public function updateNivelUsuario() {
        $nivel_usuarioDB = $this->getNivel();

        $sqlCommand = "UPDATE nivelUsuarios SET nivel = '$nivel_usuarioDB' WHERE idNivelUsuario = '';";
        return $sqlCommand;
    }
    public function deleteNivelUsuario() {

        $sqlCommand = "DELETE FROM nivelUsuarios WHERE idNivelUsuario = '';";
        return $sqlCommand;
    }
}
?>