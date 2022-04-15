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
        $id_nivelusuarioDB = $this->getIdNivelUsuario();

        $sqlCommand = "SELECT *FROM nivelUsuarios WHERE idNivelUsuario = '$id_nivelusuarioDB';";
        return $sqlCommand;
    }
    public function updateNivelUsuario() {
        $id_nivelusuarioDB = $this->getIdNivelUsuario();
        $nivel_usuarioDB = $this->getNivel();

        $sqlCommand = "UPDATE nivelUsuarios SET nivel = '$nivel_usuarioDB' WHERE idNivelUsuario = '$id_nivelusuarioDB';";
        return $sqlCommand;
    }
    public function deleteNivelUsuario() {
        $id_nivelusuarioDB = $this->getIdNivelUsuario();

        $sqlCommand = "DELETE FROM nivelUsuarios WHERE idNivelUsuario = '$id_nivelusuarioDB';";
        return $sqlCommand;
    }
}
?>