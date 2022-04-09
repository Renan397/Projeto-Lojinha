<?php
include_once "DBConn.class.php";
$DBConn = new DBConn();
class Pedidos {
    private $idPedido;
    private $idUsuario;
    private $dtPedido;
    private $dtPagamento;
    private $dtNotaFiscal;
    private $notaFiscal;
    private $dtEnvio;
    private $dtRecebimento;
    private $tipoFrete;
    private $rastreioFrete;
    private $entregaendereco;
    private $entregaNumero;
    private $entregaCompl;
    private $entregaBairro;
    private $entregaCidade;
    private $entregaUF;
    private $entregaCEP;
    private $entregaTelefone;
    private $entregaRefer;
    private $valorTotal;
    private $qtdItems;
    private $dtDevolucao;
    private $motivoDevolucao;
    
    public function getIdPedido(){
        return $this->idPedido;
    }

    public function setIdPedido($idPedido){
        $this->idPedido = $idPedido;
        return $this;
    }

    public function getIdUsuario(){
        return $this->idUsuario;
    }

    public function setIdUsuario($idUsuario){
        $this->idUsuario = $idUsuario;
        return $this;
    }

    public function getDtPedido(){
        return $this->dtPedido;
    }

    public function setDtPedido($dtPedido){
        $this->dtPedido = $dtPedido;
        return $this;
    }

    public function getDtPagamento(){
        return $this->dtPagamento;
    }

    public function setDtPagamento($dtPagamento){
        $this->dtPagamento = $dtPagamento;
        return $this;
    }

    public function getDtNotaFiscal(){
        return $this->dtNotaFiscal;
    }

    public function setDtNotaFiscal($dtNotaFiscal){
        $this->dtNotaFiscal = $dtNotaFiscal;
        return $this;
    }

    public function getNotaFiscal(){
        return $this->notaFiscal;
    }

    public function setNotaFiscal($notaFiscal){
        $this->notaFiscal = $notaFiscal;
        return $this;
    }

    public function getDtEnvio(){
        return $this->dtEnvio;
    }

    public function setDtEnvio($dtEnvio){
        $this->dtEnvio = $dtEnvio;
        return $this;
    }

    public function getDtRecebimento(){
        return $this->dtRecebimento;
    }

    public function setDtRecebimento($dtRecebimento){
        $this->dtRecebimento = $dtRecebimento;
        return $this;
    }

    public function getTipoFrete(){
        return $this->tipoFrete;
    }

    public function setTipoFrete($tipoFrete){
        $this->tipoFrete = $tipoFrete;
        return $this;
    }

    public function getRastreioFrete(){
        return $this->rastreioFrete;
    }

    public function setRastreioFrete($rastreioFrete){
        $this->rastreioFrete = $rastreioFrete;
        return $this;
    }

    public function getEntregaendereco(){
        return $this->entregaendereco;
    }

    public function setEntregaendereco($entregaendereco){
        $this->entregaendereco = $entregaendereco;
        return $this;
    }

    public function getEntregaNumero(){
        return $this->entregaNumero;
    }

    public function setEntregaNumero($entregaNumero){
        $this->entregaNumero = $entregaNumero;
        return $this;
    }

    public function getEntregaCompl(){
        return $this->entregaCompl;
    }

    public function setEntregaCompl($entregaCompl){
        $this->entregaCompl = $entregaCompl;
        return $this;
    }

    public function getEntregaBairro(){
        return $this->entregaBairro;
    }

    public function setEntregaBairro($entregaBairro){
        $this->entregaBairro = $entregaBairro;
        return $this;
    }

    public function getEntregaCidade(){
        return $this->entregaCidade;
    }

    public function setEntregaCidade($entregaCidade){
        $this->entregaCidade = $entregaCidade;
        return $this;
    }

    public function getEntregaUF(){
        return $this->entregaUF;
    }

    public function setEntregaUF($entregaUF){
        $this->entregaUF = $entregaUF;
        return $this;
    }

    public function getEntregaCEP(){
        return $this->entregaCEP;
    }

    public function setEntregaCEP($entregaCEP){
        $this->entregaCEP = $entregaCEP;
        return $this;
    }

    public function getEntregaTelefone(){
        return $this->entregaTelefone;
    }

    public function setEntregaTelefone($entregaTelefone){
        $this->entregaTelefone = $entregaTelefone;
        return $this;
    }

    public function getEntregaRefer(){
        return $this->entregaRefer;
    }

    public function setEntregaRefer($entregaRefer){
        $this->entregaRefer = $entregaRefer;
        return $this;
    }

    public function getValorTotal(){
        return $this->valorTotal;
    }

    public function setValorTotal($valorTotal){
        $this->valorTotal = $valorTotal;
        return $this;
    }

    public function getQtdItems(){
        return $this->qtdItems;
    }

    public function setQtdItems($qtdItems){
        $this->qtdItems = $qtdItems;
        return $this;
    }

    public function getDtDevolucao(){
        return $this->dtDevolucao;
    }

    public function setDtDevolucao($dtDevolucao){
        $this->dtDevolucao = $dtDevolucao;
        return $this;
    }

    public function getMotivoDevolucao(){
        return $this->motivoDevolucao;
    }

    public function setMotivoDevolucao($motivoDevolucao){
        $this->motivoDevolucao = $motivoDevolucao;
        return $this;
    }
}

