<?php
include('protect.php');
include 'conTransp.php';

$nome_empresa = trim($_POST['txtEmpresa']);
$origem = trim($_POST['txtOrigem']);
$destino = trim($_POST['txtDestino']);
$data_postagem = trim($_POST['txtPostagem']);
$valor = trim($_POST['txtValor']);
$data_entrega = trim($_POST['txtEntrega']);
$peso = trim($_POST['txtPeso']);
$tipo_veiculo = trim($_POST['txtVeiculo']);
$tipo_carga = trim($_POST['txtCarga']);

if(!empty($nome_empresa) && !empty($origem) && !empty($destino) && !empty($data_postagem) && !empty($valor) && !empty($data_entrega) && !empty($peso) && !empty($tipo_veiculo) && !empty($tipo_carga)){
    $sql = "INSERT INTO empregador (nome_empresa, origem, destino, data_postagem, valor, data_entrega, peso, tipo_veiculo, tipo_carga) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $pdo = ConTransp::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = $pdo->prepare($sql);
    $query->execute(array($nome_empresa, $origem, $destino, $data_postagem, $valor, $data_entrega, $peso, $tipo_veiculo, $tipo_carga));
    ConTransp::desconectar();
}

header("location:lstCarga.php");

?>