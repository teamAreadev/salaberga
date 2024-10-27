document.addEventListener('DOMContentLoaded', function() {
    // Modal functionality
    const modal = document.getElementById('imageModal');
    const modalImage = document.getElementById('modalImage');
    const closeButton = document.getElementById('closeModal');
    const prevButton = document.getElementById('prevButton');
    const nextButton = document.getElementById('nextButton');
    const galleryImages = document.querySelectorAll('.gallery-img');
    let currentIndex = 0;

    function openModal(index) {
        currentIndex = index;
        updateModalImage();
        modal.classList.remove('hidden');
        console.log('Modal aberto');
    }

    function closeModal() {
        modal.classList.add('hidden');
        console.log('Modal fechado');
    }

    function updateModalImage() {
        modalImage.src = galleryImages[currentIndex].src;
    }

    function nextImage() {
        currentIndex = (currentIndex + 1) % galleryImages.length;
        updateModalImage();
    }

    function prevImage() {
        currentIndex = (currentIndex - 1 + galleryImages.length) % galleryImages.length;
        updateModalImage();
    }

    galleryImages.forEach((img, index) => {
        img.addEventListener('click', () => openModal(index));
    });

    closeButton.addEventListener('click', closeModal);
    prevButton.addEventListener('click', prevImage);
    nextButton.addEventListener('click', nextImage);

    modal.addEventListener('click', (e) => {
        if (e.target === modal) closeModal();
    });

    document.addEventListener('keydown', (e) => {
        if (!modal.classList.contains('hidden')) {
            if (e.key === 'Escape') closeModal();
            if (e.key === 'ArrowLeft') prevImage();
            if (e.key === 'ArrowRight') nextImage();
        }
    });

    // Accessibility and theme functionality
    const decreaseFontBtn = document.querySelector('[aria-label="Diminuir tamanho do texto"]');
    const resetFontBtn = document.querySelector('[aria-label="Tamanho padrão do texto"]');
    const increaseFontBtn = document.querySelector('[aria-label="Aumentar tamanho do texto"]');
    const themeToggleBtn = document.querySelector('.theme-toggle-btn');
    const themeOptions = document.querySelector('.theme-options');
    const themeOptionBtns = document.querySelectorAll('.theme-option');
    const accessibilityBtn = document.querySelector('[aria-label="Opções de acessibilidade"]');

    function changeFontSize(action) {
        const body = document.body;
        const currentSize = parseFloat(window.getComputedStyle(body).fontSize);
        let newSize;

        switch(action) {
            case 'decrease':
                newSize = Math.max(currentSize - 2, 12); // Mínimo de 12px
                break;
            case 'increase':
                newSize = Math.min(currentSize + 2, 24); // Máximo de 24px
                break;
            default:
                newSize = 16; // Tamanho padrão
        }

        body.style.fontSize = newSize + 'px';
    }

    decreaseFontBtn.addEventListener('click', () => changeFontSize('decrease'));
    resetFontBtn.addEventListener('click', () => changeFontSize('reset'));
    increaseFontBtn.addEventListener('click', () => changeFontSize('increase'));

    function toggleThemeMenu() {
        const expanded = themeToggleBtn.getAttribute('aria-expanded') === 'true';
        themeToggleBtn.setAttribute('aria-expanded', !expanded);
        themeOptions.style.display = expanded ? 'none' : 'block';
    }

    themeToggleBtn.addEventListener('click', toggleThemeMenu);

    function applyTheme(themeName) {
        document.body.className = ''; // Remove temas anteriores
        document.body.classList.add(`theme-${themeName}`);
    }

    const themeMap = {
        'Escuro': 'dark-mode',
        'Contraste aumentado': 'high-contrast',
        'Monocromático': 'monochrome',
        'Escala de cinza invertida': 'inverted-grayscale',
        'Cor invertida': 'inverted-color',
        'Cores originais': 'original'
    };

    let isDarkMode = false;

    function toggleDarkMode() {
        isDarkMode = !isDarkMode;
        document.body.classList.toggle('theme-dark-mode', isDarkMode);
        
        if (isDarkMode) {
            document.documentElement.style.setProperty('--background-color', '#121212');
            document.documentElement.style.setProperty('--text-color', '#e0e0e0');
            document.documentElement.style.setProperty('--link-color', '#bb86fc');
            document.documentElement.style.setProperty('--button-bg', '#3700b3');
            document.documentElement.style.setProperty('--button-color', '#ffffff');
        } else {
            document.documentElement.style.setProperty('--background-color', '');
            document.documentElement.style.setProperty('--text-color', '');
            document.documentElement.style.setProperty('--link-color', '');
            document.documentElement.style.setProperty('--button-bg', '');
            document.documentElement.style.setProperty('--button-color', '');
        }

        // Atualizar texto do botão
        const darkModeBtn = document.querySelector('.theme-option[data-theme="dark"]');
        if (darkModeBtn) {
            darkModeBtn.textContent = isDarkMode ? 'Modo Claro' : 'Modo Escuro';
        }

        console.log('Modo escuro ativado:', isDarkMode);
        saveDarkModePreference();
    }

    themeOptionBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            if (this.dataset.theme === 'dark') {
                toggleDarkMode();
            } else {
                const themeName = themeMap[this.textContent] || this.textContent.toLowerCase().replace(/\s+/g, '-');
                applyTheme(themeName);
            }
            toggleThemeMenu(); // Fecha o menu após seleção
        });
    });

    document.addEventListener('click', function(event) {
        if (!themeToggleBtn.contains(event.target) && !themeOptions.contains(event.target)) {
            themeOptions.style.display = 'none';
            themeToggleBtn.setAttribute('aria-expanded', 'false');
        }
    });

    function toggleAccessibilityOptions() {
        // Implementar conforme necessário
        console.log('Opções de acessibilidade clicadas');
    }

    accessibilityBtn.addEventListener('click', toggleAccessibilityOptions);

    // Persistência do modo escuro
    function saveDarkModePreference() {
        localStorage.setItem('darkMode', isDarkMode);
    }

    function loadDarkModePreference() {
        const savedMode = localStorage.getItem('darkMode');
        if (savedMode !== null) {
            isDarkMode = savedMode === 'true';
            if (isDarkMode) {
                toggleDarkMode();
            }
        }
    }

    // Carregar preferência do modo escuro ao iniciar
    loadDarkModePreference();

    // Adicione aqui a lógica para o VLibras, se necessário
});
