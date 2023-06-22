<?php
require_once('conn.php');// inclui o arquivo de conexão

$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL); // obtém o email informado pelo usuário e valida o formato
$senha = $_POST['senha']; // obtém a senha informada pelo usuário

$sql = 'SELECT * FROM usuario WHERE email=:email AND senha=:senha'; // define a query SQL para buscar um usuário com o email e senha informados
$result = $conn->prepare($sql); // prepara a query SQL para execução
$result->execute(['email' => $email, 'senha' => $senha]); // executa a query SQL, passando o email e senha como parâmetros
$user = $result->fetch(); // armazena o resultado da query SQL em um array associativo

if (!empty($user)){ // verifica se há resultados da query SQL
    session_start(); // inicia uma sessão

    $_SESSION['username'] = $user['username']; // armazena o nome do usuário na sessão
    
    header('location: ../../pages/index.php'); // redireciona o usuário para a página inicial
}else{ 
    // caso não haja resultados da query SQL
    echo '<script>alert("Aaaah bonitinho(a) rsrs. Tentando entrar mais colocou a senha ou email errado. Pode dar meia vouta e colocar tudo certinho!"); window.history.back();</script>';
    exit(); // finaliza a execução do script
}
