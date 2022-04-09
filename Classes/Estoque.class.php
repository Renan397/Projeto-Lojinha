<?php
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

}

?>