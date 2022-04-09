<?php
class Institucional {
   private $idInstitucional;
   private $nome;
   private $cpf_cnpj;
   private $tipoPessoa;
   private $endereco;
   private $bairro;
   private $cidade;
   private $uf;
   private $cep;
   private $telefone;
   private $email;
   private $logo;
   
    public function getIdInstitucional(){
        return $this->idInstitucional;
    }

    public function setIdInstitucional($idInstitucional){
        $this->idInstitucional = $idInstitucional;
        return $this;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
        return $this;
    }

    public function getCpf_cnpj(){
        return $this->cpf_cnpj;
    }

    public function setCpf_cnpj($cpf_cnpj){
        $this->cpf_cnpj = $cpf_cnpj;
        return $this;
    }

    public function getTipoPessoa(){
        return $this->tipoPessoa;
    }

    public function setTipoPessoa($tipoPessoa){
        $this->tipoPessoa = $tipoPessoa;
        return $this;
    }

    public function getEndereco(){
        return $this->endereco;
    }

    public function setEndereco($endereco){
        $this->endereco = $endereco;
        return $this;
    }

    public function getBairro(){
        return $this->bairro;
    }

    public function setBairro($bairro){
        $this->bairro = $bairro;
        return $this;
    }

    public function getCidade(){
        return $this->cidade;
    }

    public function setCidade($cidade){
        $this->cidade = $cidade;
        return $this;
    }

    public function getUf(){
        return $this->uf;
    }

    public function setUf($uf){
        $this->uf = $uf;
        return $this;
    }

    public function getCep(){
        return $this->cep;
    }

    public function setCep($cep){
        $this->cep = $cep;
        return $this;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
        return $this;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
        return $this;
    }

    public function getLogo(){
        return $this->logo;
    }

    public function setLogo($logo){
        $this->logo = $logo;
        return $this;
    }

}

?>