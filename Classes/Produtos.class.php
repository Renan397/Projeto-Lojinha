<?php
include_once "DBConn.class.php";
$DBConn = new DBConn();
class Produtos {
    private $idProduto;
    private $fabricante;
    private $nome;
    private $marca;
    private $modelo;
    private $idCategoria;
    private $descricao;
    private $unidadeMedida;
    private $largura;
    private $altura;
    private $profundidade;
    private $peso;
    private $cor;
    
    function __construct($fabricante, $nome, $marca, $modelo, $idCategoria, $descricao, $unidadeMedida, $largura, $altura, $profundidade, $peso, $cor) {
        $this->setFabricante($fabricante);
        $this->setNome($nome);
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setIdCategoria($idCategoria);
        $this->setDescricao($descricao);
        $this->setUnidadeMedida($unidadeMedida);
        $this->setLargura($largura);
        $this->setAltura($altura);
        $this->setProfundidade($profundidade);
        $this->setPeso($peso);
        $this->setCor($cor);
    }

    public function getIdProduto(){
        return $this->idProduto;
    }

    public function setIdProduto($idProduto){
        $this->idProduto = $idProduto;
        return $this;
    }

    public function getFabricante(){
        return $this->fabricante;
    }

    public function setFabricante($fabricante){
        $this->fabricante = $fabricante;
        return $this;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
        return $this;
    }

    public function getMarca(){
        return $this->marca;
    }

    public function setMarca($marca){
        $this->marca = $marca;
        return $this;
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;
        return $this;
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

    public function getUnidadeMedida(){
        return $this->unidadeMedida;
    }

    public function setUnidadeMedida($unidadeMedida){
        $this->unidadeMedida = $unidadeMedida;
        return $this;
    }

    public function getLargura(){
        return $this->largura;
    }

    public function setLargura($largura){
        $this->largura = $largura;
        return $this;
    }

    public function getAltura(){
        return $this->altura;
    }

    public function setAltura($altura){
        $this->altura = $altura;
        return $this;
    }

    public function getProfundidade(){
        return $this->profundidade;
    }

    public function setProfundidade($profundidade){
        $this->profundidade = $profundidade;
        return $this;
    }

    public function getPeso(){
        return $this->peso;
    }

    public function setPeso($peso){
        $this->peso = $peso;
        return $this;
    }

    public function getCor(){
        return $this->cor;
    }

    public function setCor($cor){
        $this->cor = $cor;
        return $this;
    }

    public function insertProdutos() {
        $fabricanteDB = $this->getFabricante();
        $nomeDB = $this->getNome();
        $marcaDB = $this->getMarca();
        $modeloDB = $this->getModelo();
        $id_categoriaDB = $this->getIdCategoria();
        $desc_produtoDB = $this->getDescricao();
        $uni_medidaDB = $this->getUnidadeMedida();
        $larguraDB = $this->getLargura();
        $alturaDB = $this->getAltura();
        $profundidadeDB = $this->getProfundidade();
        $pesoDB = $this->getPeso();
        $corDB = $this->getCor();

        $sqlCommand = "INSERT INTO produtos (fabricante, nome, marca, modelo, idCategoria, descricao, unidadeMedida, largura, altura, profundidade, peso, cor) values ('$fabricanteDB', '$nomeDB', '$marcaDB', '$modeloDB', '$id_categoriaDB', '$desc_produtoDB', '$uni_medidaDB', '$larguraDB', '$alturaDB', '$profundidadeDB', '$pesoDB', '$corDB');";
        return $sqlCommand;
    }
    public function selectProdutos() {
        $id_produtoDB = $this->getIdProduto();

        $sqlCommand = "SELECT *FROM produtos WHERE idProduto = '$id_produtoDB';";
        return $sqlCommand;
    }
    public function updateProdutos() {
        $id_produtoDB = $this->getIdProduto();
        $fabricanteDB = $this->getFabricante();
        $nomeDB = $this->getNome();
        $marcaDB = $this->getMarca();
        $modeloDB = $this->getModelo();
        $id_categoriaDB = $this->getIdCategoria();
        $desc_produtoDB = $this->getDescricao();
        $uni_medidaDB = $this->getUnidadeMedida();
        $larguraDB = $this->getLargura();
        $alturaDB = $this->getAltura();
        $profundidadeDB = $this->getProfundidade();
        $pesoDB = $this->getPeso();
        $corDB = $this->getCor();

        $sqlCommand = "UPDATE produtos SET fabricante = '$fabricanteDB', nome = '$nomeDB', marca = '$marcaDB', modelo = '$modeloDB', idCategoria = '$id_categoriaDB', descricao = '$desc_produtoDB', unidadeMedida = '$uni_medidaDB', largura = '$larguraDB', altura = '$alturaDB', profundidade = '$profundidadeDB', peso = '$pesoDB', cor = '$corDB' WHERE idProduto = '$id_produtoDB';";
        return $sqlCommand;
    }
    public function deleteProdutos() {
        $id_produtoDB = $this->getIdProduto();

        $sqlCommand = "DELETE FROM produtos WHERE idProduto = '$id_produtoDB';";
        return $sqlCommand;
    }
}

?>