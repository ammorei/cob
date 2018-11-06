<?php
include_once("inc/header.php");
include_once("inc/config.php");

    $data_cob = $_POST['data_cob'];
    $matricula = $_POST['matricula'];
    $parcela = $_POST['parcela'];
    $mes_cob = $_POST['mes_cob'];
    $nome_aluno = $_POST['nome_aluno'];
    $nome_contato = $_POST['nome_contato'];
    $tel_financeiro1 = $_POST['tel_financeiro1'];
    $tel_financeiro2 = $_POST['tel_financeiro2'];
    $tel_pai1 = $_POST['tel_pai1'];
    $tel_pai2 = $_POST['tel_pai2'];
    $tel_mae1 = $_POST['tel_mae1'];
    $tel_mae2 = $_POST['tel_mae2'];
    $tel_fixo = $_POST['tel_fixo'];
    $email = $_POST['email'];
    $outros_motivos = $_POST['outros_motivos'];
    $pagamento = $_POST['pagamento'];
    $sucesso = $_POST['sucesso'];
    $motivo = $_POST['motivo'];
    $obs = $_POST['obs'];

if (!$mysqli) {
 die('Não foi possível conectar ao Banco de Dados');
}
$sql = "INSERT INTO cobranca VALUES ";
$sql .= "('$data_cob','$matricula','$parcela','$mes_cob','$nome_aluno','$nome_contato','$tel_financeiro1','$tel_financeiro2','$tel_pai1','$tel_pai2','$tel_mae1','$tel_mae2','$tel_fixo','$email','$outros_motivos','$pagamento','$sucesso','$motivo','$obs')"; 
mysqli_query($mysqli,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($mysqli);

echo "<div class='alert alert-success' role='alert'>";
echo "Cliente cadastrado com SUCESSO!";
echo "</div>";
echo "<br>";
echo "<a href='cadastro.php'><button type='button' class='btn btn-primary'>Novo Cadastro</button></a>";
echo "<a href='index.php'><button type='button' class='btn btn-secondary'>Novo Cadastro</button></a>";


include_once("inc/footer.php");
?>
