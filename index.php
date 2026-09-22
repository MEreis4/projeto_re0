<?php 
include("conexao.php"); // Inclui o arquivo 'conexao.php' pra esse arquivo

if (isset($_POST['email']) || isset($_POST['senha'])){ // se existirem definições para email e senha, adentre o bloco de código
    if(strlen($_POST['email']) == 0){ // se o tamanho de email for igual a 0, mostre um aviso para preencher a senha.
        echo 'Preencha seu e-mail';
    } else if (strlen($_POST['senha']) == 0){ // idem
        echo 'Preencha seu senha';
    } else{ // se der tudo certo
        $email = $mysqli->real_escape_string($_POST['email']); // adiciona o email protegido de caracteres especiais a uma variável.
        $senha = $mysqli->real_escape_string($_POST['senha']); // idem

        $sql_code = "SELECT * FROM usuario WHERE email ='$email' AND senha='$senha'"; // salva o código que é enviado ao sql em uma variavel.
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL:" . $mysqli->error); // faz uma busca no bd usando o código definido na variavel acima.

        $quantidade = $sql_query->num_rows; // pega a quantidade de linhas adquiridas na busca

        if($quantidade == 1){ // se tiver uma só linha, o código continua. Isto é feito porque não se pode existir duas linhas (duas contas) com os mesmos email e senhas.
            $usuario = $sql_query->fetch_assoc(); // pega os dados da tabela dessa linha e transforma num array guardado na variavel 'usuarios'

            if(!isset($_SESSION)){ //se não houver sessão iniciada, inicia uma.
                session_start();
            }

            $_SESSION['id'] = $usuario['id']; // define que o id da sessão é o mesmo id do usuário que foi guardada no array criado acima
            $_SESSION['user'] = $usuario['email']; // idem
            $_SESSION['nome'] = $usuario['nome']; // idem
            
            header('Location: painel.php'); // redireciona para a pagina 'painel.php'
        } else{ // caso o não tiver nenhuma ou mais de uma linha, retorna
            echo "Falha ao logar. E-mail ou senha incorretos.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Importa os estilos CSS externos -->    
    <link href="assets/css/global.css" rel="stylesheet">
    <link href="assets/css/login.css" rel="stylesheet">
    <style>
        body{
            overflow: hidden;
        }
    </style>
</head>
<body class="login">
<div class="base-login">
    <div class="login-cima">
        <div class="title">
            <h1>PROJETO REØ</h1>
            <h3>SEUS ROLÊS, ORGANIZADOS</h3>
        </div>
    </div>
    <div class="login-baixo">
        <form action="" method="POST">
            <div class="gp-input">
                <label for="email">E-MAIL</label><br>
                <input id="email" name="email" type="email">
            </div>
            <div class="gp-input">
                <label for="password">SENHA</label><br>
                <input id="password" name="senha" type="password">
            </div>

            <button type="submit">ENTRAR</button>
        </form>
    </div>
</div>

    <!-- Importa o arquivo JavaScript externo -->
    <script type="text/JavaScript" src="assets/js/script.js" defer></script>
</body>
</html>