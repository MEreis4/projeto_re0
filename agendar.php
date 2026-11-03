<?php 
    include('protect.php');

    

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar Resenha</title>
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/css/nav.css">
</head>
<body>
    <div class="base">
        <div class="sub-secoes">
            <span class="subtitulo">Agendar</span>
            <h1>Que tipo de resenha?</h1>
        </div>

        <div class="sub-secoes">
            <ul class="tipo-resenha-list">
                <li class="tipo-resenha active">
                    <div class="tipo-resenha__icon">🔥</div>
                    <div class="tipo-resenha__meta">
                        <h2>Churrasco</h2>
                        <span>Reunião casual</span>
                    </div>
                    <span class="tipo-resenha__check">✓</span>
                </li>
                <li class="tipo-resenha">
                    <div class="tipo-resenha__icon">🎬</div>
                    <div class="tipo-resenha__meta">
                        <h2>Cinema</h2>
                        <span>Encontro com a turma</span>
                    </div>
                    <span class="tipo-resenha__check">✓</span>
                </li>
                <li class="tipo-resenha">
                    <div class="tipo-resenha__icon">🎮</div>
                    <div class="tipo-resenha__meta">
                        <h2>Game Night</h2>
                        <span>Rolê de diversão</span>
                    </div>
                    <span class="tipo-resenha__check">✓</span>
                </li>
                <li class="tipo-resenha">
                    <div class="tipo-resenha__icon">☕</div>
                    <div class="tipo-resenha__meta">
                        <h2>Café</h2>
                        <span>Conversa tranquila</span>
                    </div>
                    <span class="tipo-resenha__check">✓</span>
                </li>
            </ul>
        </div>

        <div class="sub-secoes">
            <div class="form-card">
                <div class="field-group">
                    <label for="titulo">Título</label>
                    <input id="titulo" type="text" value="Churras do fim de semana">
                </div>

                <div class="field-group">
                    <label for="data">Data</label>
                    <input id="data" type="date" value="2026-10-29">
                </div>

                <div class="field-group">
                    <label for="hora">Hora</label>
                    <input id="hora" type="time" value="18:00">
                </div>

                <div class="field-group">
                    <label for="local">Local</label>
                    <input id="local" type="text" value="Casa do Rodrigo, SP">
                </div>

                <div class="field-group">
                    <label for="descricao">Descrição</label>
                    <textarea id="descricao">Churrasco com amigos, carne, gelo e música ao vivo.</textarea>
                </div>

                <button class="btn-primary" type="button">Salvar resenha</button>
            </div>
        </div>

        <nav class="navegacao">
            <a class="nav-item inicio" href="home.php">Inicio</a>
            <a class="nav-item nova active" href="agendar.php">Nova</a>
            <a class="nav-item amigos" href="amigos.php">Amigos</a>
        </nav>
    </div>
</body>
</html>