<html>
<!-- jQuery e CSS Bootstrap 5 -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="shortcut icon" type="imagex/png" href="../assets/img/logo.png">
<style>
@import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');
body {
    font-family: 'Josefin Sans', sans-serif;
}
#bttn_voltar {
    transition: 0.5s;
}
    
#bttn_voltar:hover {
    transform: scale(0.9);
}
</style>
</html>
<?php
if ($_REQUEST) {
$id_usuario= $_REQUEST['id_usuario'];
$dt_pedido = $_REQUEST['dt_pedido'];
$dt_pagamento = $_REQUEST['dt_pagamento'];
$dt_nota_fiscal = $_REQUEST['dt_nota_fiscal'];
$nota_fiscal = $_REQUEST['nota_fiscal'];
$dt_envio = $_REQUEST['dt_envio'];
$dt_recebimento = $_REQUEST['dt_recebimento'];
$tipo_frete = $_REQUEST['tipo_frete'];
$rastreio_frete = $_REQUEST['rastreio_frete'];
$entrega_endereco = $_REQUEST['entrega_endereco'];
$entrega_numero = $_REQUEST['entrega_numero'];
$entrega_complemento = $_REQUEST['entrega_complemento'];
$entrega_bairro = $_REQUEST['entrega_bairro'];
$entrega_cidade = $_REQUEST['entrega_cidade'];
$entrega_uf = $_REQUEST['entrega_uf'];
$entrega_cep = $_REQUEST['entrega_cep'];
$entrega_telefone = $_REQUEST['entrega_telefone'];
$entrega_referencia = $_REQUEST['entrega_referencia'];
$valor_total = $_REQUEST['valor_total'];
$qt_item = $_REQUEST['qt_item'];
$dt_devolucao = $_REQUEST['dt_devolucao'];
$motivo_devolucao = $_REQUEST['motivo_devolucao'];

include_once "../Classes/Pedidos.class.php";
$pedido = new Pedidos("$id_usuario", "$dt_pedido", "$dt_pagamento", "$dt_nota_fiscal", "$nota_fiscal", "$dt_envio", "$dt_recebimento", "$tipo_frete", "$rastreio_frete", "$entrega_endereco", "$entrega_numero", "$entrega_complemento", "$entrega_bairro", "$entrega_cidade", "$entrega_uf", "$entrega_cep", "$entrega_telefone", "$entrega_referencia", "$valor_total", "$qt_item", "$dt_devolucao", "$motivo_devolucao");

//Inserção no Banco de dados
$resultSet  = $DBConn->query($pedido->insertPedidos());

if (!$resultSet) {
echo "<center><br><br><div class='alert alert-danger' style='width: 50%;' role='alert'>Não foi possível fazer o registro, tente novamente.</div>
<button style='background-color: #cc0000;' id='bttn_voltar' onclick='voltar()' class='btn btn-primary'>Voltar</button>
</center>
";
}
else {
echo "<center><br><br><div class='alert alert-success' style='width: 50%;' role='alert'>Registro feito com sucesso!</div>
<button style='background-color: #cc0000;' id='bttn_voltar' onclick='voltar()' class='btn btn-primary'>Voltar</button>
<center>
";

}
}
else {
    echo "<center><br><br><div class='alert alert-danger' style='width: 50%;' role='alert'>Nenhuma requisição foi feita!</div>
    <button style='background-color: #cc0000;' id='bttn_voltar' onclick='voltar()' class='btn btn-primary'>Voltar</button>
    <center>";
}
?>

<script>
    function voltar() {
        window.location = "pedidos.html";
    }
</script>