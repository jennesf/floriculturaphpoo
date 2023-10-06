<?php
require "conexao.php";
require "../Modelo\Produto.php";
require "../Repositorio\ProdutoRepositorio.php";

//if (isset($_POST['cadastro'])){ ou
    if (isset($_POST['cadastro'])){ 
    $imagem = $_POST["imagem"];
    $nome = $_POST["nome"];
    $preco = $_POST["preco"];
    
    $produto = new Produto(
        $imagem,
        $nome,
        $preco,
    );

    $produtoRepositorio = new ProdutoRepositorio($conn);
    $produtoRepositorio->cadastrar($produto);
    header("Location: ../visivel/cadastrar-produtos-sucesso.php");
}
