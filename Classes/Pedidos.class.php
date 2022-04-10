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
    
    public function __construct($idUsuario, $dtPedido, $dtPagamento, $dtNotaFiscal, $notaFiscal, $dtEnvio, $dtRecebimento, $tipoFrete, $rastreioFrete, $entregaendereco, $entregaNumero, $entregaCompl, $entregaBairro, $entregaCidade, $entregaUF, $entregaCEP, $entregaTelefone, $entregaRefer, $valorTotal, $qtdItems, $dtDevolucao, $motivoDevolucao) {
        $this->setIdUsuario($idUsuario);
        $this->setDtPedido($dtPedido);
        $this->setDtPagamento($dtPagamento);
        $this->setDtNotaFiscal($dtNotaFiscal);
        $this->setNotaFiscal($notaFiscal);
        $this->setDtEnvio($dtEnvio);
        $this->setDtRecebimento($dtRecebimento);
        $this->setTipoFrete($tipoFrete);
        $this->setRastreioFrete($rastreioFrete);
        $this->setEntregaendereco($entregaendereco);
        $this->setEntregaNumero($entregaNumero);
        $this->setEntregaCompl($entregaCompl);
        $this->setEntregaBairro($entregaBairro);
        $this->setEntregaCidade($entregaCidade);
        $this->setEntregaUF($entregaUF);
        $this->setEntregaCEP($entregaCEP);
        $this->setEntregaTelefone($entregaTelefone);
        $this->setEntregaRefer($entregaRefer);
        $this->setValorTotal($valorTotal);
        $this->setQtdItems($qtdItems);
        $this->setDtDevolucao($dtDevolucao);
        $this->setMotivoDevolucao($motivoDevolucao);
    }

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

    public function insertPedidos() {
        $id_usuarioDB = $this->getIdUsuario();
        $dt_pedidoDB = $this->getDtPedido();
        $dt_pagamentoDB = $this->getDtPagamento();
        $dt_nota_fiscalDB = $this->getDtNotaFiscal();
        $nota_fiscalDB = $this->getNotaFiscal();
        $dt_envioDB = $this->getDtEnvio();
        $dt_recebimentoDB = $this->getDtRecebimento();
        $tipo_freteDB = $this->getTipoFrete();
        $rastreio_freteDB = $this->getRastreioFrete();
        $entrega_enderecoDB = $this->getEntregaendereco();
        $entrega_numeroDB = $this->getEntregaNumero();
        $entrega_complDB = $this->getEntregaCompl();
        $entrega_bairroDB = $this->getEntregaBairro();
        $entrega_cidadeDB = $this->getEntregaCidade();
        $entrega_ufDB = $this->getEntregaUF();
        $entrega_cepDB = $this->getEntregaCEP();
        $entrega_telefoneDB = $this->getEntregaTelefone();
        $entrega_referenciaDB = $this->getEntregaRefer();
        $valor_totalDB = $this->getValorTotal();
        $qtd_itemsDB = $this->getQtdItems();
        $dt_devolucaoDB = $this->getDtDevolucao();
        $motivo_devolucaoDB = $this->getMotivoDevolucao();

        $sqlCommand = "INSERT INTO pedidos (idUsuario, dtPedido, dtPagamento, dtNotaFiscal, notaFiscal, dtEnvio, dtRecebimento, tipoFrete, rastreioFrete, entregaendereco, entregaNumero, entregaCompl, entregaBairro, entregaCidade, entregaUF, entregaCEP, entregaTelefone, entregaRefer, valorTotal, qtdItems, dtDevolucao, motivoDevolucao) values ('$id_usuarioDB', '$dt_pedidoDB', '$dt_pagamentoDB', '$dt_nota_fiscalDB', '$nota_fiscalDB', '$dt_envioDB', '$dt_recebimentoDB', '$tipo_freteDB', '$rastreio_freteDB', '$entrega_enderecoDB', '$entrega_numeroDB', '$entrega_complDB', '$entrega_bairroDB', '$entrega_cidadeDB', '$entrega_ufDB', '$entrega_cepDB', '$entrega_telefoneDB', '$entrega_referenciaDB', '$valor_totalDB', '$qtd_itemsDB', '$dt_devolucaoDB', '$motivo_devolucaoDB');";
        return $sqlCommand;
    }
    public function selectPedidos() {
    
        $sqlCommand = "SELECT *FROM pedidos;";
        return $sqlCommand;
    }
    public function updatePedidos() {
        $id_usuarioDB = $this->getIdUsuario();
        $dt_pedidoDB = $this->getDtPedido();
        $dt_pagamentoDB = $this->getDtPagamento();
        $dt_nota_fiscalDB = $this->getDtNotaFiscal();
        $nota_fiscalDB = $this->getNotaFiscal();
        $dt_envioDB = $this->getDtEnvio();
        $dt_recebimentoDB = $this->getDtRecebimento();
        $tipo_freteDB = $this->getTipoFrete();
        $rastreio_freteDB = $this->getRastreioFrete();
        $entrega_enderecoDB = $this->getEntregaendereco();
        $entrega_numeroDB = $this->getEntregaNumero();
        $entrega_complDB = $this->getEntregaCompl();
        $entrega_bairroDB = $this->getEntregaBairro();
        $entrega_cidadeDB = $this->getEntregaCidade();
        $entrega_ufDB = $this->getEntregaUF();
        $entrega_cepDB = $this->getEntregaCEP();
        $entrega_telefoneDB = $this->getEntregaTelefone();
        $entrega_referenciaDB = $this->getEntregaRefer();
        $valor_totalDB = $this->getValorTotal();
        $qtd_itemsDB = $this->getQtdItems();
        $dt_devolucaoDB = $this->getDtDevolucao();
        $motivo_devolucaoDB = $this->getMotivoDevolucao();

        $sqlCommand = "UPDATE pedidos SET idUsuario = '$id_usuarioDB', dtPedido = '$dt_pedidoDB', dtPagamento = '$dt_pagamentoDB', dtNotaFiscal = '$dt_nota_fiscalDB', notaFiscal = '$nota_fiscalDB', dtEnvio = '$dt_envioDB', dtRecebimento = '$dt_recebimentoDB', tipoFrete = '$tipo_freteDB', rastreioFrete = '$rastreio_freteDB', entregaendereco = '$entrega_enderecoDB', entregaNumero = '$entrega_numeroDB', entregaCompl = '$entrega_complDB', entregaBairro = '$entrega_bairroDB', entregaCidade = '$entrega_cidadeDB', entregaUF = '$entrega_ufDB', entregaCEP = '$entrega_cepDB', entregaTelefone = '$entrega_telefoneDB', entregaRefer = '$entrega_referenciaDB', valorTotal = '$valor_totalDB', qtdItems = '$qtd_itemsDB', dtDevolucao = '$dt_devolucaoDB', motivoDevolucao = '$motivo_devolucaoDB' WHERE idPedido = '';";
        return $sqlCommand;
    }
    public function deletePedidos() {

        $sqlCommand = "DELETE FROM pedidos WHERE idPedido = '';";
        return $sqlCommand;
    }
}

