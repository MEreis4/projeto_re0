<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amigos</title>
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/css/nav.css">
</head>
<body>
    <div class="base">
        <div class="sub-secoes">
            <span class="subtitulo">Amigos</span>
            <h1>Seu grupo</h1>
        </div>

        <div class="sub-secoes">
            <div class="friend-list">
                <article class="friend-card">
                    <div class="avatar">RD</div>
                    <div class="friend-meta">
                        <strong>Rodrigo</strong>
                        <span>Vai no churras de sábado</span>
                    </div>
                    <span class="status-badge">Online</span>
                </article>

                <article class="friend-card">
                    <div class="avatar">PR</div>
                    <div class="friend-meta">
                        <strong>Priscila</strong>
                        <span>Confirmou presença</span>
                    </div>
                    <span class="status-badge">Online</span>
                </article>

                <article class="friend-card">
                    <div class="avatar">LM</div>
                    <div class="friend-meta">
                        <strong>Lucas</strong>
                        <span>Adicionou evento novo</span>
                    </div>
                    <span class="status-badge">Offline</span>
                </article>
            </div>
        </div>

        <div class="sub-secoes">
            <button class="btn-primary" type="button">Convidar amigos</button>
        </div>

        <nav class="navegacao">
            <a class="nav-item inicio" href="home.php">Inicio</a>
            <a class="nav-item nova" href="agendar.php">Nova</a>
            <a class="nav-item amigos active" href="amigos.php">Amigos</a>
        </nav>
    </div>
</body>
</html>
