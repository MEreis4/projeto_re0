<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do Usuário</title>
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/css/nav.css">
</head>
<body>
    <div class="base">
        <div class="sub-secoes profile-header">
            <span class="subtitulo">Perfil</span>
            <div class="user-summary">
                <div class="avatar">VM</div>
                <div class="user-meta">
                    <h1>Vitor Mendes</h1>
                    <span class="subtitulo">Organizador de rolês</span>
                </div>
            </div>
        </div>

        <div class="sub-secoes">
            <div class="profile-card">
                <div class="stats-grid">
                    <div class="stat-item">
                        <strong>24</strong>
                        <span>Resenhas</span>
                    </div>
                    <div class="stat-item">
                        <strong>08</strong>
                        <span>Amigos</span>
                    </div>
                    <div class="stat-item">
                        <strong>04</strong>
                        <span>Próximas</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="sub-secoes">
            <span class="subtitulo">Próximos eventos</span>
            <ul class="lista-card">
                <li class="card-base">
                    <div class="card-esq">🔥</div>
                    <section class="card-dir">
                        <span class="card-title">Churras da família</span>
                        <span class="card-text data">14 nov 2026</span>
                        <span class="card-text hora">18:30</span>
                        <span class="card-text local">Sítio da vó, SP</span>
                    </section>
                </li>

                <li class="card-base">
                    <div class="card-esq">🎮</div>
                    <section class="card-dir">
                        <span class="card-title">Game Night</span>
                        <span class="card-text data">18 nov 2026</span>
                        <span class="card-text hora">21:00</span>
                        <span class="card-text local">Casa da Pri, RJ</span>
                    </section>
                </li>
            </ul>
        </div>

        <nav class="navegacao">
            <a class="nav-item inicio" href="home.php">Inicio</a>
            <a class="nav-item nova" href="agendar.php">Nova</a>
            <a class="nav-item amigos" href="amigos.php">Amigos</a>
        </nav>
    </div>
</body>
</html>
