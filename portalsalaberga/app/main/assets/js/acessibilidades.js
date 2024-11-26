// Gerenciador de Acessibilidade
class AccessibilityManager {
    constructor() {
        this.initializeMenus();
        this.initializeTextSize();
        this.initializeThemes();
        this.initializeScreenReader();
        this.loadSavedPreferences();
    }

    // Inicializa os menus de acessibilidade (Desktop e Mobile)
    initializeMenus() {
        // Desktop
        const accessibilityBtn = document.getElementById('accessibilityBtn');
        const accessibilityMenu = document.getElementById('accessibilityMenu');
        const themeBtn = document.getElementById('themeBtn');
        const themeMenu = document.getElementById('themeMenu');

        // Controle do menu principal desktop
        accessibilityBtn?.addEventListener('click', (e) => {
            e.stopPropagation();
            const isExpanded = accessibilityBtn.getAttribute('aria-expanded') === 'true';
            
            if (isExpanded) {
                this.closeDesktopMenus();
            } else {
                this.closeDesktopMenus();
                accessibilityMenu.classList.remove('hidden');
                accessibilityBtn.setAttribute('aria-expanded', 'true');
            }
        });

        // Controle do submenu de temas desktop
        themeBtn?.addEventListener('click', (e) => {
            e.stopPropagation();
            const isExpanded = themeBtn.getAttribute('aria-expanded') === 'true';
            
            if (isExpanded) {
                themeMenu.classList.add('hidden');
                themeBtn.setAttribute('aria-expanded', 'false');
            } else {
                themeMenu.classList.remove('hidden');
                themeBtn.setAttribute('aria-expanded', 'true');
            }
        });

        // Fechar menus ao clicar fora
        document.addEventListener('click', () => {
            this.closeDesktopMenus();
        });

        // Prevenir fechamento ao clicar dentro dos menus
        [accessibilityMenu, themeMenu].forEach(menu => {
            menu?.addEventListener('click', (e) => e.stopPropagation());
        });

        // Fechar com tecla Esc
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                this.closeDesktopMenus();
            }
        });
    }

    closeDesktopMenus() {
        const accessibilityBtn = document.getElementById('accessibilityBtn');
        const accessibilityMenu = document.getElementById('accessibilityMenu');
        const themeBtn = document.getElementById('themeBtn');
        const themeMenu = document.getElementById('themeMenu');

        accessibilityMenu?.classList.add('hidden');
        themeMenu?.classList.add('hidden');
        accessibilityBtn?.setAttribute('aria-expanded', 'false');
        themeBtn?.setAttribute('aria-expanded', 'false');
    }

    // Inicialização do tamanho do texto
    initializeTextSize() {
        // Seleciona todos os botões de texto em ambos os menus (mobile e desktop)
        const decreaseBtns = document.querySelectorAll('[aria-label="Diminuir tamanho do texto"]');
        const resetBtns = document.querySelectorAll('[aria-label="Tamanho padrão do texto"]');
        const increaseBtns = document.querySelectorAll('[aria-label="Aumentar tamanho do texto"]');

        this.baseSize = 16;
        this.currentSize = this.loadTextSize() || this.baseSize;
        this.updateTextSize(this.currentSize);

        // Adiciona eventos para todos os botões
        decreaseBtns.forEach(btn => {
            btn.addEventListener('click', () => this.changeTextSize('decrease'));
        });

        resetBtns.forEach(btn => {
            btn.addEventListener('click', () => this.changeTextSize('reset'));
        });

        increaseBtns.forEach(btn => {
            btn.addEventListener('click', () => this.changeTextSize('increase'));
        });
    }

    changeTextSize(action) {
        switch(action) {
            case 'decrease':
                this.currentSize = Math.max(this.currentSize - 2, 12);
                break;
            case 'reset':
                this.currentSize = this.baseSize;
                break;
            case 'increase':
                this.currentSize = Math.min(this.currentSize + 2, 24);
                break;
        }

        this.updateTextSize(this.currentSize);
        this.saveTextSize();
    }

    updateTextSize(size) {
        document.documentElement.style.fontSize = `${size}px`;
        document.body.style.fontSize = `${size}px`;
    }

    // Gerenciamento de temas
    initializeThemes() {
        const themeButtons = document.querySelectorAll('[data-theme]');
        
        themeButtons.forEach(button => {
            button.addEventListener('click', () => {
                const theme = button.dataset.theme;
                this.applyTheme(theme);
                this.saveTheme(theme);
                // Fecha os menus após selecionar um tema
                this.closeDesktopMenus();
            });
        });
    }

    applyTheme(theme) {
        document.body.classList.remove(
            'theme-monochrome',
            'theme-inverted-grayscale',
            'theme-inverted-color'
        );

        if (theme !== 'original') {
            document.body.classList.add(`theme-${theme}`);
        }

        switch(theme) {
            case 'monochrome':
                document.documentElement.style.filter = 'grayscale(100%)';
                break;
            case 'inverted-grayscale':
                document.documentElement.style.filter = 'grayscale(100%) invert(100%)';
                break;
            case 'inverted-color':
                document.documentElement.style.filter = 'invert(100%)';
                break;
            default:
                document.documentElement.style.filter = 'none';
        }
    }

    // Inicialização do leitor de tela
    initializeScreenReader() {
        // Seleciona todos os botões do leitor de tela em ambos os menus
        const screenReaderBtns = document.querySelectorAll('.fa-ear-listen');
        let speaking = false;
        let currentUtterance = null;

        screenReaderBtns.forEach(icon => {
            const btn = icon.parentElement;
            btn.addEventListener('click', () => {
                if (speaking) {
                    this.stopReading();
                    speaking = false;
                    btn.classList.remove('bg-gray-100');
                } else {
                    this.startReading();
                    speaking = true;
                    btn.classList.add('bg-gray-100');
                }
            });
        });

        // Atalho de teclado (Alt + R)
        document.addEventListener('keydown', (e) => {
            if (e.altKey && e.key === 'r') {
                const firstBtn = screenReaderBtns[0]?.parentElement;
                firstBtn?.click();
            }
        });
    }

    startReading() {
        if ('speechSynthesis' in window) {
            const content = this.getReadableContent();
            const utterance = new SpeechSynthesisUtterance(content);
            utterance.lang = 'pt-BR';
            utterance.rate = 1;
            utterance.pitch = 1;

            window.speechSynthesis.cancel(); // Cancela qualquer leitura anterior
            window.speechSynthesis.speak(utterance);
            this.currentUtterance = utterance;
        } else {
            alert('Seu navegador não suporta o leitor de tela.');
        }
    }

    stopReading() {
        if ('speechSynthesis' in window) {
            window.speechSynthesis.cancel();
            this.currentUtterance = null;
        }
    }

    getReadableContent() {
        // Prioriza o conteúdo principal, mas tem fallback para o body
        const mainContent = document.querySelector('main') || document.body;
        return mainContent.textContent.trim()
            .replace(/\s+/g, ' ') // Remove espaços extras
            .replace(/\n+/g, ' '); // Remove quebras de linha extras
    }

    // Gerenciamento de preferências
    loadSavedPreferences() {
        const savedSize = this.loadTextSize();
        if (savedSize) {
            this.updateTextSize(savedSize);
        }

        const savedTheme = localStorage.getItem('preferredTheme');
        if (savedTheme) {
            this.applyTheme(savedTheme);
        }
    }

    saveTextSize() {
        localStorage.setItem('textSize', this.currentSize);
    }

    loadTextSize() {
        return parseInt(localStorage.getItem('textSize')) || null;
    }

    saveTheme(theme) {
        localStorage.setItem('preferredTheme', theme);
    }
}

// Adiciona estilos CSS para os temas
const themeStyles = document.createElement('style');
themeStyles.textContent = `
    /* Estilos para temas de alto contraste */
    .theme-monochrome {
        background-color: white !important;
        color: black !important;
    }

    .theme-inverted-grayscale {
        background-color: black !important;
        color: white !important;
    }

    .theme-inverted-color img {
        filter: invert(100%);
    }

    /* Transições suaves para mudanças de tema */
    body {
        transition: filter 0.3s ease-in-out;
    }

    /* Indicador visual para botões ativos */
    .active-feature {
        background-color: #e2e8f0;
        border-radius: 0.375rem;
    }
`;

document.head.appendChild(themeStyles);

// Inicializa o gerenciador de acessibilidade quando o documento estiver pronto
document.addEventListener('DOMContentLoaded', () => {
    window.accessibilityManager = new AccessibilityManager();
});