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
    <link rel="stylesheet" href="assets/css/nav.css">
</head>
<body>
    <div class="base">
        <div class="sub-secoes">
            <span class="subtitulo">Bem vindo, <?php echo $_SESSION['nome']; ?> 👋</span>
            <h1>Suas Resenhas</h1>
            <a class="perfil-link" href="usuario.php">Ver perfil</a>
        </div>

        <div class="sub-secoes">
            <span class="subtitulo">Próximas</span>
            <ul class="lista-card">
                <li class="card-base" data-resenha data-title="Churras do fim de semana" data-icon="🔥" data-date="29 out 2026" data-hour="18:00" data-local="Casa do Rodrigo, SP" data-type="Churrasco" data-description="Churrasco com amigos, carne, gelo, música e clima de sábado à noite." data-invite="Convide os amigos para a churrasqueira com acompanhamento e música.">
                    <div class="card-esq">🔥</div>
                    <section class="card-dir">
                        <span class="card-title">Churras do fim de semana</span>
                        <span class="card-text data">29 out 2026</span>
                        <span class="card-text hora">18:00</span>
                        <span class="card-text local">Casa do Rodrigo, SP</span>
                    </section>
                </li>

                <li class="card-base" data-resenha data-title="Sessão de cinema" data-icon="🎬" data-date="02 nov 2026" data-hour="20:30" data-local="Cine Plaza, RJ" data-type="Cinema" data-description="A turma vai assistir a estreia do fim de semana com pipoca, conversa e cinema em grupo." data-invite="Confirme quem vai junto e organize a fila de entrada.">
                    <div class="card-esq">🎬</div>
                    <section class="card-dir">
                        <span class="card-title">Sessão de cinema</span>
                        <span class="card-text data">02 nov 2026</span>
                        <span class="card-text hora">20:30</span>
                        <span class="card-text local">Cine Plaza, RJ</span>
                    </section>
                </li>
            </ul>
        </div>

        <div class="sub-secoes">
            <span class="subtitulo">Histórico</span>
            <ul class="lista-card">
                <li class="card-base historico">
                    <div class="card-esq">🍔</div>
                    <section class="card-dir">
                        <span class="card-title">Noite de burger</span>
                        <span class="card-text data">12 out 2026</span>
                        <span class="card-text hora">19:45</span>
                        <span class="card-text local">Boca do Rua, BH</span>
                    </section>
                </li>
            </ul>
        </div>

        <a class="perfil-link" href="logout.php">Fazer logout?</a>

        <aside class="detalhes-resenha" aria-live="polite">
            <div class="detalhes-resenha__conteudo">
                <button type="button" class="detalhes-resenha__fechar" data-close-details aria-label="Fechar">×</button>
                <div class="detalhes-resenha__topo">
                    <div class="detalhes-resenha__icon" data-detail-icon>🔥</div>
                    <div>
                        <span class="subtitulo">Detalhes da resenha</span>
                        <h2 data-detail-title>Churras do fim de semana</h2>
                    </div>
                </div>

                <div class="detalhes-resenha__info">
                    <div class="info-item">
                        <span class="label">Tipo</span>
                        <strong data-detail-type>Churrasco</strong>
                    </div>
                    <div class="info-item">
                        <span class="label">Data</span>
                        <strong data-detail-date>29 out 2026</strong>
                    </div>
                    <div class="info-item">
                        <span class="label">Hora</span>
                        <strong data-detail-hour>18:00</strong>
                    </div>
                    <div class="info-item">
                        <span class="label">Local</span>
                        <strong data-detail-local>Casa do Rodrigo, SP</strong>
                    </div>
                </div>

                <div class="detalhes-resenha__descricao">
                    <span class="label">Descrição</span>
                    <p data-detail-description>Churrasco com amigos, carne, gelo, música e clima de sábado à noite.</p>
                </div>

                <div class="detalhes-resenha__descricao destaque">
                    <span class="label">Convite</span>
                    <p data-detail-invite>Convide os amigos para a churrasqueira com acompanhamento e música.</p>
                </div>
            </div>
        </aside>

        <nav class="navegacao">
            <a class="nav-item inicio active" href="home.php">Inicio</a>
            <a class="nav-item nova" href="agendar.php">Nova</a>
            <a class="nav-item amigos" href="amigos.php">Amigos</a>
        </nav>
    </div>
</body>
</html>