<?php
include_once "DBConn.class.php";
$DBConn = new DBConn();
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
   
   function __construct($nome, $cpf_cnpj, $tipoPessoa, $endereco, $bairro, $cidade, $uf, $cep, $telefone, $email, $logo) {
    $this->setNome($nome);
    $this->setCpf_cnpj($cpf_cnpj);
    $this->setTipoPessoa($tipoPessoa);
    $this->setEndereco($endereco);
    $this->setBairro($bairro);
    $this->setCidade($cidade);
    $this->setUf($uf);
    $this->setCep($cep);
    $this->setTelefone($telefone);
    $this->setEmail($email);
    $this->setLogo($logo);
    }

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

    public function insertInstitucional() {
        $nome_institucionalDB = $this->getNome();
        $cpf_cnpjDB = $this->getCpf_cnpj();
        $tipo_PessoaDB = $this->getTipoPessoa();
        $enderecoDB = $this->getEndereco();
        $bairroDB = $this->getBairro();
        $cidadeDB = $this->getCidade();
        $ufDB = $this->getUf();
        $cepDB = $this->getCep();
        $telefoneDB = $this->getTelefone();
        $emailDB = $this->getEmail();
        $logoDB = $this->getLogo();

        $sqlCommand = "INSERT INTO institucional (nome, cpf_cnpj, tipoPessoa, endereco, bairro, cidade, uf, cep, telefone, email, logo) values ('$nome_institucionalDB', '$cpf_cnpjDB', '$tipo_PessoaDB', '$enderecoDB', '$bairroDB', '$cidadeDB', '$ufDB', '$cepDB', '$telefoneDB', '$emailDB', '$logoDB');";
        return $sqlCommand;
    }
    public function selectInstitucional() {
        $id_institucionalDB = $this->getIdInstitucional();
    
        $sqlCommand = "SELECT *FROM institucional WHERE idInstituicao = '$id_institucionalDB';";
        return $sqlCommand;
    }
    public function updateInstitucional() {
        $id_institucionalDB = $this->getIdInstitucional();
        $nome_institucionalDB = $this->getNome();
        $cpf_cnpjDB = $this->getCpf_cnpj();
        $tipo_PessoaDB = $this->getTipoPessoa();
        $enderecoDB = $this->getEndereco();
        $bairroDB = $this->getBairro();
        $cidadeDB = $this->getCidade();
        $ufDB = $this->getUf();
        $cepDB = $this->getCep();
        $telefoneDB = $this->getTelefone();
        $emailDB = $this->getEmail();
        $logoDB = $this->getLogo();

        $sqlCommand = "UPDATE institucional SET nome = '$nome_institucionalDB', cpf_cnpj = '$cpf_cnpjDB', tipoPessoa = '$tipo_PessoaDB', endereco = '$enderecoDB', bairro = '$bairroDB', cidade = '$cidadeDB', uf = '$ufDB', cep = '$cepDB', telefone = '$telefoneDB', email = '$emailDB', logo = '$logoDB' WHERE idInstituicao = '$id_institucionalDB';";
        return $sqlCommand;
    }
    public function deleteInstitucional() {
        $id_institucionalDB = $this->getIdInstitucional();
        
        $sqlCommand = "DELETE FROM institucional WHERE idInstituicao = '$id_institucionalDB';";
        return $sqlCommand;
    }
}
?>