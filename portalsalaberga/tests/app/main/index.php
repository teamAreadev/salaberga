<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-language" content="pt-BR">
    <meta name="robots" content="index, follow">
    <title>EEEP Salaberga Torquato Gomes de Matos | Hub Educacional</title>
    <meta name="description"
        content="EEEP Salaberga Torquato Gomes de Matos: Hub Educacional em Maranguape.">
    <meta name="author" content="EEEP Salaberga Torquato Gomes de Matos">
    <meta name="keywords"
        content="educação profissional, ensino médio técnico, [Maranguape] educação, cursos técnicos, EEEP Salaberga Torquato">
    <meta name="keywords" content="EEEP Salaberga, Salaberga, Escola Salaberga, Salaberga Torquato">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://salaberga.com/">
    <meta property="og:title" content="EEEP Salaberga Torquato Gomes de Matos | Hub Educacional">
    <meta property="og:description"
        content="Educação profissional de qualidade em Maranguape. Preparando alunos para um futuro brilhante com ensino médio integrado ao técnico.">
    <meta property="og:image" content="https://www.seusite.com.br/imagem-da-escola.jpg">
    <meta name="geo.region" content="BR-Ceará">
    <meta name="geo.placename" content="Maranguape">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="../main/assets/js/timeline.js"></script>
    <script src="../main/assets/js/parallax.js"></script>
    <script src="../main/assets/js/movelbtn.js"></script>
    <script src="../main/assets/js/timeline-function.js"></script>
    <script src="../main/assets/js/tecsSEO.json"></script>
    <script src="../main/assets/js/main.js"></script>
    <link rel="stylesheet" href="../main/assets/css/timeline.css">
    <link rel="stylesheet" href="../main/assets/css/acessibility.css">
    <link rel="stylesheet" href="../main/assets/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link rel="shortcut icon" href="../main/assets/img/Design sem nome.svg" type="image/x-icon">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'ceara-green': '#008C45',
                        'ceara-orange': '#FFA500',
                        'ceara-white': '#FFFFFF',
                        primary: '#4CAF50',
                        secondary: '#FFB74D',
                    }
                }
            }
        }
    </script>
    <style>
        .gallery-img {
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .gallery-img:hover {
            transform: scale(1.05);
        }

        #imageModal {
            transition: opacity 0.3s ease;
        }

        #modalImage {
            transition: opacity 0.3s ease;
        }

        #prevButton,
        #nextButton {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 10px;
            border-radius: 50%;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in {
            animation: fadeIn 1s ease-out forwards;
        }

        section {
            opacity: 0;
        }

        .hover-scale {
            transition: transform 0.3s ease-in-out;
        }

        .hover-scale:hover {
            transform: scale(1.05);
        }


        .section.lb.page-section {
            background-color: #f8f9fa;
            color: #333;
            padding: 80px 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title h3 {
            color: #007a33;
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 20px;
            position: relative;
            display: inline-block;
        }

        .section-title h3::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 50%;
            height: 3px;
            background-color: #ffa500;
        }

        .section-title p.lead {
            color: #555;
            font-size: 20px;
            line-height: 1.8;
            max-width: 800px;
            margin: 0 auto;
        }

        .img-bg-01,
        .img-bg-02,
        .img-bg-03,
        .img-bg-04,
        .img-bg-05,
        .img-bg-06,
        .img-bg-07,
        .img-bg-08,
        .img-bg-09,
        .img-bg-10,
        .img-bg-11,
        .img-bg-12,
        .img-bg-13,
        .img-bg-14,
        .img-bg-15,
        .img-bg-16 {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
            filter: brightness(0.9);
        }

        .img-bg-01 {
            background-image: url();
        }

        .img-bg-02 {
            background-image: url(https://eeepsalabergampe.netlify.app/img/salas.jpg);
        }

        .img-bg-03 {
            background-image: url(https://eeepsalabergampe.netlify.app/img/kml2.jpges/img-03.jpg);
        }

        .img-bg-04 {
            background-image: url(https://eeepsalabergampe.netlify.app/img/klm3.jpg);
        }

        .img-bg-05 {
            background-image: url();
        }

        .img-bg-06 {
            background-image: url();
        }

        .img-bg-07 {
            background-image: url();
        }

        .img-bg-08 {
            background-image: url();
        }

        .img-bg-09 {
            background-image: url();
        }

        .img-bg-10 {
            background-image: url();
        }

        .img-bg-11 {
            background-image: url();
        }

        .img-bg-12 {
            background-image: url();
        }

        .img-bg-13 {
            background-image: url();
        }

        .img-bg-14 {
            background-image: url();
        }

        .img-bg-15 {
            background-image: url();
        }

        .img-bg-16 {
            background-image: url();
        }

        .fade-in {
            opacity: 0;
            transition: opacity 0.5s ease-in;
        }

        .fade-in.visible {
            opacity: 1;
        }

        /* Responsive Adjustments */
        @media (max-width: 1200px) {
            .container {
                max-width: 960px;
            }
        }

        @media (max-width: 992px) {
            .container {
                max-width: 720px;
            }

            .section-title h3 {
                font-size: 36px;
            }

            .section-title p.lead {
                font-size: 18px;
            }
        }

        @media (max-width: 768px) {
            .container {
                max-width: 540px;
            }

            .section-title h3 {
                font-size: 32px;
            }

            .section-title p.lead {
                font-size: 16px;
            }
        }

        @media (max-width: 576px) {
            .container {
                max-width: 100%;
            }
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fadeIn {
            animation: fadeIn 0.5s ease-out;
        }

        body {
            min-height: 100vh;
            overflow-x: hidden;
        }

        .content-wrapper {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            will-change: transform;
        }
    </style>
    <!-- PushAlert -->
    <script type="text/javascript">
            (function (d, t) {
                var g = d.createElement(t),
                    s = d.getElementsByTagName(t)[0];
                g.src = "https://cdn.pushalert.co/integrate_3e3979b887cb8c83ce2f425dde988024.js";
                s.parentNode.insertBefore(g, s);
            }(document, "script"));
    </script>
    <!-- End PushAlert -->
</head>

<body class="font-sans bg-gray-100 text-base select-none" x-data="{ 
    mobileMenuOpen: false, 
    showEditalMessage: true,
    async remindLater() {
        this.showEditalMessage = false;
        
        if ('serviceWorker' in navigator && 'PushManager' in window) {
            try {
                const registration = await navigator.serviceWorker.register('/service-worker.js');
                const permission = await Notification.requestPermission();
                
                if (permission === 'granted') {
                    const subscribeOptions = {
                        userVisibleOnly: true,
                        applicationServerKey: urlBase64ToUint8Array('YOUR_PUBLIC_VAPID_KEY')
                    };
                    
                    const subscription = await registration.pushManager.subscribe(subscribeOptions);
                    
                    // Envie a subscription para o seu servidor
                    await fetch('/api/save-subscription', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify(subscription),
                    });
                    
                    // Agende a notificação no servidor
                    await fetch('/api/schedule-notification', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify({
                            subscription: subscription,
                            delay: 600000 // 10 minutos em milissegundos
                        }),
                    });
                }
            } catch (error) {
                console.error('Erro ao configurar notificações:', error);
            }
        }
    }
}" x-init="setTimeout(() => showEditalMessage = false, 5000)">
    <!-- Conteúdo normal da página -->

    <!-- Mensagem do Edital -->
    <div x-data="{ 
        showEditalMessage: false,
        checkEditalStatus() {
            const editalStatus = JSON.parse(localStorage.getItem('editalDismissed'));
            const oneDay = 24 * 60 * 60 * 1000; // 24 horas em milissegundos
            
            if (!editalStatus || (new Date().getTime() - editalStatus.timestamp) > oneDay) {
                this.showEditalMessage = true;
            }
        },
        dismissEdital() {
            this.showEditalMessage = false;
            localStorage.setItem('editalDismissed', JSON.stringify({
                dismissed: true,
                timestamp: new Date().getTime()
            }));
        }
    }" x-init="checkEditalStatus()" x-show="showEditalMessage" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform translate-y-4 sm:translate-y-0 sm:scale-95"
        x-transition:enter-end="opacity-100 transform translate-y-0 sm:scale-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 transform translate-y-0 sm:scale-100"
        x-transition:leave-end="opacity-0 transform translate-y-4 sm:translate-y-0 sm:scale-95"
        class="fixed inset-0 flex items-center justify-center z-50 px-4 sm:px-0">

        <!-- Fundo borrado -->
        <div class="absolute inset-0 bg-gray-900 bg-opacity-75 backdrop-filter backdrop-blur-sm"></div>

        <!-- Conteúdo da mensagem -->
        <div
            class="bg-white rounded-lg shadow-2xl p-6 sm:p-8 m-4 max-w-lg w-full relative z-10 border-t-4 border-ceara-green">
            <!-- Botão de fechar -->
            <button @click="dismissEdital()"
                class="absolute top-4 right-4 text-gray-400 hover:text-ceara-orange transition duration-150">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>

            <div class="flex items-center mb-6">
                <svg class="h-10 w-10 text-ceara-green mr-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <h2 class="text-2xl font-bold text-gray-800">Atenção, futuros alunos!</h2>
            </div>

            <p class="text-lg text-gray-600 mb-6">
                O edital para novos alunos 2025 está disponível. Não perca essa oportunidade de fazer parte da nossa
                instituição!
            </p>

            <div class="flex flex-col sm:flex-row justify-end items-center space-y-3 sm:space-y-0 sm:space-x-4">
                <button @click="dismissEdital()"
                    class="w-full sm:w-auto px-4 py-2 text-sm font-medium text-gray-700 hover:text-gray-500 focus:outline-none">
                    Lembrar depois
                </button>

                <a href="edital.html" @click="dismissEdital()"
                    class="w-full sm:w-auto bg-ceara-green hover:bg-green-600 text-white font-bold py-3 px-6 rounded-lg transition duration-300 ease-in-out text-center inline-flex items-center justify-center">
                    Acessar Edital
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <!-- Script Alpine.js (caso ainda não esteja incluído no seu projeto) -->
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script>
        function urlBase64ToUint8Array(base64String) {
            const padding = '='.repeat((4 - base64String.length % 4) % 4);
            const base64 = (base64String + padding)
                .replace(/\-/g, '+')
                .replace(/_/g, '/');

            const rawData = window.atob(base64);
            const outputArray = new Uint8Array(rawData.length);

            for (let i = 0; i < rawData.length; ++i) {
                outputArray[i] = rawData.charCodeAt(i);
            }
            return outputArray;
        }
    </script>
    <header class="bg-ceara-green text-ceara-white sticky top-0 z-50 shadow-md">
        <div class="container mx-auto px-4">
            <nav class="flex items-center justify-between flex-wrap py-4">
                <!-- Accessibility Controls -->
                <div class="flex items-center space-x-2">
                    <span class="text-sm"><b>Acessibilidade</b></span>
                    <button class="text-sm hover:text-ceara-orange transition duration-300 px-1"
                        aria-label="Diminuir tamanho do texto"><i class="fa-solid fa-a"></i><b>-</b></button>
                    <button class="text-sm hover:text-ceara-orange transition duration-300 px-1"
                        aria-label="Tamanho padrão do texto"><i class="fa-solid fa-a"></i></button>
                    <button class="text-sm hover:text-ceara-orange transition duration-300 px-1"
                        aria-label="Aumentar tamanho do texto"><i class="fa-solid fa-a"></i><b>+</b></button>
                    <button id="screenReaderBtn"
                        class="text-sm hover:text-ceara-orange transition duration-300 px-1 flex items-center"
                        aria-label="Ativar narração de tela">
                        <i class="fa-solid fa-ear-listen mr-1"></i>
                    </button>

                    <script>
                                            // Variáveis globais
                    let isReading = false;
                    let currentSection = 0;
                    const synth = window.speechSynthesis;
                    let utterance = null;
                    let initialInstructionsGiven = false;

                    // Função para iniciar ou parar a narração
                    function toggleScreenReader() {
                        if (isReading) {
                            stopReading();
                        } else {
                            startReading();
                        }
                    }

                    // Função para iniciar a narração
                    function startReading() {
                        isReading = true;
                        currentSection = 0;
                        readNextSection();
                        updateButtonState();
                        window.addEventListener('scroll', handleScroll);
                        document.addEventListener('click', handleElementClick);
                        document.addEventListener('focus', handleElementFocus, true);
                        announceStatus('Narração ativada');
                    }

                    // Função para parar a narração
                    function stopReading() {
                        if (synth.speaking) {
                            synth.cancel();
                        }
                        isReading = false;
                        updateButtonState();
                        window.removeEventListener('scroll', handleScroll);
                        document.removeEventListener('click', handleElementClick);
                        document.removeEventListener('focus', handleElementFocus, true);
                        announceStatus('Narração desativada');
                    }

                    // Função para ler a próxima seção
                    function readNextSection() {
                        const sections = document.querySelectorAll('section, article, div.section');
                        if (currentSection < sections.length) {
                            const textToRead = sections[currentSection].innerText;
                            speakText(textToRead);
                        } else {
                            stopReading();
                        }
                    }

                    // Função para lidar com o evento de rolagem
                    function handleScroll() {
                        if (!isReading) return;

                        const sections = document.querySelectorAll('section, article, div.section');
                        const scrollPosition = window.scrollY + window.innerHeight / 2;

                        for (let i = 0; i < sections.length; i++) {
                            const section = sections[i];
                            const sectionTop = section.offsetTop;
                            const sectionBottom = sectionTop + section.offsetHeight;

                            if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
                                if (i !== currentSection) {
                                    currentSection = i;
                                    if (synth.speaking) {
                                        synth.cancel();
                                    }
                                    readNextSection();
                                }
                                break;
                            }
                        }
                    }

                    // Função para rolar até a seção atual
                    function scrollToSection(sectionIndex) {
                        const sections = document.querySelectorAll('section, article, div.section');
                        if (sections[sectionIndex]) {
                            sections[sectionIndex].scrollIntoView({ behavior: 'smooth' });
                        }
                    }

                    // Função para atualizar o estado visual do botão
                    function updateButtonState() {
                        const btn = document.getElementById('screenReaderBtn');
                        if (isReading) {
                            btn.classList.add('text-ceara-orange');
                            btn.setAttribute('aria-label', 'Desativar narração de tela');
                        } else {
                            btn.classList.remove('text-ceara-orange');
                            btn.setAttribute('aria-label', 'Ativar narração de tela');
                        }
                    }

                    // Função para anunciar o status da narração
                    function announceStatus(message) {
                        speakText(message);
                    }

                    // Função para fornecer instruções iniciais
                    function provideInitialInstructions() {
                        if (!initialInstructionsGiven) {
                            const instructions = "Bem-vindo. Para ativar a narração de tela, pressione a tecla N ou use a tecla Tab para navegar até o botão de ativação e pressione Enter.";
                            speakText(instructions);
                            initialInstructionsGiven = true;
                        }
                    }

                    // Função para lidar com cliques em elementos
                    function handleElementClick(event) {
                        if (!isReading) return;

                        const element = event.target;
                        const textToSpeak = getElementDescription(element);

                        if (textToSpeak) {
                            speakText(textToSpeak);
                        }
                    }

                    // Função para lidar com foco em elementos
                    function handleElementFocus(event) {
                        if (!isReading) return;

                        const element = event.target;
                        const textToSpeak = getElementDescription(element);

                        if (textToSpeak) {
                            speakText(textToSpeak);
                        }
                    }

                    // Função para obter a descrição de um elemento
                    function getElementDescription(element) {
                        if (element.tagName === 'IMG') {
                            return element.alt || 'Imagem sem descrição';
                        } else if (element.tagName === 'A') {
                            return `Link: ${element.textContent || element.href}`;
                        } else if (element.tagName === 'BUTTON') {
                            return `Botão: ${element.textContent || element.value || 'Sem texto'}`;
                        } else if (element.tagName === 'INPUT') {
                            return `Campo de entrada: ${element.placeholder || element.name || 'Sem descrição'}`;
                        } else {
                            return element.textContent || 'Elemento sem texto';
                        }
                    }

                    // Função para falar texto
                    function speakText(text) {
                        if (synth.speaking) {
                            synth.cancel();
                        }
                        utterance = new SpeechSynthesisUtterance(text);

                        // Configurar a voz (opcional)
                        const voices = synth.getVoices();
                        const portugueseVoice = voices.find(voice => voice.lang === 'pt-BR');
                        if (portugueseVoice) {
                            utterance.voice = portugueseVoice;
                        }

                        synth.speak(utterance);
                    }

                    // Adicionar evento de clique ao botão
                    const screenReaderBtn = document.getElementById('screenReaderBtn');
                    screenReaderBtn.addEventListener('click', toggleScreenReader);

                    // Adicionar atalho de teclado (tecla 'N')
                    document.addEventListener('keydown', function(event) {
                        if (event.key === 'n' || event.key === 'N') {
                            toggleScreenReader();
                        }
                    });

                    // Focar o botão automaticamente e fornecer instruções quando a página carregar
                    window.addEventListener('load', function() {
                        screenReaderBtn.focus();
                        provideInitialInstructions();
                    });

                    // Garantir que as vozes estejam carregadas
                    if (speechSynthesis.onvoiceschanged !== undefined) {
                        speechSynthesis.onvoiceschanged = function() {
                            const voices = synth.getVoices();
                            console.log('Vozes disponíveis:', voices);
                        };
                    }
                    </script>
                    <div class="theme-toggle-container">
                        <button class="theme-toggle-btn hover:text-ceara-orange transition duration-300 px-1"
                            aria-label="Opções de visualização" aria-expanded="false">
                            <i class="fa-solid fa-circle-half-stroke"></i>
                        </button>
                        <div class="theme-options" style="color: #000000;">
                            <!-- <button class="theme-option">Preto,Branco,Amarelo</button> -->
                            <button class="theme-option" aria-label="Ativar monocromático">Monocromático</button>
                            <button class="theme-option" aria-label="Ativar escala de cinza invertida">Escala de cinza
                                invertida</button>
                            <button class="theme-option" aria-label="Ativar cor invertida">Cor invertida</button>
                            <button class="theme-option" aria-label="Restaurar cores originais">Cores originais</button>
                        </div>
                    </div>
                    <!-- <button class="hover:text-ceara-orange transition duration-300 px-1" aria-label="Opções de acessibilidade">
        <i class="fas fa-universal-access"></i>
    </button> -->
                    <button id="vlibrasButton" class="hover:text-ceara-orange transition duration-300 px-1"
                        aria-label="VLibras">
                        <img src="../main/assets/img/libras.svg" alt="VLibras"
                            style="border-radius: 14%; width: 24px; height: auto;" class="zoom">
                    </button>
                </div>

                <!-- Main Navigation -->
                <div class="flex items-center">
                    <div class="hidden lg:flex space-x-4">
                        <a href="#home" class="text-ceara-white hover:text-ceara-orange transition duration-300">
                            <i class="fas fa-home mr-1"></i> Início
                        </a>
                        <a href="#sobre" class="text-ceara-white hover:text-ceara-orange transition duration-300">
                            <i class="fas fa-info-circle mr-1"></i> Sobre
                        </a>
                        <a href="#cursos" class="text-ceara-white hover:text-ceara-orange transition duration-300">
                            <i class="fas fa-book mr-1"></i> Cursos
                        </a> <!--
                        <a href="#eventos" class="text-ceara-white hover:text-ceara-orange transition duration-300">
                            <i class="fas fa-calendar-alt mr-1"></i> Eventos
                        </a> -->
                        <a href="#galeria" class="text-ceara-white hover:text-ceara-orange transition duration-300">
                            <i class="fas fa-images mr-1"></i> Galeria
                            </a>
                        <a href="#parceiros" class="text-ceara-white hover:text-ceara-orange transition duration-300">
                            <i class="fas fa-newspaper mr-1"></i> Parcerias
                        </a> 
                        
                            <!--
                            <a href="../main/views/autenticação/precadastro.php "
                                class="text-ceara-white hover:text-ceara-orange transition duration-300 flex items-center space-x-2">
                                <i class="fa-regular fa-circle-user"></i>
                                <span class="font-semibold">Pré-Cadastro</span>
                           
                -->
                    </div>
                    <div class="block lg:hidden">
                        <button @click="mobileMenuOpen = !mobileMenuOpen"
                            class="flex items-center px-3 py-2 border rounded text-ceara-orange border-ceara-orange hover:text-ceara-white hover:border-ceara-white transition duration-300">
                            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Menu</title>
                                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </nav>

            <!-- Mobile Menu -->
            <div :class="{'block': mobileMenuOpen, 'hidden': !mobileMenuOpen}" class="lg:hidden">
    <div class="py-2 space-y-2">
        <a href="#home" @click="mobileMenuOpen = false" class="block text-ceara-white hover:text-ceara-orange transition duration-300">
            <i class="fas fa-home mr-1"></i> Início
        </a>
        <a href="#sobre" @click="mobileMenuOpen = false" class="block text-ceara-white hover:text-ceara-orange transition duration-300">
            <i class="fas fa-info-circle mr-1"></i> Sobre
        </a>
        <a href="#cursos" @click="mobileMenuOpen = false" class="block text-ceara-white hover:text-ceara-orange transition duration-300">
            <i class="fas fa-book mr-1"></i> Cursos
        </a> <!--
        <a href="#eventos"  @click="mobileMenuOpen = false"  class="block text-ceara-white hover:text-ceara-orange transition duration-300">
                            <i class="fas fa-calendar-alt mr-1"></i> Eventos
                        </a> -->
        <a href="#galeria" @click="mobileMenuOpen = false" class="block text-ceara-white hover:text-ceara-orange transition duration-300">
            <i class="fas fa-images mr-1"></i> Galeria
        </a>
        <a href="#parceiros" @click="mobileMenuOpen = false" class="block text-ceara-white hover:text-ceara-orange transition duration-300">
            <i class="fas fa-newspaper mr-1"></i> Parcerias
        </a>
      
        <!--
        <a href="../main/views/autenticação/precadastro.php" @click="mobileMenuOpen = false"
            class="text-ceara-white hover:text-ceara-orange transition duration-300 flex items-center space-x-2">
            <i class="fa-regular fa-circle-user"></i>
            <span class="font-semibold">Pré-Cadastro</span>
        </a>
                -->
    </div>
