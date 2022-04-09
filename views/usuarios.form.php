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
$usuario_email = $_REQUEST['usuario_email'];
$usuario_pass = $_REQUEST['usuario_pass'];
$usuario_idnivel = $_REQUEST['usuario_idnivel'];
$usuario_nome = $_REQUEST['usuario_nome'];
$usuario_cpf = $_REQUEST['usuario_cpf'];
$usuario_endereco = $_REQUEST['usuario_endereco'];
$usuario_bairro = $_REQUEST['usuario_bairro'];
$usuario_cidade = $_REQUEST['usuario_cidade'];
$usuario_uf = $_REQUEST['usuario_uf'];
$usuario_cep = $_REQUEST['usuario_cep'];
$usuario_tel = $_REQUEST['usuario_tel'];
$usuario_foto = $_REQUEST['usuario_foto'];

include_once "../Classes/Usuarios.class.php";
$produto = new Usuarios("$usuario_email", "$usuario_pass", "$usuario_idnivel", "$usuario_nome", "$usuario_cpf", "$usuario_endereco", "$usuario_bairro", "$usuario_cidade", "$usuario_uf", "$usuario_cep", "$usuario_tel", "$usuario_foto");

//Inserção no Banco de dados
$resultSet  = $DBConn->query($produto->insertUsuarios());

if (!$resultSet) {
echo "<center><br><br><div class='alert alert-danger' style='width: 50%;' role='alert'>Não foi possível fazer o registro, tente novamente.</div>
<button style='background-color: #3CB371;' id='bttn_voltar' onclick='voltar()' class='btn btn-primary'>Voltar</button>
</center>
";
}
else {
echo "<center><br><br><div class='alert alert-success' style='width: 50%;' role='alert'>Registro feito com sucesso!</div>
<button style='background-color: #3CB371;' id='bttn_voltar' onclick='voltar()' class='btn btn-primary'>Voltar</button>
<center>
";

}
}
else {
    echo "<center><br><br><div class='alert alert-danger' style='width: 50%;' role='alert'>Nenhuma requisição foi feita!</div>
    <button style='background-color: #3CB371;' id='bttn_voltar' onclick='voltar()' class='btn btn-primary'>Voltar</button>
    <center>";
}
?>

<script>
    function voltar() {
        window.location = "usuarios.html";
    }
</script>