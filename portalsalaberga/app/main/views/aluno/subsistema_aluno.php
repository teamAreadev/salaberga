<!-- //DEV SGTM (SALABERGA TORQUATO GOMES DE MATOS)

        S S S S S S S S
    S S S S S S S S S S
    S S S S S S S S S S S
    S S
    S S S S S S S S S S S
            S S S S S S           
                S S S S S
    S S S S S S S S S S S
    S S S S S S S S S
        S S S S S S S

        T T T T T T T T T
            T T T T
            T T T T
            T T T T
            T T T T
            T T T T
            T T T T

        G G G G G G G G
    G G G G G G G G G
    G G
    G G     G G G G G G
    G G             G G
    G G G G G G G G
        G G G G G G

        M             M
        M M         M M
        M   M     M   M
        M     M M     M
        M       M     M
        M             M
        M             M

        Qual é o seu superpoder? Talvez seja curiosidade já que você está olhando nosso código fonte.
        What’s your superpower? Perhaps it’s curiosity since you are looking at our source code. -->

        <?php
    require_once('../../controllers/controller_sessao/autenticar_sessao.php');
    require_once('../../controllers/controller_sessao/verificar_sessao.php');
    verificarSessao(10);
    
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="theme-color" content="#4A90E2">
        <meta name="description" content="Portal do Aluno FUN - Acesse suas atividades e recursos escolares">
        
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="../../assets/js/service-worker.js"></script>
        <link rel="shortcut icon" href="https://i.postimg.cc/Dy40VtFL/Design-sem-nome-13-removebg-preview.png" type="image/x-icon">
        
        <!-- PWA Meta Tags -->
        <link rel="manifest" href="../../assets/js/manifest.json">
        <link rel="apple-touch-icon" href="https://i.postimg.cc/Dy40VtFL/Design-sem-nome-13-removebg-preview.png">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-title" content="FUN Aluno">
        
        <title>FUN | Aluno</title>
    </head>
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#007A33',
                        secondary: '#FFA500',
                    }
                }
            }
        }
    </script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

        :root {
            --background-color: #f0f7ff;
            --text-color: #333333;
            --header-color: #007A33;
            --icon-bg: #ffffff;
            --icon-shadow: rgba(0, 0, 0, 0.1);
            --accent-color: #FFA500;
            --grid-color: #e0e0e0;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background-color: var(--background-color);
            min-height: 100vh;
            padding-top: 80px;
            background-image: 
                radial-gradient(circle at 10% 20%, rgba(52, 152, 219, 0.05) 0%, rgba(52, 152, 219, 0) 20%),
                radial-gradient(circle at 90% 80%, rgba(46, 204, 113, 0.05) 0%, rgba(46, 204, 113, 0) 20%);
        }

        @media (max-width: 768px) {
            body {
                padding-bottom: 100px;
            }
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 2rem;
            padding: 2rem;
            max-width: 1400px;
            margin: 0 auto;
        }

        .app-card {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 20px;
            padding: 1.5rem;
            text-align: center;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border: 2px solid transparent;
            backdrop-filter: blur(12px);
            position: relative;
            overflow: hidden;
            cursor: pointer;
        }

        .app-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            transform: translateX(-100%);
            transition: 0.5s;
        }

        .app-card:hover::before {
            transform: translateX(100%);
        }

        .app-card:hover {
            transform: translateY(-5px) scale(1.02);
            border-color: var(--header-color);
            box-shadow: 0 20px 30px rgba(0, 122, 51, 0.1);
        }

        .icon-wrapper {
            width: 80px;
            height: 80px;
            margin: 0 auto 1rem;
            background: white;
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        .app-card:hover .icon-wrapper {
            transform: scale(1.1) rotate(5deg);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
        }

        .app-icon {
            width: 50px;
            height: 50px;
            transition: transform 0.3s ease;
        }

        .app-name {
            font-size: 1rem;
            font-weight: 600;
            color: var(--text-color);
            margin-top: 1rem;
            transition: color 0.3s ease;
        }

        .app-card:hover .app-name {
            color: var(--header-color);
        }

        .main-header {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            border-bottom: 2px solid rgba(0, 122, 51, 0.1);
            transition: all 0.3s ease;
        }

        .main-header.scrolled {
            background: rgba(255, 255, 255, 0.98);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .nav-link {
            position: relative;
            padding: 0.5rem 1rem;
            color: var(--text-color);
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--header-color);
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .category-tag {
            font-size: 0.75rem;
            padding: 0.25rem 0.75rem;
            border-radius: 12px;
            background: rgba(0, 122, 51, 0.1);
            color: var(--header-color);
            margin-top: 0.5rem;
            display: inline-block;
        }

        .search-container {
            max-width: 600px;
            margin: 2rem auto;
            padding: 0 1rem;
        }

        .search-bar {
            width: 100%;
            padding: 1rem 1.5rem;
            border-radius: 50px;
            border: 2px solid rgba(0, 122, 51, 0.2);
            background: white;
            transition: all 0.3s ease;
        }

        .search-bar:focus {
            outline: none;
            border-color: var(--header-color);
            box-shadow: 0 4px 12px rgba(0, 122, 51, 0.1);
        }

        .mobile-nav {
            position: fixed;
            bottom: 4px;
            left: 50%;
            transform: translateX(-50%);
            width: 90%;
            max-width: 400px;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 50px;
            padding: 1rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            transition: all 0.3s ease;
            display: none;
        }

        @media (max-width: 768px) {
            .mobile-nav {
                display: block;
            }
        }

        .mobile-nav-enter {
            animation: slideUpNav 0.3s ease-out forwards;
        }

        @keyframes slideUpNav {
            from {
                transform: translate(-50%, 100%);
                opacity: 0;
            }
            to {
                transform: translate(-50%, 0);
                opacity: 1;
            }
        }

        .mobile-nav a {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.5rem;
            color: var(--text-color);
            transition: all 0.3s ease;
        }

        .mobile-nav a:active {
            transform: scale(0.95);
        }

        .mobile-nav a:hover {
            color: var(--header-color);
        }
        /* Estilos específicos para o botão de instalação */
.install-button {
    /* Layout e posicionamento */
    position: fixed;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 1000;
    
    /* Dimensões */
    padding: 12px 24px;
    min-width: 200px;
    
    /* Cores e fundo */
    background: linear-gradient(45deg, #4CAF50, #45a049);
    color: white;
    
    /* Tipografia */
    font-family: 'Arial', sans-serif;
    font-size: 16px;
    font-weight: 600;
    
    /* Borda e sombra */
    border: none;
    border-radius: 25px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    
    /* Transições */
    transition: all 0.3s ease;
    
    /* Cursor */
    cursor: pointer;
}

/* Efeito hover */
.install-button:hover {
    background: linear-gradient(45deg, #45a049, #4CAF50);
    transform: translateX(-50%) translateY(-2px);
    box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
}

/* Efeito active */
.install-button:active {
    transform: translateX(-50%) translateY(0);
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

/* Media query para dispositivos móveis */
@media (max-width: 768px) {
    .install-button {
        width: 90%;
        max-width: 300px;
        font-size: 14px;
        padding: 10px 20px;
    }
}
    </style>
</head>
<body>
    <!-- Header Principal -->
<header class="main-header">
    <div class="container mx-auto px-4 py-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-3">
                <img src="https://i.postimg.cc/8czCMpqx/Design-sem-nome-70-removebg-preview.png" 
                     alt="Logo" 
                     class="h-12 w-auto object-contain">
                <div>
                    <h1 class="text-xl font-bold text-primary">
                        Portal do 
                        <span class="text-secondary">Aluno</span>
                    </h1>
                    <div class="h-0.5 bg-primary/20 rounded-full mt-1"></div>
                </div>
                <div class="flex items-center space-x-4">
                    <nav class="hidden md:flex space-x-4">
                        <a href="#" class="text-white hover:text-[#FFA500] transition-colors duration-300">Início</a>
                        <a href="#" class="text-white hover:text-[#FFA500] transition-colors duration-300">Serviços</a>
                        <a href="#" class="text-white hover:text-[#FFA500] transition-colors duration-300">Suporte</a>
                    </nav>
                    <div class="relative group">
                        <a href="/perfil" class="flex items-center space-x-2 focus:outline-none group">
                            <img src="" alt="Perfil"
                                class="h-8 w-8 rounded-full bg-white p-1 border-2 border-transparent group-hover:border-[#FFA500] transition-colors duration-300">
                            <span class="hidden sm:inline group-hover:text-[#FFA500] transition-colors duration-300">Meu
                                Perfil</span>
                            <svg class="h-4 w-4 fill-current group-hover:text-[#FFA500] transition-colors duration-300"
                                viewBox="0 0 20 20">
                                <path
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                            </svg>
                        </a>
                        <div
                            class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 hidden group-hover:block">
                            <a href="/configuracoes"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#FFA500] hover:text-white">Configurações</a>
                            <a href="/sair"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#FFA500] hover:text-white">Sair</a>
                        </div>
                    </div>
                </div>

                <!-- Perfil do usuário -->
                <div class="flex items-center gap-3 cursor-pointer">
                    <div class="relative">
                        <img src="https://i.postimg.cc/m2d5f5L3/images-removebg-preview.png" 
                             alt="Perfil" 
                             class="w-10 h-10 rounded-full border-2 border-transparent hover:border-secondary transition-colors duration-300">
                        <div class="absolute -bottom-1 -right-1 w-3 h-3 bg-green-500 rounded-full border-2 border-white"></div>
                    </div>
                    <span class="text-sm font-medium text-gray-700 hover:text-primary transition-colors duration-300">
                        Meu Perfil
                    </span>
                </div>
            </nav>
        </div>
    </div>
</header>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Botão principal de acessibilidade
    const accessibilityBtn = document.getElementById('accessibilityBtn');
    const accessibilityMenu = document.getElementById('accessibilityMenu');
    
    // Botão de temas
    const themeBtn = document.getElementById('themeBtn');
    const themeMenu = document.getElementById('themeMenu');
    
    // Função para fechar todos os menus
    function closeAllMenus() {
        accessibilityMenu.classList.add('hidden');
        themeMenu.classList.add('hidden');
        accessibilityBtn.setAttribute('aria-expanded', 'false');
        themeBtn.setAttribute('aria-expanded', 'false');
    }
    
    // Toggle do menu de acessibilidade
    accessibilityBtn.addEventListener('click', function(e) {
        e.stopPropagation();
        const isExpanded = accessibilityBtn.getAttribute('aria-expanded') === 'true';
        
        if (isExpanded) {
            accessibilityMenu.classList.add('hidden');
            accessibilityBtn.setAttribute('aria-expanded', 'false');
        } else {
            closeAllMenus();
            accessibilityMenu.classList.remove('hidden');
            accessibilityBtn.setAttribute('aria-expanded', 'true');
        }
    });
    
    // Toggle do menu de temas
    themeBtn.addEventListener('click', function(e) {
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
    document.addEventListener('click', function(e) {
        if (!accessibilityMenu.contains(e.target) && !accessibilityBtn.contains(e.target)) {
            closeAllMenus();
        }
    });
    
    // Fechar menus com tecla Esc
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeAllMenus();
        }
    });
});
</script>

    <!-- Navegação Mobile -->
    <nav class="mobile-nav">
        <div class="flex justify-around items-center">
            <a href="#" class="nav-link">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                <span class="text-xs">Início</span>
            </a>
            <a href="#" class="nav-link">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                <span class="text-xs">Serviços</span>
            </a>
            <a href="#" class="nav-link">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
                <span class="text-xs">Suporte</span>
            </a>
        </div>
    </nav>

    <!-- Barra de Pesquisa -->
    <div class="search-container">
        <input type="text" 
               class="search-bar"
               placeholder="Buscar aplicativos..."
               id="search-input">
    </div>
    <!-- Grid de Apps -->
<main class="container mx-auto px-4">
    <div class="grid-container">
        <!-- Portal STGM -->
        <a href="https://salaberga.com">
            <div class="app-card">
                <div class="icon-wrapper">
                    <img src="https://i.postimg.cc/8czCMpqx/Design-sem-nome-70-removebg-preview.png" 
                         alt="Portal STGM" 
                         class="app-icon">
                </div>
                <h3 class="app-name">Portal STGM</h3>
                <span class="category-tag">Sistema</span>
            </div>
        </a>

            <a href="https://aluno.seduc.ce.gov.br/">
                <div class="app-card">
                    <div class="icon-wrapper">
                        <img src="https://aluno.seduc.ce.gov.br/assets/icons/icon-512x512.png" 
                             alt="Aluno Online" 
                             class="app-icon">
                    </div>
                    <h3 class="app-name">Aluno Online</h3>
                    <span class="category-tag">Portal</span>
                </div>
            </a>
        
            <!-- Google Classroom -->
            <a href="https://classroom.google.com/">
                <div class="app-card">
                    <div class="icon-wrapper">
                        <img src="https://i.postimg.cc/BQNdZvgK/image-1599078642807-removebg-preview.png" 
                             alt="Google Classroom" 
                             class="app-icon">
                    </div>
                    <h3 class="app-name">Google Classroom</h3>
                    <span class="category-tag">Aulas</span>
                </div>
            </a>
        
            <!-- Biblioteca Digital -->
            <a href="https://biblioteca.seduc.ce.gov.br/">
                <div class="app-card">
                    <div class="icon-wrapper">
                        <img src="https://i.postimg.cc/qRwy4860/biblioteca.png" 
                             alt="Biblioteca Digital" 
                             class="app-icon">
                    </div>
                    <h3 class="app-name">Biblioteca Digital</h3>
                    <span class="category-tag">Estudos</span>
                </div>
            </a>
        
            <!-- Boletim -->
            <a href="https://boletim.seduc.ce.gov.br">
                <div class="app-card">
                    <div class="icon-wrapper">
                        <img src="https://i.postimg.cc/Y0Lng6h7/boletim.png" 
                             alt="Boletim" 
                             class="app-icon">
                    </div>
                    <h3 class="app-name">Boletim</h3>
                    <span class="category-tag">Notas</span>
                </div>
            </a>
        
            <!-- Calendário Escolar -->
            <a href="https://calendario.seduc.ce.gov.br">
                <div class="app-card">
                    <div class="icon-wrapper">
                        <img src="https://i.postimg.cc/3NQ3Qv8Y/calendario.png" 
                             alt="Calendário" 
                             class="app-icon">
                    </div>
                    <h3 class="app-name">Calendário</h3>
                    <span class="category-tag">Agenda</span>
                </div>
            </a>
        
            <!-- Material Didático -->
            <a href="https://material.seduc.ce.gov.br">
                <div class="app-card">
                    <div class="icon-wrapper">
                        <img src="https://i.postimg.cc/RZGnRxZg/material.png" 
                             alt="Material Didático" 
                             class="app-icon">
                    </div>
                    <h3 class="app-name">Material Didático</h3>
                    <span class="category-tag">Estudos</span>
                </div>
            </a>
        
            <!-- Mural de Avisos -->
            <a href="https://mural.seduc.ce.gov.br">
                <div class="app-card">
                    <div class="icon-wrapper">
                        <img src="https://i.postimg.cc/CMX7vRKh/aviso-1.png" 
                             alt="Mural de Avisos" 
                             class="app-icon">
                    </div>
                    <h3 class="app-name">Mural de Avisos</h3>
                    <span class="category-tag">Comunicação</span>
                </div>
            </a>
        
            <!-- Google Forms -->
            <a href="https://forms.google.com/">
                <div class="app-card">
                    <div class="icon-wrapper">
                        <img src="https://i.postimg.cc/Vkfm4T7j/png-transparent-g-suite-form-google-surveys-email-house-purple-violet-rectangle-removebg-preview.png" 
                             alt="Google Forms" 
                             class="app-icon">
                    </div>
                    <h3 class="app-name">Google Forms</h3>
                    <span class="category-tag">Atividades</span>
                </div>
            </a>
        
            <!-- Chat GPT -->
            <a href="https://chat.openai.com/">
                <div class="app-card">
                    <div class="icon-wrapper">
                        <img src="https://i.postimg.cc/DZqM9f0m/download-4-removebg-preview.png" 
                             alt="Chat GPT" 
                             class="app-icon">
                    </div>
                    <h3 class="app-name">Chat GPT</h3>
                    <span class="category-tag">Auxílio</span>
                </div>
            </a>
        </div>
</main>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Header Scroll Effect
            const header = document.querySelector('.main-header');
            const mobileNav = document.querySelector('.mobile-nav');
            let lastScroll = 0;

            window.addEventListener('scroll', () => {
                const currentScroll = window.pageYOffset;
                
                if (currentScroll > lastScroll && currentScroll > 100) {
                    header.classList.add('scrolled');
                    mobileNav.style.transform = 'translate(-50%, 100%)';
                } else {
                    header.classList.remove('scrolled');
                    mobileNav.style.transform = 'translate(-50%, 0)';
                }
                
                lastScroll = currentScroll;
            });

            // Search Functionality
            const searchInput = document.getElementById('search-input');
            const appCards = document.querySelectorAll('.app-card');

            searchInput.addEventListener('input', function(e) {
                const searchTerm = e.target.value.toLowerCase();

                appCards.forEach(card => {
                    const appName = card.querySelector('.app-name').textContent.toLowerCase();
                    const category = card.querySelector('.category-tag').textContent.toLowerCase();

                    if (appName.includes(searchTerm) || category.includes(searchTerm)) {
                        card.style.display = 'block';
                        card.style.animation = 'fadeIn 0.3s ease';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });

            // App Card Click Animation
            appCards.forEach(card => {
                card.addEventListener('click', function() {
                    this.style.transform = 'scale(0.95)';
                    setTimeout(() => {
                        this.style.transform = '';
                    }, 150);
                });
            });

            // Mobile Nav Animation
            const mobileNavLinks = document.querySelectorAll('.mobile-nav a');
            mobileNavLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    // Remove active class from all links
                    mobileNavLinks.forEach(l => l.classList.remove('text-primary'));
                    
                    // Add active class to clicked link
                    this.classList.add('text-primary');
                    
                    // Add click animation
                    this.style.transform = 'scale(0.95)';
                    setTimeout(() => {
                        this.style.transform = '';
                    }, 150);
                });
            });

            // Animação de entrada dos cards
            const animateCards = () => {
                appCards.forEach((card, index) => {
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(20px)';
                    
                    setTimeout(() => {
                        card.style.transition = 'all 0.3s ease-out';
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }, index * 100);
                });
            };

            // Executar animação quando a página carregar
            animateCards();

            // Adicionar efeito de hover nos cards
            appCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    const icon = this.querySelector('.icon-wrapper');
                    icon.style.transform = 'scale(1.1) rotate(5deg)';
                });

                card.addEventListener('mouseleave', function() {
                    const icon = this.querySelector('.icon-wrapper');
                    icon.style.transform = 'scale(1) rotate(0)';
                });
            });

            // Detectar modo escuro do sistema
            const prefersDarkScheme = window.matchMedia('(prefers-color-scheme: dark)');
            
            function handleDarkMode(e) {
                if (e.matches) {
                    document.body.classList.add('dark-mode');
                } else {
                    document.body.classList.remove('dark-mode');
                }
            }

            prefersDarkScheme.addListener(handleDarkMode);
            handleDarkMode(prefersDarkScheme);

            // Smooth scroll para links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });

            // Adicionar indicador de loading
            const showLoading = () => {
                const loading = document.createElement('div');
                loading.className = 'loading-indicator';
                document.body.appendChild(loading);
                
                setTimeout(() => {
                    loading.remove();
                }, 1000);
            };

            // Simular loading ao clicar nos cards
            appCards.forEach(card => {
                card.addEventListener('click', showLoading);
            });
        });
    </script>
</body>
</html>