</div>

        </div>
    </header>

    <main>
        <section id="home"
            class="relative bg-cover bg-center bg-no-repeat min-h-screen flex flex-col items-center justify-center fade-in overflow-hidden">
            <video class="absolute top-0 left-0 w-full h-full object-cover z-0" autoplay loop muted playsinline>
                <source src="../main/assets/img/background.mp4" type="video/mp4">
                Seu navegador não suporta o elemento de vídeo.
            </video>
            <div class="absolute inset-0 bg-black opacity-50"></div>

            <!-- Logo -->
            <div
                class="absolute top-4 left-4 md:top-8 md:left-8 z-20 w-full md:w-auto flex justify-center md:justify-start">
                <!-- <img src="img\Design sem nome.svg" alt="Logo da EEEP Salaberga Torquato Gomes de Matos" class="h-16 md:h-14"> -->
            </div>

            <div class="container mx-auto px-4 text-center relative z-10 mt-20 md:mt-0">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 text-white leading-tight">EEEP Salaberga
                    Torquato<br>Gomes de Matos</h1>
                <p class="text-xl md:text-2xl mb-12 text-white">Educação de qualidade para um futuro brilhante</p>
                <div class="flex flex-col sm:flex-row justify-center items-center space-y-4 sm:space-y-0 sm:space-x-4">
                    <a href="#cursos"
                        class="bg-ceara-white text-ceara-green hover:bg-ceara-orange hover:text-ceara-white font-bold py-3 px-6 rounded-full transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110 shadow-lg flex items-center justify-center">
                        <i class="fas fa-graduation-cap mr-2"></i> Conheça nossos cursos
                    </a> <!--
                    <a href="../main/views/autenticação/login.php"
                        class="bg-transparent border-2 border-white text-white hover:bg-white hover:text-ceara-green font-bold py-3 px-6 rounded-full transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-110 shadow-lg flex items-center justify-center">
                        <i class="fas fa-user mr-2"></i> Login
                    </a>
                -->
                </div>
            </div>
            <div class="absolute bottom-0 left-0 right-0 text-center pb-8">
                <a href="#sobre" class="text-white hover:text-ceara-orange transition duration-300">
                    <i class="fas fa-chevron-down text-3xl animate-bounce"></i>
                </a>
            </div>
        </section>

        <section class="section lb page-section"  id="sobre">
            <div class="container">
                <div class="section-title row text-center">
                    <div class="col-md-8 offset-md-2">
                    <h2 class="text-4xl font-bold text-center mb-12 text-ceara-green">Nossa historia</h2>
                        <p class="lead">Ao longo dos anos, superamos desafios e celebramos conquistas, sempre com o objetivo de oferecer o melhor 
                            aos nossos clientes. Com uma equipe dedicada e talentosa, desenvolvemos serviços que refletem nossos valores de 
                            inovação, sustentabilidade e excelência.</p>
                    </div>
                </div><!-- end title -->
                <div class="timeline timeline--loaded timeline--horizontal" style="opacity: 1;">
                    <div class="timeline__wrap">
                        <div class="timeline__items"
                            style="width: 1658px; height: 682px; transform: translate3d(0px, 0px, 0px);">
                            <div class="timeline__item timeline__item--top fadeIn"
                                style="width: 207.25px; height: 341px;">
                                <div class="timeline__item__inner">
                                    <div class="timeline__content__wrap">
                                        <div class="timeline__content img-bg-01">
                                            <h2>2024</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                                dignissim neque condimentum lacus dapibus. Lorem
                                                ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline__item timeline__item--bottom fadeIn"
                                style="width: 207.25px; height: 341px; transform: translateY(341px);">
                                <div class="timeline__item__inner">
                                    <div class="timeline__content__wrap">
                                        <div class="timeline__content img-bg-02">
                                            <h2>2023</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                                dignissim neque condimentum lacus dapibus. Lorem
                                                ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline__item timeline__item--top fadeIn"
                                style="width: 207.25px; height: 341px;">
                                <div class="timeline__item__inner">
                                    <div class="timeline__content__wrap">
                                        <div class="timeline__content img-bg-03">
                                            <h2>2022</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                                dignissim neque condimentum lacus dapibus. Lorem
                                                ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline__item timeline__item--bottom fadeIn"
                                style="width: 207.25px; height: 341px; transform: translateY(341px);">
                                <div class="timeline__item__inner">
                                    <div class="timeline__content__wrap">
                                        <div class="timeline__content img-bg-04">
                                            <h2>2021</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                                dignissim neque condimentum lacus dapibus. Lorem
                                                ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline__item timeline__item--top fadeIn"
                                style="width: 207.25px; height: 341px;">
                                <div class="timeline__item__inner">
                                    <div class="timeline__content__wrap">
                                        <div class="timeline__content img-bg-05">
                                            <h2>2020</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                                dignissim neque condimentum lacus dapibus. Lorem
                                                ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline__item timeline__item--bottom"
                                style="width: 207.25px; height: 341px; transform: translateY(341px);">
                                <div class="timeline__item__inner">
                                    <div class="timeline__content__wrap">
                                        <div class="timeline__content img-bg-06">
                                            <h2>2019</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                                dignissim neque condimentum lacus dapibus. Lorem
                                                ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline__item timeline__item--top" style="width: 207.25px; height: 341px;">
                                <div class="timeline__item__inner">
                                    <div class="timeline__content__wrap">
                                        <div class="timeline__content img-bg-07">
                                            <h2>2018</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                                dignissim neque condimentum lacus dapibus. Lorem
                                                ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline__item timeline__item--bottom"
                                style="width: 207.25px; height: 341px; transform: translateY(341px);">
                                <div class="timeline__item__inner">
                                    <div class="timeline__content__wrap">
                                        <div class="timeline__content img-bg-08">
                                            <h2>2017</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                                dignissim neque condimentum lacus dapibus. Lorem
                                                ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline__item timeline__item--top" style="width: 207.25px; height: 341px;">
                                <div class="timeline__item__inner">
                                    <div class="timeline__content__wrap">
                                        <div class="timeline__content img-bg-09">
                                            <h2>2016</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                                dignissim neque condimentum lacus dapibus. Lorem
                                                ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline__item timeline__item--bottom"
                                style="width: 207.25px; height: 341px; transform: translateY(341px);">
                                <div class="timeline__item__inner">
                                    <div class="timeline__content__wrap">
                                        <div class="timeline__content img-bg-10">
                                            <h2>2015</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                                dignissim neque condimentum lacus dapibus. Lorem
                                                ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline__item timeline__item--top" style="width: 207.25px; height: 341px;">
                                <div class="timeline__item__inner">
                                    <div class="timeline__content__wrap">
                                        <div class="timeline__content img-bg-11">
                                            <h2>2014</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                                dignissim neque condimentum lacus dapibus. Lorem
                                                ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline__item timeline__item--bottom"
                                style="width: 207.25px; height: 341px; transform: translateY(341px);">
                                <div class="timeline__item__inner">
                                    <div class="timeline__content__wrap">
                                        <div class="timeline__content img-bg-12">
                                            <h2>2013</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                                dignissim neque condimentum lacus dapibus. Lorem
                                                ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline__item timeline__item--top" style="width: 207.25px; height: 341px;">
                                <div class="timeline__item__inner">
                                    <div class="timeline__content__wrap">
                                        <div class="timeline__content img-bg-13">
                                            <h2>2012</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                                dignissim neque condimentum lacus dapibus. Lorem
                                                ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline__item timeline__item--bottom"
                                style="width: 207.25px; height: 341px; transform: translateY(341px);">
                                <div class="timeline__item__inner">
                                    <div class="timeline__content__wrap">
                                        <div class="timeline__content img-bg-14">
                                            <h2>2011</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                                dignissim neque condimentum lacus dapibus. Lorem
                                                ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline__item timeline__item--top" style="width: 207.25px; height: 341px;">
                                <div class="timeline__item__inner">
                                    <div class="timeline__content__wrap">
                                        <div class="timeline__content img-bg-15">
                                            <h2>2010</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                                dignissim neque condimentum lacus dapibus. Lorem
                                                ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline__item timeline__item--bottom"
                                style="width: 207.25px; height: 341px; transform: translateY(341px);">
                                <div class="timeline__item__inner">
                                    <div class="timeline__content__wrap">
                                        <div class="timeline__content img-bg-16">
                                            <h2>2009</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                                dignissim neque condimentum lacus dapibus. Lorem
                                                ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="timeline-nav-button timeline-nav-button--prev" disabled=""
                        style="top: 341px;">Previous</button>
                    <button class="timeline-nav-button timeline-nav-button--next" style="top: 341px;">Next</button>
                    <span class="timeline-divider" style="top: 341px;"></span>
                </div>
            </div>
        </section>

        <style>
            .timeline__content h2::after {
                display: none !important;
            }
        </style>

