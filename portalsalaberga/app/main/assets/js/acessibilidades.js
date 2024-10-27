document.addEventListener('DOMContentLoaded', function() {
    const decreaseFontBtn = document.querySelector('[aria-label="Diminuir tamanho do texto"]');
    const resetFontBtn = document.querySelector('[aria-label="Tamanho padrão do texto"]');
    const increaseFontBtn = document.querySelector('[aria-label="Aumentar tamanho do texto"]');
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

    function toggleAccessibilityOptions() {
        // Implementar conforme necessário
        console.log('Opções de acessibilidade clicadas');
    }

    accessibilityBtn.addEventListener('click', toggleAccessibilityOptions);
});
