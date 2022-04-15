<?php
include_once "DBConn.class.php";
$DBConn = new DBConn();
class Estoque {
    private $idEstoque;
    private $idProduto;
    private $dtEntrada;
    private $quantidade;
    private $dtFabricacao;
    private $dtVencimento;
    private $nfCompra;
    private $precoCompra;
    private $icmsCompra;
    private $precoVenda;
    private $qtdVendida;
    private $qtdOcorrencia;
    private $ocorrencia;
    
    function __construct($idProduto, $dtEntrada, $quantidade, $dtFabricacao, $dtVencimento, $nfCompra, $precoCompra, $icmsCompra, $precoVenda, $qtdVendida, $qtdOcorrencia, $ocorrencia) {
        $this->setIdProduto($idProduto);
        $this->setDtEntrada($dtEntrada);
        $this->setQuantidade($quantidade);
        $this->setDtFabricacao($dtFabricacao);
        $this->setDtVencimento($dtVencimento);
        $this->setNfCompra($nfCompra);
        $this->setPrecoCompra($precoCompra);
        $this->setIcmsCompra($icmsCompra);
        $this->setPrecoVenda($precoVenda);
        $this->setQtdVendida($qtdVendida);
        $this->setQtdOcorrencia($qtdOcorrencia);
        $this->setOcorrencia($ocorrencia);
    }

    public function getIdEstoque(){
        return $this->idEstoque;
    }

    public function setIdEstoque($idEstoque){
        $this->idEstoque = $idEstoque;
        return $this;
    }

    public function getIdProduto(){
        return $this->idProduto;
    }

    public function setIdProduto($idProduto){
        $this->idProduto = $idProduto;
        return $this;
    }

    public function getDtEntrada(){
        return $this->dtEntrada;
    }

    public function setDtEntrada($dtEntrada){
        $this->dtEntrada = $dtEntrada;
        return $this;
    }

    public function getQuantidade(){
        return $this->quantidade;
    }

    public function setQuantidade($quantidade){
        $this->quantidade = $quantidade;
        return $this;
    }

    public function getDtFabricacao(){
        return $this->dtFabricacao;
    }

    public function setDtFabricacao($dtFabricacao){
        $this->dtFabricacao = $dtFabricacao;
        return $this;
    }

    public function getDtVencimento(){
        return $this->dtVencimento;
    }

    public function setDtVencimento($dtVencimento){
        $this->dtVencimento = $dtVencimento;
        return $this;
    }

    public function getNfCompra(){
        return $this->nfCompra;
    }

    public function setNfCompra($nfCompra){
        $this->nfCompra = $nfCompra;
        return $this;
    }

    public function getPrecoCompra(){
        return $this->precoCompra;
    }

    public function setPrecoCompra($precoCompra){
        $this->precoCompra = $precoCompra;
        return $this;
    }

    public function getIcmsCompra(){
        return $this->icmsCompra;
    }

    public function setIcmsCompra($icmsCompra){
        $this->icmsCompra = $icmsCompra;
        return $this;
    }

    public function getPrecoVenda(){
        return $this->precoVenda;
    }

    public function setPrecoVenda($precoVenda){
        $this->precoVenda = $precoVenda;
        return $this;
    }

    public function getQtdVendida(){
        return $this->qtdVendida;
    }

    public function setQtdVendida($qtdVendida){
        $this->qtdVendida = $qtdVendida;
        return $this;
    }

    public function getQtdOcorrencia(){
        return $this->qtdOcorrencia;
    }

    public function setQtdOcorrencia($qtdOcorrencia){
        $this->qtdOcorrencia = $qtdOcorrencia;
        return $this;
    }

    public function getOcorrencia(){
        return $this->ocorrencia;
    }

    public function setOcorrencia($ocorrencia){
        $this->ocorrencia = $ocorrencia;
        return $this;
    }

    public function insertEstoque() {
        $id_produtoDB = $this->getIdProduto();
        $dt_entradaDB = $this->getDtEntrada();
        $qtd_produtoDB = $this->getQuantidade();
        $dt_fabricacaoDB = $this->getDtFabricacao();
        $dt_vencimentoDB = $this->getDtVencimento();
        $nf_compraDB = $this->getNfCompra();
        $preco_compraDB = $this->getPrecoCompra();
        $icms_compraDB = $this->getIcmsCompra();
        $preco_vendaDB = $this->getPrecoVenda();
        $qtd_vendidaDB = $this->getQtdVendida();
        $qtd_ocorrenciaDB = $this->getQtdOcorrencia();
        $ocorrenciaDB = $this->getOcorrencia();

        $sqlCommand = "INSERT INTO estoque (idProduto, dtEntrada, quantidade, dtFabricacao, dtVencimento, nfCompra, precoCompra, icmsCompra, precoVenda, qtdVendida, qtdOcorrencia, ocorrencia) values ('$id_produtoDB', '$dt_entradaDB', '$qtd_produtoDB', '$dt_fabricacaoDB', '$dt_vencimentoDB', '$nf_compraDB', '$preco_compraDB', '$icms_compraDB', '$preco_vendaDB', '$qtd_vendidaDB', '$qtd_ocorrenciaDB', '$ocorrenciaDB');";
        return $sqlCommand;
    }
    public function selectEstoque() {
        $id_estoqueDB = $this->getIdEstoque();
    
        $sqlCommand = "SELECT *FROM estoque WHERE idEstoque = '$id_estoqueDB';";
        return $sqlCommand;
    }
    public function updateEstoque() {
        $id_estoqueDB = $this->getIdEstoque();
        $id_produtoDB = $this->getIdProduto();
        $dt_entradaDB = $this->getDtEntrada();
        $qtd_produtoDB = $this->getQuantidade();
        $dt_fabricacaoDB = $this->getDtFabricacao();
        $dt_vencimentoDB = $this->getDtVencimento();
        $nf_compraDB = $this->getNfCompra();
        $preco_compraDB = $this->getPrecoCompra();
        $icms_compraDB = $this->getIcmsCompra();
        $preco_vendaDB = $this->getPrecoVenda();
        $qtd_vendidaDB = $this->getQtdVendida();
        $qtd_ocorrenciaDB = $this->getQtdOcorrencia();
        $ocorrenciaDB = $this->getOcorrencia();

        $sqlCommand = "UPDATE estoque SET idProduto = '$id_produtoDB', dtEntrada = '$dt_entradaDB', quantidade = '$qtd_produtoDB', dtFabricacao = '$dt_fabricacaoDB', dtVencimento = '$dt_vencimentoDB', nfCompra = '$nf_compraDB', precoCompra = '$preco_compraDB', icmsCompra = '$icms_compraDB', precoVenda = '$preco_vendaDB', qtdVendida = '$qtd_vendidaDB', qtdOcorrencia = '$qtd_ocorrenciaDB', ocorrencia = '$ocorrenciaDB' WHERE idEstoque = '$id_estoqueDB';";
        return $sqlCommand;
    }
    public function deleteEstoque() {
        $id_estoqueDB = $this->getIdEstoque();

        $sqlCommand = "DELETE FROM categorias WHERE idEstoque = '$id_estoqueDB';";
        return $sqlCommand;
    }
}

?>