<section id="cursos" class="bg-gray-100 py-24 fade-in" x-data="{ activeSlide: 0 }">
            <div class="container mx-auto px-4">
                <h2 class="text-4xl font-bold text-center mb-12 text-ceara-green ">Nossos Cursos</h2>
        
                <div class="overflow-x-auto ">
                    <div class="flex space-x-12 pb-6 carousel" x-init="setInterval(() => {   
                             activeSlide = (activeSlide + 1) % 5;  
                             document.querySelector('.carousel').scrollLeft += 400;  
                             if(activeSlide === 0) {  
                                 document.querySelector('.carousel').scrollLeft = 0;  
                             }  
                         }, 5000)">
                        <!-- Enfermagem -->
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover-scale min-w-[400px] relative group card"
                            :class="{ 'active': activeSlide === 0 }">
                            <img src="https://via.placeholder.com/600x350" alt="Curso de Enfermagem"
                                class="w-full h-64 object-cover">
                            <div class="p-8 " style="border: 3px solid #008C45">
                                <h3 class="font-bold text-2xl mb-3 text-ceara-green ">Enfermagem</h3>
                                <div
                                    class="absolute inset-0 bg-black bg-opacity-75 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="content-overlay">
                                        <p class="text-white text-center text-sm">
                                            O Curso Técnico em Enfermagem tem como objetivo formar profissionais para atuarem no
                                            processo de promoção, recuperação e
                                            manutenção da saúde da comunidade sob a supervisão do enfermeiro, com os objetivos
                                            de proporcionar ao aluno o
                                            desenvolvimento de conhecimentos e habilidades para o exercício da profissão, como
                                            também inserir no mercado de trabalho
                                            profissionais qualificados e competentes para atuarem nos diversos campos de
                                            prestação de serviços de
                                            técnico em Enfermagem.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <!-- Informática -->
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover-scale min-w-[400px] relative group card"
                            :class="{ 'active': activeSlide === 1 }">
                            <img src="https://via.placeholder.com/600x350" alt="Curso de Informática"
                                class="w-full h-64 object-cover">
                                <div class="p-8 " style="border: 3px solid #008C45">
                                <h3 class="font-bold text-2xl mb-3 text-ceara-green">Informática</h3>
                                <div
                                    class="absolute inset-0 bg-black bg-opacity-75 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="content-overlay">
                                        <p class="text-white text-center text-sm">
                                        O Curso Técnico em Informática com ênfase em Desenvolvimento Web oferece uma formação prática e voltada para o mercado. Nossos alunos
                                         aprendem a desenvolver softwares de alta qualidade, passando por todas as etapas do processo: da modelagem de software a banco de dados e testes. Além das habilidades em programação, o currículo inclui disciplinas de design, arquitetura e manutenção de computadores, noções de robótica, gestão de startups e redes de computadores. Essa abordagem abrangente amplia as oportunidades de carreira e capacita nossos estudantes a se destacarem em um 
                                        cenário tecnológico em constante evolução. Venha construir seu futuro na interseção entre tecnologia e criatividade!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <!-- Meio Ambiente -->
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover-scale min-w-[400px] relative group card"
                            :class="{ 'active': activeSlide === 2 }">
                            <img src="https://via.placeholder.com/600x350" alt="Curso de Meio Ambiente"
                                class="w-full h-64 object-cover">
                                <div class="p-8 " style="border: 3px solid #008C45">
                                <h3 class="font-bold text-2xl mb-3 text-ceara-green">Meio Ambiente</h3>
                                <div
                                    class="absolute inset-0 bg-black bg-opacity-75 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="content-overlay">
                                        <p class="text-white text-center text-sm">
                                            O curso de Meio Ambiente forma profissionais capacitados em gestão ambiental,
                                            sustentabilidade e preservação. Aprenda sobre legislação ambiental, análise de
                                            impactos e desenvolvimento sustentável.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <!-- Administração -->
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover-scale min-w-[400px] relative group card"
                            :class="{ 'active': activeSlide === 3 }">
                            <img src="https://via.placeholder.com/600x350" alt="Curso de Administração"
                                class="w-full h-64 object-cover">
                                <div class="p-8 " style="border: 3px solid #008C45">
                                <h3 class="font-bold text-2xl mb-3 text-ceara-green">Administração</h3>
                                <div
                                    class="absolute inset-0 bg-black bg-opacity-75 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="content-overlay">
                                        <p class="text-white text-center text-sm">
                                            O curso de Administração oferece formação completa em gestão empresarial,
                                            empreendedorismo, marketing e finanças. Prepare-se para liderar equipes
                                            e gerenciar negócios com eficiência.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <!-- Edificações -->
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover-scale min-w-[400px] relative group card"
                            :class="{ 'active': activeSlide === 4 }">
                            <img src="https://via.placeholder.com/600x350" alt="Curso de Edificações"
                                class="w-full h-64 object-cover">
                                <div class="p-8 " style="border: 3px solid #008C45">
                                <h3 class="font-bold text-2xl mb-3 text-ceara-green">Edificações</h3>
                                <div
                                    class="absolute inset-0 bg-black bg-opacity-75 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="content-overlay">
                                        <p class="text-white text-center text-sm">
                                            O curso Técnico de Edificações forma profissionais para atuar na construção civil:
                                            Desenhando projetos arquitetônicos e
                                            estruturais, Elaborando e executando projetos e orçamentos de obras, Coordenando
                                            serviços de manutenção de equipamentos
                                            e instalações de edificações, Realiza pesquisas tecnológicas na área de construção
                                            civil. O técnico em edificações pode
                                            trabalhar em empresas de construção civil, escritórios de projetos, canteiros de
                                            obras, laboratórios de pesquisa ou ser
                                            um profissional autônomo
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <style>
            .hide-scrollbar {
                -ms-overflow-style: none;
                scrollbar-width: none;
            }
        
            .hide-scrollbar::-webkit-scrollbar {
                display: none;
            }
        
            .perspective {
                perspective: 1000px;
            }
        
            .card {
                transform-style: preserve-3d;
                transition: transform 0.5s ease;
            }
        
            .card:hover {
                transform: scale(1.05) rotateY(10deg);
            }
        
            .carousel {
                scroll-behavior: smooth;
            }
        
            .group:hover .group-hover\:opacity-100 {
                transition: all 0.3s ease-in-out;
            }
        
            .card:not(.active) {
                transform: scale(0.95) translateZ(-100px);
                opacity: 0.8;
            }
        
            .card.active {
                transform: scale(1) translateZ(0);
                opacity: 1;
            }
        
            .card {
                transition: all 0.5s ease-in-out;
            }
        
            .card:hover {
                box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.2),
                    0 10px 10px -5px rgba(0, 0, 0, 0.1);
            }
        
            .perspective {
                perspective: 2000px;
                perspective-origin: center;
            }
        
            @keyframes slideIn {
                from {
                    transform: translateX(100%) rotateY(20deg);
                    opacity: 0;
                }
        
                to {
                    transform: translateX(0) rotateY(0);
                    opacity: 1;
                }
            }
        
            .carousel {
                animation: slideIn 0.5s ease-out;
            }
        
            /* Novas classes para o overlay de conteúdo */
            .content-overlay {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                height: 100%;
                padding: 1.5rem;
                overflow-y: auto;
                mask-image: linear-gradient(to bottom, black 80%, transparent 100%);
                -webkit-mask-image: linear-gradient(to bottom, black 80%, transparent 100%);
            }
        
            .content-overlay::-webkit-scrollbar {
                width: 6px;
            }
        
            .content-overlay::-webkit-scrollbar-thumb {
                background-color: rgba(255, 255, 255, 0.5);
                border-radius: 3px;
            }
        
            .content-overlay::-webkit-scrollbar-track {
                background-color: rgba(0, 0, 0, 0.1);
            }
        
            .text-sm {
                font-size: 0.875rem;
                line-height: 1.4;
            }
        
            /* Adiciona uma transição suave ao hover */
            .group-hover\:opacity-100 {
                transition: opacity 0.3s ease-in-out;
            }
        </style>
        
        <script>
            function smoothScroll(element, target, duration) {
                const start = element.scrollLeft;
                const change = target - start;
                const startTime = performance.now();

                function animation(currentTime) {
                    const elapsed = currentTime - startTime;
                    const progress = Math.min(elapsed / duration, 1);

                    element.scrollLeft = start + change * easeInOutQuad(progress);

                    if (progress < 1) {
                        requestAnimationFrame(animation);
                    }
                }

                requestAnimationFrame(animation);
            }

            function easeInOutQuad(t) {
                return t < 0.5 ? 2 * t * t : -1 + (4 - 2 * t) * t;
            }

            document.addEventListener('DOMContentLoaded', () => {
                const carousel = document.querySelector('.carousel');
                let currentIndex = 0;
                const cardWidth = 400;

                setInterval(() => {
                    currentIndex = (currentIndex + 1) % 5;
                    smoothScroll(carousel, currentIndex * cardWidth, 1000);
                }, 5000);
            });
        </script>

