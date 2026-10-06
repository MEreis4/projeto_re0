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
                <ul class="lista-card">
                    <li class="card-base">        
                        <div class="card-esq">🔥</div>
                        <section class="card-dir">
                            <span class="card-title">Churras do fim de semana</span> <br>
                            <span class="card-text data">29 out 2026</span>
                            <span class="card-text hora">18:00</span> <br>
                            <span class="card-text local">Casa do Rodrigo, SP</span>
                        </section>
                    </li>
                </ul>
        </div>
        <div class="sub-secoes">
            <span class="subtitulo">HISTÓRICO</span>
            <ul class="lista-card">
                <li class="card-base historico">        
                    <div class="card-esq">🔥</div>
                    <section class="card-dir">
                        <span class="card-title">Churras do fim de semana</span> <br>
                        <span class="card-text data">29 out 2026</span>
                        <span class="card-text hora">18:00</span> <br>
                        <span class="card-text local">Casa do Rodrigo, SP</span>
                        <span>></span>
                    </section>
                </li>
            </ul>
        </div>

        <a href="logout.php">Fazer logout?</a>

        <nav class="navegacao">
            <a class="nav-item inicio">INICIO</a>
            <a class="nav-item nova">NOVA</a>
            <a class="nav-item amigos">AMIGOS</a>
        </nav>
    </div>
</body>
</html>