<?php 
include("cadastro.php"); // Inclui o arquivo 'cadastro.php' pra esse arquivo

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
        <div class="auth-shell" data-view="login">
            <div class="auth-toggle" aria-label="Escolha entre logar e cadastrar">
                <button type="button" class="active" data-auth-target="login" aria-pressed="true">Logar</button>
                <button type="button" data-auth-target="cadastro" aria-pressed="false">Cadastrar</button>
            </div>

            <form class="auth-form login" action="" method="POST">
                <div class="gp-input">
                    <label for="email">E-MAIL</label>
                    <input id="email" name="email" type="email" placeholder="seuemail@email.com">
                </div>
                <div class="gp-input">
                    <label for="password">SENHA</label>
                    <input id="password" name="senha" type="password" placeholder="Sua senha">
                </div>

                <?php if (!empty($erro)): ?>
                    <div class="mensagem-erro" role="alert">
                        <?php echo htmlspecialchars($erro); ?>
                    </div>
                <?php endif; ?>

                <button type="submit">ENTRAR</button>
            </form>

            <form class="auth-form cadastro" action="" method="POST" hidden>
                <div class="gp-input">
                    <label for="nome">NOME</label>
                    <input id="nome" name="nome" type="text" placeholder="Seu nome">
                </div>
                <div class="gp-input">
                    <label for="cadastro-email">E-MAIL</label>
                    <input id="cadastro-email" name="cadastro-email" type="email" placeholder="seuemail@email.com">
                </div>
                <div class="gp-input">
                    <label for="cadastro-senha">SENHA</label>
                    <input id="cadastro-senha" name="cadastro-senha" type="password" placeholder="Crie uma senha">
                </div>
                <button type="submit">CADASTRAR</button>
            </form>
        </div>
    </div>
</div>

    <!-- Importa o arquivo JavaScript externo -->
    <script type="text/JavaScript" src="assets/js/script.js" defer></script>
</body>
</html>