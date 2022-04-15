<?php
include_once "DBConn.class.php";
$DBConn = new DBConn();
class ItemsPedido {
    private $idItemPedido;
    private $ordem;
    private $idPedido;
    private $idEstoque;
    private $qtdItem;
    private $dtDevolucao;
    private $motivoDevolucao;

    function __construct($ordem, $idPedido, $idEstoque, $qtdItem, $dtDevolucao, $motivoDevolucao) {
        $this->setOrdem($ordem);
        $this->setIdPedido($idPedido);
        $this->setIdEstoque($idEstoque);
        $this->setQtdItem($qtdItem);
        $this->setDtDevolucao($dtDevolucao);
        $this->setMotivoDevolucao($motivoDevolucao);
    }

    public function getIdItemPedido(){
        return $this->idItemPedido;
    }

    public function setIdItemPedido($idItemPedido){
        $this->idItemPedido = $idItemPedido;
        return $this;
    }

    public function getOrdem(){
        return $this->ordem;
    }

    public function setOrdem($ordem){
        $this->ordem = $ordem;
        return $this;
    }

    public function getIdPedido(){
        return $this->idPedido;
    }

    public function setIdPedido($idPedido){
        $this->idPedido = $idPedido;
        return $this;
    }

    public function getIdEstoque(){
        return $this->idEstoque;
    }

    public function setIdEstoque($idEstoque){
        $this->idEstoque = $idEstoque;
        return $this;
    }

    public function getQtdItem(){
        return $this->qtdItem;
    }

    public function setQtdItem($qtdItem){
        $this->qtdItem = $qtdItem;
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

    public function insertItemsPedido() {
        $ordemDB = $this->getOrdem();
        $id_pedidoDB = $this->getIdPedido();
        $id_estoqueDB = $this->getIdEstoque();
        $qtd_itemDB = $this->getQtdItem();
        $dt_devolucaoDB = $this->getDtDevolucao();
        $motivo_devolucaoDB = $this->getMotivoDevolucao();

        $sqlCommand = "INSERT INTO itemsPedido (ordem, idPedido, idEstoque, qtdItem, dtDevolucao, motivoDevolucao) values ('$ordemDB', '$id_pedidoDB', '$id_estoqueDB', '$qtd_itemDB', '$dt_devolucaoDB', '$motivo_devolucaoDB');";
        return $sqlCommand;
    }
    public function selectItemsPedido() {
        $id_itemspedidoDB = $this->getIdItemPedido();

        $sqlCommand = "SELECT *FROM itemsPedido WHERE idItemPedido = '$id_itemspedidoDB';";
        return $sqlCommand;
    }
    public function updateItemsPedido() {
        $id_itemspedidoDB = $this->getIdItemPedido();
        $ordemDB = $this->getOrdem();
        $id_pedidoDB = $this->getIdPedido();
        $id_estoqueDB = $this->getIdEstoque();
        $qtd_itemDB = $this->getQtdItem();
        $dt_devolucaoDB = $this->getDtDevolucao();
        $motivo_devolucaoDB = $this->getMotivoDevolucao();

        $sqlCommand = "UPDATE itemsPedido SET ordem = '$ordemDB', idPedido = '$id_pedidoDB', idEstoque = '$id_estoqueDB', qtdItem = '$qtd_itemDB', dtDevolucao = '$dt_devolucaoDB', motivoDevolucao = '$motivo_devolucaoDB' WHERE idItemPedido = '$id_itemspedidoDB';";
        return $sqlCommand;
    }
    public function deleteItemsPedido() {
        $id_itemspedidoDB = $this->getIdItemPedido();
        
        $sqlCommand = "DELETE FROM itemsPedido WHERE idItemPedido = '$id_itemspedidoDB';";
        return $sqlCommand;
    }

}
?>