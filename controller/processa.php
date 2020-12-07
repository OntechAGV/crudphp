<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);

// echo "Nome: $nome <br>";
// echo "Nome: $email <br>";
// echo "Nome: $cidade <br>";

$result_usuario = "INSERT INTO cadastro (nome, email, cidade, created) VALUES ('$nome', '$email', '$cidade', NOW())";
$result = mysqli_query($conn, $result_usuario);

if (mysqli_insert_id($conn)) {
    $_SESSION['msg'] = '<p class="sucesso"> Usuário cadastrado com sucesso </p>';
    header("Location: index.php");
}else{
    $_SESSION['msg'] = '<p class="error"> Usuário não foi cadastrado com sucesso </p>';
    header("Location: index.php");
}

?>