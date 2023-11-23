<!doctype html>
<?php
// Verifica se os dados foram recebidos via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 
  // Configura as variáveis de sessão, se necessário
  $_SESSION['usuario'] = $_POST['usuario'];
  $_SESSION['nomeusuario'] = $_POST['nomeusuario'];
} else {
  $usuario = $_POST['usuario'];
  header("Location: login.php?erro=$usuario");
  exit;
}
require_once 'menu.php';
require "..\processadores\Autenticacao.php";


require_once('../processadores/conexao.php');
require_once('../Modelo/produto.php');
require_once('../Repositorio/ProdutoRepositorio.php');

$produtoRepositorio = new ProdutoRepositorio($conn);
$produtos = $produtoRepositorio->buscarTodos();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>FLORICULTURA</title>
</head>
<body>
    <header class="cbl">  
    <nav id="navbar" class="navbar order-last order-lg-0">
      <div class="container">
        <ul>
          <li><a href="index.php">home</a></li>
          <li><a href="login.php">login</a></li>
          <li><a href="cadastro.php">cadastro</a></li>
          <li><a href="#">admin</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </div>