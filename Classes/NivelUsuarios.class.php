<?php
class NivelUsuarios {
    private $idNivelUsuario;
    private $nivel;   

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

}
?>