<!--
<section id="eventos" class="py-24 fade-in">
            <div class="container mx-auto px-4">
                <h2 class="text-4xl font-bold text-center mb-12 text-ceara-green">Próximos Eventos</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white rounded-lg shadow-lg p-6 hover-scale">
                        <div class="flex items-center mb-4">
                            <i class="fas fa-calendar-alt text-3xl text-ceara-orange mr-4"></i>
                            <div>
                                <h3 class="font-bold text-xl mb-1 text-ceara-green">Feira de Ciências</h3>
                                <p class="text-gray-600">15 de Outubro, 2023</p>
                            </div>
                        </div>
                        <p class="text-gray-700 mb-4">Venha conhecer os projetos inovadores dos nossos alunos!</p>
                        <a href="#"
                            class="inline-block bg-ceara-white text-ceara-green border border-ceara-green hover:bg-ceara-green hover:text-ceara-white font-bold py-2 px-4 rounded transition duration-300 ease-in-out">
                            <i class="fas fa-info-circle mr-1"></i> Saiba mais
                        </a>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-6 hover-scale">
                        <div class="flex items-center mb-4">
                            <i class="fas fa-user-graduate text-3xl text-ceara-orange mr-4"></i>
                            <div>
                                <h3 class="font-bold text-xl mb-1 text-ceara-green">Processo Seletivo 2024</h3>
                                <p class="text-gray-600">1 de Novembro, 2023</p>
                            </div>
                        </div>
                        <p class="text-gray-700 mb-4">Inscrições abertas para o processo seletivo do próximo ano letivo!
                        </p>
                        <a href="edital.html"
                            class="inline-block bg-ceara-white text-ceara-green border border-ceara-green hover:bg-ceara-green hover:text-ceara-white font-bold py-2 px-4 rounded transition duration-300 ease-in-out">
                            <i class="fas fa-file-alt mr-1"></i> Ler Edital
                        </a>
                    </div>
                  
                </div>
            </div>

        -->
        </section>

        <section id="galeria" class="py-24 fade-in">
            <div class="container mx-auto px-4">
                <h2 class="text-4xl font-bold text-center mb-12 text-ceara-green">Galeria de Fotos</h2>
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    <img src="../main/assets/img/galeria/galeria-1.png" alt="Imagem 1"
                        class="gallery-img w-full h-64 object-cover rounded-lg shadow-lg hover-scale">
                    <img src="../main/assets/img/galeria/galeria-2.jpg" alt="Imagem 2"
                        class="gallery-img w-full h-64 object-cover rounded-lg shadow-lg hover-scale">
                    <img src="../main/assets/img/galeria/galeria-3.jpg" alt="Imagem 3"
                        class="gallery-img w-full h-64 object-cover rounded-lg shadow-lg hover-scale">
                    <img src="../main/assets/img/galeria/galeria-4.jpg" alt="Imagem 4"
                        class="gallery-img w-full h-64 object-cover rounded-lg shadow-lg hover-scale">
                    <img src="../main/assets/img/galeria/galeria-5.jpg" alt="Imagem 5"
                        class="gallery-img w-full h-64 object-cover rounded-lg shadow-lg hover-scale">
                    <img src="../main/assets/img/galeria/galeria-6.jpg" alt="Imagem 6"
                        class="gallery-img w-full h-64 object-cover rounded-lg shadow-lg hover-scale">
                    <img src="../main/assets/img/galeria/galeria-7.jpg" alt="Imagem 7"
                        class="gallery-img w-full h-64 object-cover rounded-lg shadow-lg hover-scale">
                    <img src="../main/assets/img/galeria/galeria-8.jpg" alt="Imagem 8"
                        class="gallery-img w-full h-64 object-cover rounded-lg shadow-lg hover-scale">
                </div>
            </div>
        </section>  

        <!-- Modal -->
        <div id="imageModal"
            class="fixed inset-0 bg-black bg-opacity-90 flex items-center justify-center hidden z-50 transition-opacity duration-300 ease-in-out">
            <div
                class="relative max-w-4xl w-full bg-white rounded-lg shadow-2xl overflow-hidden transform transition-transform duration-300 ease-in-out">
                <button id="closeModal"
                    class="absolute top-4 right-4 text-gray-600 hover:text-gray-800 transition-colors duration-200 text-3xl focus:outline-none">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
                <div id="carousel" class="relative">
                    <img id="modalImage" src="" alt="Modal Image" class="w-full h-auto max-h-[80vh] object-contain">
                    <div class="absolute inset-0 flex items-center justify-between">
                        <button id="prevButton"
                            class="bg-black bg-opacity-50 hover:bg-opacity-75 text-white p-2 rounded-full transition-all duration-200 focus:outline-none">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7"></path>
                            </svg>
                        </button>
                        <button id="nextButton"
                            class="bg-black bg-opacity-50 hover:bg-opacity-75 text-white p-2 rounded-full transition-all duration-200 focus:outline-none">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

            <!-- Seção Parceiros -->
    <section id="parceiros" class="bg-white py-16 fade-in overflow-hidden">
        <div class="container mx-auto px-8">
        <h2 class="text-4xl font-bold text-center mb-12 text-ceara-green">Nossos Parceiros</h2>
        
        <!-- Container do Carrossel -->
        <div class="relative w-full overflow-hidden">
            <div class="swiper-container parceiros-swiper w-full">
            <div class="swiper-wrapper">
            
               
                <div class="swiper-slide">
                <div class="flex items-center justify-center">
                    <img src="../main/assets/img/logo empresas/fenix Soluções.png" alt="Fenix" class="h-40 w-auto object-contain  hover:grayscale-0 transition-all duration-300">
                </div>
                </div>
                <div class="swiper-slide">
                <div class="flex items-center justify-center">
                    <img src="../main/assets/img/logo empresas/crede1.png" alt="Crede" class="h-40 w-auto object-contain  hover:grayscale-0 transition-all duration-300">
                </div>
                </div>
                <div class="swiper-slide">
                <div class="flex items-center justify-center">
                    <img src="../main/assets/img/logo empresas/netway cursoss.png" alt="netway" class="h-40 w-auto object-contain  hover:grayscale-0 transition-all duration-300">
                </div>
                </div>
                <div class="swiper-slide">
                <div class="flex items-center justify-center">
                    <img src="../main/assets/img/logo empresas/r2_telecom.jpeg" alt="R2" class="h-40 w-auto object-contain  hover:grayscale-0 transition-all duration-300">
                </div>
                </div>
                <div class="swiper-slide">
                <div class="flex items-center justify-center">
                    <img src="../main/assets/img/logo empresas/softway_fibra.webp" alt="software fibra" class="h-40 w-auto object-contain  hover:grayscale-0 transition-all duration-300">
                </div>
                </div>
                <div class="swiper-slide">
                <div class="flex items-center justify-center">
                    <img src="../main/assets/img/logo empresas/TRE_CE.png" alt="tre" class="h-40 w-auto object-contain  hover:grayscale-0 transition-all duration-300">
                </div>
                </div>
                <div class="swiper-slide">
                <div class="flex items-center justify-center">
                    <img src="../main/assets/img/logo empresas/vp23telecomm.png" alt="vp3" class="h-40 w-auto object-contain  hover:grayscale-0 transition-all duration-300">
                </div>
                </div>
                <div class="swiper-slide">
                <div class="flex items-center justify-center">
                    <img src="../main/assets/img/logo empresas/ifce.png" alt="ifce" class="h-40 w-auto object-contain  hover:grayscale-0 transition-all duration-300">
                </div>
                </div>
                <div class="swiper-slide">
                <div class="flex items-center justify-center">
                    <img src="../main/assets/img/logo empresas/prefeitura_municial.png" alt="prefeitura" class="h-40 w-auto object-contain  hover:grayscale-0 transition-all duration-300">
                </div>
                </div>
                <div class="swiper-slide">
                <div class="flex items-center justify-center">
                    <img src="../main/assets/img/logo empresas/EUNICE WEVER HH.jpg" alt="eunice" class="h-40 w-auto object-contain  hover:grayscale-0 transition-all duration-300">
                </div>
                </div>
                <div class="swiper-slide">
                <div class="flex items-center justify-center">
                    <img src="../main/assets/img/logo empresas/anchieta.png" alt="anchieta" class="h-40 w-auto object-contain  hover:grayscale-0 transition-all duration-300">
                </div>
                </div>
                <div class="swiper-slide">
                <div class="flex items-center justify-center">
                    <img src="../main/assets/img/logo empresas/mallory.png" alt="mallory" class="h-40 w-auto object-contain  hover:grayscale-0 transition-all duration-300">
                </div>
                </div>
                <div class="swiper-slide">
                <div class="flex items-center justify-center">
                    <img src="../main/assets/img/logo empresas/inovax (2).png" alt="inovax" class="h-40 w-auto object-contain  hover:grayscale-0 transition-all duration-300">
                </div>
                </div>
                <div class="flex items-center justify-center">
  
            </div>
                <div class="swiper-slide">
            <img src="../main/assets/img/logo empresas/cl_delecom.jpeg" 
                    alt="Cl-telecom" 
                    class="h-40 w-40 object-contain rounded-full hover:grayscale-0 transition-all duration-300">
                </div>
                </div> 
        </div>
      
        </div>
    </section>

    <!-- Styles -->
    <style>
    .swiper-container {
        overflow: hidden;
        width: 100%;
    }
    
    .swiper-wrapper {
        display: flex;
        width: 100%;
    }
    
    .swiper-slide {
        width: auto;
        flex-shrink: 0;
    }
    </style>
    
    <!-- Scripts -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
   document.addEventListener('DOMContentLoaded', function () {
    new Swiper('.parceiros-swiper', {
        slidesPerView: 'auto',
        spaceBetween: 40,
        loop: true,
        centeredSlides: false,
        autoplay: {
            delay: 2000, // Alterado de 3000 para 2000 (2 segundos)
            disableOnInteraction: false,
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 20
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 40
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 40
            },
            1280: {
                slidesPerView: 5,
                spaceBetween: 40
            }
        },
        speed: 800,
        effect: 'slide',
    });

    // Opcional: Controle do autoplay com hover
    const swiperContainer = document.querySelector('.parceiros-swiper');
    if (swiperContainer) {
        swiperContainer.addEventListener('mouseenter', function () {
            const swiper = this.swiper;
            swiper.autoplay.stop();
        });
        swiperContainer.addEventListener('mouseleave', function () {
            const swiper = this.swiper;
            swiper.autoplay.start();
        });
    }
}); 
    </script>
    
        <section id="location">
            <div class="container">
                <h2 class="localfont text-4xl font-bold text-center mb-10 text-ceara-green"><b>Localização</b></h2>
                <div class="map-container">
                    <div class="map-frame">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4727.003608944703!2d-38.67658031627441!3d-3.888242185992357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c0aca1962c7027%3A0xe5da63c87e731b04!2sEscola%20Estadual%20de%20Educa%C3%A7%C3%A3o%20Profissional%20Salaberga%20Torquato%20Gomes%20de%20Matos!5e1!3m2!1spt-BR!2sbr!4v1728757517751!5m2!1spt-BR!2sbr"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    <div class="contact-info">
                        <h3 class="informefont">Informações de Contato</h3>
                        <ul>
                            <li><i class="fas fa-map-marker-alt"></i>Av. Marta Maria Carvalho Nojoza, sn - Outra Banda,
                                Maranguape - CE</li>
                            <li><i class="fas fa-phone"></i> (85) 3101-2100</li>
                            <li><i class="fas fa-envelope"></i> eeepsalaberga@escola.ce.gov.br</li>
                        </ul>
                        <a href="https://www.google.com/maps/place/Escola+Estadual+de+Educa%C3%A7%C3%A3o+Profissional+Salaberga+Torquato+Gomes+de+Matos/@-3.888242,-38.6765803,17z/"
                            target="_blank" class="directions-button">
                            <i class="fas fa-directions"></i> Como Chegar
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-gradient-to-b from-black via-[#000] to-black text-white py-20">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-8">

            <!-- Logo e descrição da empresa -->
            <div class="md:col-span-3 space-y-6">
                <img src="https://i.postimg.cc/yx26GhLv/lavosier-nas-3.png" alt="stgm Logo"
                    class="h-12 transition-all duration-300 hover:grayscale-0" style="background-color: #000000;">
                <p class="text-gray-400 text-sm leading-relaxed">
                    © 2024 Eeep salaberga torquato gomes de matos. Todos os direitos reservados.
                    Sistema Educacional Integrado | CNPJ: 07.954.514/0256-24 |
                    Av. Marta Maria Carvalho Nojoza, sn - Outra Banda, Maranguape - CE
                    Tel: (85) 3341-3990| E-mail: contato@escola.com
                    Horário de Atendimento: Segunda a Sexta, das 7h às 17h
                </p>
            </div>

            <!-- Links Rápidos -->
            <div class="md:col-span-3 space-y-4">
                <h3 class="text-lg font-semibold text-[#FFF]">Links Rápidos</h3>
                <ul class="space-y-2">
                    <li><a href="https://www.instagram.com/eeepsalabergampe/"
                            class="text-gray-400 hover:text-[#FFA500] transition-colors duration-300">Instagram</a>
                    </li>
                    <li><a href="https://www.facebook.com/groups/salaberga/"
                            class="text-gray-400 hover:text-[#FFA500] transition-colors duration-300">Facebook</a>
                    </li>
                    <li><a href="#"
                            class="text-gray-400 hover:text-[#FFA500] transition-colors duration-300">Sobre Nós</a>
                    </li>
                    <li><a href="#"
                            class="text-gray-400 hover:text-[#FFA500] transition-colors duration-300">Contato</a>
                    </li>
                </ul>
            </div>

            <!-- Desenvolvedores -->
            <div class="md:col-span-3 space-y-4">
                <h3 class="text-lg font-semibold text-[#FFF]">Desenvolvedores</h3>
                <ul class="space-y-2">
                <li><a href="https://www.instagram.com/otavio.ce/"
                            class="text-gray-400 hover:text-[#FFA500] transition-colors duration-300">Otavio Menezes</a>
                    </li>
                    <li><a href="https://www.instagram.com/mth_fl/"
                            class="text-gray-400 hover:text-[#FFA500] transition-colors duration-300">Matheus Felix</a>
                    </li>
                    <li><a href="https://www.instagram.com/lvnas._/"
                            class="text-gray-400 hover:text-[#FFA500] transition-colors duration-300">Lavosier</a>
                    </li>
                  
                    <li><a href="https://www.instagram.com/rogercavalcantetz/"
                            class="text-gray-400 hover:text-[#FFA500] transition-colors duration-300">Roger Cavalcante</a>
                    </li>
                    <li><a href="https://www.instagram.com/p_.uchoa/"
                            class="text-gray-400 hover:text-[#FFA500] transition-colors duration-300">Pedro Uchoa</a>
                    </li>
                </ul>
            </div>

            <!-- Logo do desenvolvedor -->
            <div class="md:col-span-3 flex flex-col items-center justify-center space-y-4">
                <img src="https://i.postimg.cc/SsTx6bC0/Dev-2.jpg" alt="DevStgm Logo"
                    class="h-16 w-16 transition-all duration-300 filter grayscale hover:grayscale-0">
                <p class="text-xs text-gray-400 text-center">Desenvolvido por Dev.Stgm</p>
            </div>
        </div>

        <!-- Copyright -->
        <div class="mt-12 pt-8 border-t border-gray-800 text-center">
            <p class="text-gray-400 text-sm">&copy; 2024 DevStgm. Todos os direitos reservados.</p>
        </div>
    </div>
</footer>
    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>
    <script>
        document.getElementById('vlibrasButton').addEventListener('click', function () {
            window.open('https://www.gov.br/governodigital/pt-br/acessibilidade-e-usuario/vlibras', '_blank');
        });

    </script>
</body>

</html>