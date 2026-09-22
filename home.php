<?php 
    include('protect.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/home.css">
</head>
<body>
    <div class="base">
        <div class="sub-secoes">
            <span class="subtitulo">Bem vindo, <?php echo $_SESSION['nome']; ?> 👋</span>
            <h1>Suas Resenhas</h1>
        </div>
        <div class="sub-secoes">
            <span class="subtitulo">PRÓXIMAS</span>
        </div>
        <div class="sub-secoes">
            <span class="subtitulo">HISTÓRICO</span>
        </div>
        <a href="logout.php">Fazer logout?</a>
    </div>
</body>
</html>