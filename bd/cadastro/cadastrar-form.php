<?php

session_start();

if (isset($_POST["submit"])) {

    // DEPOIS DE CADASTRAR ELE VOLTA PRO INDEX
    header("Location: ../../index.php");

    include_once("../conexao.php");

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $texto = $_POST["texto"];

    $conexao = Conexao::conectar();
    // PREPARE STATEMENT
    $stmt = $conexao->prepare("INSERT INTO tbcadastro (nome, email, telefone, texto)
                                VALUES(?, ?, ?, ?)");
    $stmt->execute([$nome, $email, $telefone, $texto]);

    if (!$stmt) {
        $_SESSION['mensagem'] = "Ocorreu um erro ao cadastrar os dados.";
    } else {
        $_SESSION['mensagem'] = "Cadastro realizado com sucesso!";
    }    

    // REDIRECIONA PARA A PÁGINA HTML QUE DEVE EXIBIR A MENSAGEM
    header("Location: ../../index.php");
    exit;
}
