document.addEventListener('DOMContentLoaded', () => {
    const authShell = document.querySelector('.auth-shell');

    if (authShell) {
        const buttons = document.querySelectorAll('[data-auth-target]');
        const views = {
            login: document.querySelector('.auth-form.login'),
            cadastro: document.querySelector('.auth-form.cadastro')
        };

        const updateAuthView = (view) => {
            authShell.dataset.view = view;

            const isLogin = view === 'login';
            views.login.hidden = !isLogin;
            views.cadastro.hidden = !(!isLogin);

            buttons.forEach((button) => {
                const active = button.dataset.authTarget === view;
                button.classList.toggle('active', active);
                button.setAttribute('aria-pressed', String(active));
            });
        };

        buttons.forEach((button) => {
            button.addEventListener('click', () => updateAuthView(button.dataset.authTarget));
        });
    }

    const detailPanel = document.querySelector('.detalhes-resenha');

    if (detailPanel) {
        const titleEl = document.querySelector('[data-detail-title]');
        const iconEl = document.querySelector('[data-detail-icon]');
        const dateEl = document.querySelector('[data-detail-date]');
        const hourEl = document.querySelector('[data-detail-hour]');
        const localEl = document.querySelector('[data-detail-local]');
        const typeEl = document.querySelector('[data-detail-type]');
        const descEl = document.querySelector('[data-detail-description]');
        const inviteEl = document.querySelector('[data-detail-invite]');
        const closeButton = document.querySelector('[data-close-details]');

        const openDetail = (event) => {
            const card = event.currentTarget;
            if (!card) return;

            titleEl.textContent = card.dataset.title || 'Resenha';
            iconEl.textContent = card.dataset.icon || '🔥';
            dateEl.textContent = card.dataset.date || 'Sem data';
            hourEl.textContent = card.dataset.hour || 'Sem horário';
            localEl.textContent = card.dataset.local || 'Sem local';
            typeEl.textContent = card.dataset.type || 'Evento';
            descEl.textContent = card.dataset.description || 'Detalhes da resenha em breve.';
            inviteEl.textContent = card.dataset.invite || 'Convide seus amigos para o rolê.';

            detailPanel.classList.add('visible');
        };

        document.querySelectorAll('.card-base[data-resenha]').forEach((card) => {
            card.addEventListener('click', openDetail);
        });

        closeButton?.addEventListener('click', () => detailPanel.classList.remove('visible'));
        detailPanel.addEventListener('click', (event) => {
            if (event.target === detailPanel) {
                detailPanel.classList.remove('visible');
            }
        });
    }
});
