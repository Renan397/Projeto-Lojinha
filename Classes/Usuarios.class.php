<?php
include_once "DBConn.class.php";
$DBConn = new DBConn();
class Usuarios {
    private $idUsuario;
    private $email;
    private $senha;
    private $idNivelUsuario;
    private $nome;
    private $cpf;
    private $endereco;
    private $bairro;
    private $cidade;
    private $uf;
    private $cep;
    private $telefone;
    private $foto;
    private $ativo;

    public function __construct($email, $senha, $idNivelUsuario, $nome, $cpf, $endereco, $bairro, $cidade, $uf, $cep, $telefone, $foto) {
        $this->setEmail($email);
        $this->setSenha($senha);
        $this->setIdNivelUsuario($idNivelUsuario);
        $this->setNome($nome);
        $this->setCpf($cpf);
        $this->setEndereco($endereco);
        $this->setBairro($bairro);
        $this->setCidade($cidade);
        $this->setUf($uf);
        $this->setCep($cep);
        $this->setTelefone($telefone);
        $this->setFoto($foto);
    }

    public function getIdUsuario(){
        return $this->idUsuario;
    }

    public function setIdUsuario($idUsuario){
        $this->idUsuario = $idUsuario;
        return $this;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
        return $this;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($senha){
        $this->senha = $senha;
        return $this;
    }

    public function getIdNivelUsuario(){
        return $this->idNivelUsuario;
    }

    public function setIdNivelUsuario($idNivelUsuario){
        $this->idNivelUsuario = $idNivelUsuario;
        return $this;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
        return $this;
    }

    public function getCpf(){
        return $this->cpf;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;
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

    public function getFoto(){
        return $this->foto;
    }

    public function setFoto($foto){
        $this->foto = $foto;
        return $this;
    }

    public function getAtivo(){
        return $this->ativo;
    }

    public function setAtivo($ativo){
        $this->ativo = $ativo;
        return $this;
    }

    public function insertUsuarios() {
        $emailDB = $this->getEmail();
        $senhaDB = $this->getSenha();
        $usuario_idnivelDB = $this->getIdNivelUsuario();
        $nomeDB = $this->getNome();
        $cpfDB = $this->getCpf();
        $enderecoDB = $this->getEndereco();
        $bairroDB = $this->getBairro();
        $cidadeDB = $this->getCidade();
        $ufDB = $this->getUf();
        $cepDB = $this->getCep();
        $telefoneDB = $this->getTelefone();
        $fotoDB = $this->getFoto();

        $sqlCommand = "INSERT INTO usuarios (email, senha, idNivelUsuario, nome, cpf, endereco, bairro, cidade, uf, cep, telefone, foto) values ('$emailDB', '$senhaDB', '$usuario_idnivelDB', '$nomeDB', '$cpfDB', '$enderecoDB', '$bairroDB', '$cidadeDB', '$ufDB', '$cepDB', '$telefoneDB', '$fotoDB');";
        return $sqlCommand;
    }
    public function selectUsuarios() {
    
        $sqlCommand = "SELECT *FROM usuarios;";
        return $sqlCommand;
    }
    public function updateUsuarios() {
        $emailDB = $this->getEmail();
        $senhaDB = $this->getSenha();
        $usuario_idnivelDB = $this->getIdNivelUsuario();
        $nomeDB = $this->getNome();
        $cpfDB = $this->getCpf();
        $enderecoDB = $this->getEndereco();
        $bairroDB = $this->getBairro();
        $cidadeDB = $this->getCidade();
        $ufDB = $this->getUf();
        $cepDB = $this->getCep();
        $telefoneDB = $this->getTelefone();
        $fotoDB = $this->getFoto();

        $sqlCommand = "UPDATE usuarios SET email = '$emailDB', senha = '$senhaDB', idNivelUsuario = '$usuario_idnivelDB', nome = '$nomeDB', cpf = '$cpfDB', endereco = '$enderecoDB', bairro = '$bairroDB', cidade = '$cidadeDB', uf = '$ufDB', cep = '$cepDB', telefone = '$telefoneDB', foto = '$fotoDB' WHERE idUsuario = '';";
        return $sqlCommand;
    }
    public function deleteUsuarios() {

        $sqlCommand = "DELETE FROM usuarios WHERE idUsuario = '';";
        return $sqlCommand;
    }
}
?>