<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEEPS - Sistema de Ensino</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>

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
    :root {
    --ceara-green: #008C45;
    --ceara-green-dark: #004d00;
    --ceara-orange: #FFA500;
    --ceara-white: #ffffff;
    --gray-600: #666666;
    --gray-dark: #333333;
    --shadow-sm: 0 4px 8px rgba(0, 0, 0, 0.1);
    --shadow-md: 0 4px 8px rgba(0, 0, 0, 0.15);
    --transition-timing: cubic-bezier(0.4, 0, 0.2, 1);
    --transition-duration: 0.4s;
    --hover-scale: 1.02;
}

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            user-select: none;
        }

        html {
            height: 100%;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            line-height: 1.6;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header Styles */
        .header-main {
            background-color: var(--ceara-white);
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 50;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .nav-container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        .nav-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 4rem;
        }

        /* Logo Styles */
        .logo-container {
            display: flex;
            align-items: center;
        }

        /* Navigation Styles */
        nav ul {
            display: flex;
            gap: 1rem;
            list-style: none;
        }

        .button {
            padding: 0.5rem 1rem;
            border-radius: 0.375rem;
            border: none;
            cursor: pointer;
            color: var(--ceara-white);
            transition: all var(--transition-duration) var(--transition-timing);
        }

        .button:hover {
            transform: scale(var(--hover-scale));
        }

        .button-update {
            background-color: var(--ceara-orange);
        }

        .button-reports {
            background-color: var(--ceara-green-dark);
        }

        .button-results {
            background-color: var(--gray-600);
        }

        .button-exit {
            background-color: #dc2626;
        }

        /* Main Content Styles */
        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            padding: 2rem 0;
        }

        .course-card {
            background-color: var(--ceara-white);
            border-radius: 0.5rem;
            padding: 1.5rem;
            box-shadow: var(--shadow-md);
            text-align: center;
            transition: transform var(--transition-duration) var(--transition-timing);
        }

        .course-card:hover {
            transform: scale(var(--hover-scale));
        }

        .course-card h3 {
            margin-bottom: 1rem;
            color: var(--gray-dark);
        }

        .card-buttons {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .card-buttons .button {
            width: 100%;
        }

        /* Course-specific colors */
        .enfermagem .button {
            background-color: #dc2626;
        }

        .informatica .button {
            background-color: #2563eb;
        }

        .administracao .button {
            background-color: #16a34a;
        }

        .edificacoes .button {
            background-color: #d97706;
        }

        /* Footer Styles */
        footer {
            background-color: var(--ceara-green);
            color: var(--ceara-white);
            padding: 2rem 0;
            margin-top: auto;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
        }

        .footer-section h4 {
            margin-bottom: 1rem;
        }

        .social-icons {
            display: flex;
            gap: 1rem;
        }

        .social-icon {
            color: var(--ceara-white);
            text-decoration: none;
            font-size: 1.5rem;
            transition: color var(--transition-duration) var(--transition-timing);
        }

        .social-icon:hover {
            color: var(--ceara-orange);
        }

        /* Modal Styles */
        .modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .modal-content {
            background-color: var(--ceara-white);
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: var(--shadow-md);
            max-width: 500px;
            width: 90%;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            color: var(--gray-dark);
        }

        .form-input,
        .form-select {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid var(--gray-600);
            border-radius: 0.25rem;
            font-size: 1rem;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                gap: 1rem;
            }

            nav ul {
                flex-direction: column;
                align-items: center;
            }

            .footer-grid {
                grid-template-columns: 1fr;
            }
        }


        .footer-link {
            position: relative;
        }

        .footer-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -2px;
            left: 0;
            background-color: rgb(249, 115, 22);
            /* tailwind: orange-500 */
            transition: width 0.3s ease;
        }

        .footer-link:hover::after {
            width: 100%;
        }

        /* Media Queries - apenas se precisar de algo muito específico que o Tailwind não cubra */
        @media (max-width: 640px) {
            .footer-title::after {
                left: 50%;
                transform: translateX(-50%);
            }
        }
    </style>
</head>

<body>

<header class="header-main bg-white:bg-gray-800 shadow-md fixed w-full top-0 left-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex justify-center items-center">
                <img 
                    src="assets/images/LOGO_new.png" 
                    alt="Logo SEEPS" 
                    class="h-16 w-auto sm:h-20 md:h-16 lg:h-16 transition-transform duration-300 hover:scale-105 logo-img"
                    style="margin-top: 10px;"
                >
            </div>
            <!-- Overlay para fundo escuro quando sidebar estiver aberta -->
            <div id="sidebar-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden transition-opacity duration-300"></div>

            <!-- Botão Menu Mobile -->
            <div class="flex items-center sm:hidden">
                <button
                    type="button"
                    class="relative inline-flex items-center justify-center p-2 
                           rounded-lg bg-white
                           text-gray-700
                           transition-all duration-300 ease-in-out
                           hover:bg-gray-50
                         
                           
                           z-50"
                    aria-controls="sidebar-menu-mobile"
                    aria-expanded="false"
                    onclick="toggleMobileMenu()"
                >
                    <span class="sr-only">Abrir menu principal</span>
                    
                    <!-- Ícone Menu (3 barras) -->
                    <svg
                        class="transform transition-transform duration-300 ease-in-out w-5 h-5" 
                        id="menu-icon"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="#2d3748"
                    >
                        <g id="menu-lines">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2.5"
                                d="M4 6h16"
                                class="transform origin-center transition-transform duration-300"
                            />
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2.5"
                                d="M4 12h16"
                                class="transform origin-center transition-transform duration-300"
                            />
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2.5"
                                d="M4 18h16"
                                class="transform origin-center transition-transform duration-300"
                            />
                        </g>
                    </svg>
                </button>
            </div>

            <!-- Sidebar Menu Mobile -->
            <div 
                id="sidebar-menu-mobile" 
                class="fixed top-0 left-0 h-full w-64 bg-ceara-white shadow-md transform -translate-x-full 
                       transition-transform duration-300 ease-in-out z-50"
            >
                <div class="p-4 space-y-4">
                    <!-- Cabeçalho da Sidebar -->
                    <div class="flex items-center justify-between">
                        <h2 class="text-xl font-semibold text-gray-dark">Menu</h2>
                        <button 
                            onclick="toggleMobileMenu()"
                            class="p-2 rounded-lg hover:bg-gray-200 transition-colors duration-200"
                        >
                            <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>

                    <!-- Divisor -->
                    <div class="border-t border-gray-600"></div>

                    <!-- Botões do Menu -->
                    <nav class="space-y-4">
                        <!-- Botão Atualizar -->
                        <button 
                            onclick="showUpdateModal()" 
                            class="w-full flex items-center px-4 py-3 text-base rounded-full
                                   border-2 border-ceara-orange text-ceara-orange font-semibold
                                   transition-all duration-300 ease-in-out
                                   hover:bg-ceara-orange hover:text-ceara-white hover:shadow-md transform hover:scale-100
                                   focus:outline-none focus:ring-2 focus:ring-ceara-orange"
                        >
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                            </svg>
                            Atualizar
                        </button>

                        <!-- Botão Relatórios -->
                        <button 
                            onclick="showReportsModal()" 
                            class="w-full flex items-center px-4 py-3 text-base rounded-full
                                   border-2 border-ceara-green text-ceara-green font-semibold
                                   transition-all duration-300 ease-in-out
                                   hover:bg-ceara-green hover:text-ceara-white hover:shadow-md transform hover:scale-100
                                   focus:outline-none focus:ring-2 focus:ring-ceara-green"
                        >
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                            Relatórios
                        </button>

                        <!-- Botão Resultados -->
                        <button 
                            onclick="showResultsModal()" 
                            class="w-full flex items-center px-4 py-3 text-base rounded-full
                                   border-2 border-gray-600 text-gray-600 font-semibold
                                   transition-all duration-300 ease-in-out
                                   hover:bg-gray-600 hover:text-ceara-white hover:shadow-md transform hover:scale-100
                                   focus:outline-none focus:ring-2 focus:ring-gray-500"
                        >
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                            </svg>
                            Resultados
                        </button>

                        <!-- Botão Sair -->
                        <button 
                            class="w-full flex items-center px-4 py-3 text-base rounded-full
                                   border-2 border-red-600 text-red-600 font-semibold
                                   transition-all duration-300 ease-in-out
                                   hover:bg-red-600 hover:text-ceara-white hover:shadow-md transform hover:scale-100
                                   focus:outline-none focus:ring-2 focus:ring-red-500"
                        >
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                            </svg>
                            Sair
                        </button>
                    </nav>
                </div>
            </div>

            <div 
    id="sidebar-menu-desktop" 
    class="fixed top-0 left-0 h-full w-72 bg-ceara-white shadow-md transform -translate-x-full 
           transition-transform duration-300 ease-in-out z-50"
>
    <div class="p-6 space-y-6">
        <!-- Cabeçalho da Sidebar -->
        <div class="flex items-center justify-between">
            <h2 class="text-2xl font-semibold text-gray-dark">Menu</h2>
            <button 
                onclick="toggleSidebarDesktop()"
                class="p-2 rounded-lg hover:bg-gray-200 transition-colors duration-200"
            >
                <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        <!-- Divisor -->
        <div class="border-t border-gray-600"></div>

        <!-- Botões do Menu -->
        <nav class="space-y-4">
            <!-- Botão Atualizar -->
            <button 
                onclick="showUpdateModal()" 
                class="w-full flex items-center px-4 py-3 text-base rounded-full
                       border-2 border-ceara-orange text-ceara-orange font-semibold
                       transition-all duration-300 ease-in-out
                       hover:bg-ceara-orange hover:text-ceara-white hover:shadow-md transform hover:scale-100
                       focus:outline-none focus:ring-2 focus:ring-ceara-orange"
            >
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                </svg>
                Atualizar
            </button>

            <!-- Botão Relatórios -->
            <button 
                onclick="showReportsModal()" 
                class="w-full flex items-center px-4 py-3 text-base rounded-full
                       border-2 border-ceara-green text-ceara-green font-semibold
                       transition-all duration-300 ease-in-out
                       hover:bg-ceara-green hover:text-ceara-white hover:shadow-md transform hover:scale-100
                       focus:outline-none focus:ring-2 focus:ring-ceara-green"
            >
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
                Relatórios
            </button>

            <!-- Botão Resultados -->
            <button 
                onclick="showResultsModal()" 
                class="w-full flex items-center px-4 py-3 text-base rounded-full
                       border-2 border-gray-600 text-gray-600 font-semibold
                       transition-all duration-300 ease-in-out
                       hover:bg-gray-600 hover:text-ceara-white hover:shadow-md transform hover:scale-100
                       focus:outline-none focus:ring-2 focus:ring-gray-500"
            >
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                </svg>
                Resultados
            </button>

            <!-- Botão Sair -->
            <button 
                class="w-full flex items-center px-4 py-3 text-base rounded-full
                       border-2 border-red-600 text-red-600 font-semibold
                       transition-all duration-300 ease-in-out
                       hover:bg-red-600 hover:text-ceara-white hover:shadow-md transform hover:scale-100
                       focus:outline-none focus:ring-2 focus:ring-red-500"
            >
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                </svg>
                Sair
            </button>
        </nav>
    </div>
</div>

            <!-- Botão Menu Desktop -->
            <div class="hidden sm:flex items-center">
                <button
                    type="button"
                    class="relative inline-flex items-center justify-center p-2 
                           rounded-lg bg-white
                           text-gray-700
                           transition-all duration-300 ease-in-out
                           hover:bg-gray-50
                         
                          
                           z-50"
                    aria-controls="sidebar-menu-desktop"
                    aria-expanded="false"
                    onclick="toggleSidebarDesktop()"
                >
                    <svg
                        class="transform transition-transform duration-300 ease-in-out w-6 h-6"
                        id="menu-icon-desktop"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="#4B5563"
                    >
                        <g id="menu-lines-desktop">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 6h16"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 12h16"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 18h16"/>
                        </g>
                    </svg>
                </button>
            </div>

            <!-- Overlay para Desktop -->
            <div id="sidebar-overlay-desktop" class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden transition-opacity duration-300"></div>
        </div>
    </div>

    <style>
        .sidebar-open {
            transform: translateX(0) !important;
        }

        .overlay-visible {
            opacity: 1;
            pointer-events: auto;
        }

        body.sidebar-active {
            overflow: hidden;
        }
    </style>

    <script>
        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('sidebar-menu-mobile');
            const overlay = document.getElementById('sidebar-overlay');
            const isHidden = mobileMenu.classList.contains('-translate-x-full');

            // Toggle menu
            mobileMenu.classList.toggle('-translate-x-full');
            overlay.classList.toggle('hidden');
            overlay.classList.toggle('overlay-visible');
            document.body.classList.toggle('sidebar-active');

            // Atualiza aria-expanded
            const button = document.querySelector('[aria-controls="sidebar-menu-mobile"]');
            button.setAttribute('aria-expanded', !isHidden);
        }

        // Fecha sidebar ao clicar no overlay
        document.getElementById('sidebar-overlay').addEventListener('click', toggleMobileMenu);

        // Fecha sidebar com a tecla ESC
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
            
                const mobileMenu = document.getElementById('sidebar-menu-mobile');
                const overlay = document.getElementById('sidebar-overlay');
                if (!mobileMenu.classList.contains('-translate-x-full')) {
                    toggleMobileMenu();
                }
            }
        });

        function toggleSidebarDesktop() {
            const desktopMenu = document.getElementById('sidebar-menu-desktop');
            const overlay = document.getElementById('sidebar-overlay-desktop');
            const isHidden = desktopMenu.classList.contains('-translate-x-full');

            // Toggle menu
            desktopMenu.classList.toggle('-translate-x-full');
            overlay.classList.toggle('hidden');
            overlay.classList.toggle('overlay-visible');
            document.body.classList.toggle('sidebar-active');

            // Atualiza aria-expanded
            const button = document.querySelector('[aria-controls="sidebar-menu-desktop"]');
            button.setAttribute('aria-expanded', !isHidden);
        }

        // Fecha sidebar ao clicar no overlay
        document.getElementById('sidebar-overlay-desktop').addEventListener('click', toggleSidebarDesktop);

        // Fecha sidebar com a tecla ESC
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                const desktopMenu = document.getElementById('sidebar-menu-desktop');
                if (!desktopMenu.classList.contains('-translate-x-full')) {
                    toggleSidebarDesktop();
                }
            }
        });
    </script>
</header>


<main class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 py-12" style="position:relative; margin-top: 100px">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8">
        <!-- Card Enfermagem -->
        <div class="bg-white rounded-3xl shadow-2xl p-6 lg:p-8 transform transition-all duration-300 hover:scale-105 hover:shadow-2xl border border-gray-100">
            <div class="flex flex-col h-full justify-between">
                <h3 class="text-2xl lg:text-3xl font-bold text-gray-800 mb-6 lg:mb-8 text-center">Enfermagem</h3>
                <div class="space-y-4">
                    <button onclick="showEnfermagemPublicModal()" class="w-full py-2.5 lg:py-3 px-4 lg:px-6 bg-gradient-to-r from-red-500 to-red-700 text-white rounded-full font-semibold text-base lg:text-lg transition-all duration-300 hover:from-red-600 hover:to-red-800 hover:shadow-lg focus:outline-none focus:ring-4 focus:ring-red-300">Escola Pública</button>
                    <button onclick="showEnfermagemPrivateModal()" class="w-full py-2.5 lg:py-3 px-4 lg:px-6 bg-gradient-to-r from-red-500 to-red-700 text-white rounded-full font-semibold text-base lg:text-lg transition-all duration-300 hover:from-red-600 hover:to-red-800 hover:shadow-lg focus:outline-none focus:ring-4 focus:ring-red-300">Escola Privada</button>
                </div>
            </div>
            <!-- Repetir para outros cursos -->
        </div>

        <!-- Card Informática -->
        <div class="bg-white rounded-3xl shadow-2xl p-6 lg:p-8 transform transition-all duration-300 hover:scale-105 hover:shadow-2xl border border-gray-100">
            <div class="flex flex-col h-full justify-between">
                <h3 class="text-2xl lg:text-3xl font-bold text-gray-800 mb-6 lg:mb-8 text-center">Informática</h3>
                <div class="space-y-4">
                    <button onclick="showInformaticaPublicModal()" class="w-full py-2.5 lg:py-3 px-4 lg:px-6 bg-gradient-to-r from-blue-500 to-blue-700 text-white rounded-full font-semibold text-base lg:text-lg transition-all duration-300 hover:from-blue-600 hover:to-blue-800 hover:shadow-lg focus:outline-none focus:ring-4 focus:ring-blue-300">Escola Pública</button>
                    <button onclick="showInformaticaPrivateModal()" class="w-full py-2.5 lg:py-3 px-4 lg:px-6 bg-gradient-to-r from-blue-500 to-blue-700 text-white rounded-full font-semibold text-base lg:text-lg transition-all duration-300 hover:from-blue-600 hover:to-blue-800 hover:shadow-lg focus:outline-none focus:ring-4 focus:ring-blue-300">Escola Privada</button>
                </div>
            </div>
        </div>

        <!-- Card Administração -->
        <div class="bg-white rounded-3xl shadow-2xl p-6 lg:p-8 transform transition-all duration-300 hover:scale-105 hover:shadow-2xl border border-gray-100">
            <div class="flex flex-col h-full justify-between">
                <h3 class="text-2xl lg:text-3xl font-bold text-gray-800 mb-6 lg:mb-8 text-center">Administração</h3>
                <div class="space-y-4">
                    <button onclick="showAdministracaoPublicModal()" class="w-full py-2.5 lg:py-3 px-4 lg:px-6 bg-gradient-to-r from-green-500 to-green-700 text-white rounded-full font-semibold text-base lg:text-lg transition-all duration-300 hover:from-green-600 hover:to-green-800 hover:shadow-lg focus:outline-none focus:ring-4 focus:ring-green-300">Escola Pública</button>
                    <button onclick="showAdministracaoPrivateModal()" class="w-full py-2.5 lg:py-3 px-4 lg:px-6 bg-gradient-to-r from-green-500 to-green-700 text-white rounded-full font-semibold text-base lg:text-lg transition-all duration-300 hover:from-green-600 hover:to-green-800 hover:shadow-lg focus:outline-none focus:ring-4 focus:ring-green-300">Escola Privada</button>
                </div>
            </div>
        </div>

        <!-- Card Edificações -->
        <div class="bg-white rounded-3xl shadow-2xl p-6 lg:p-8 transform transition-all duration-300 hover:scale-105 hover:shadow-2xl border border-gray-100">
            <div class="flex flex-col h-full justify-between">
                <h3 class="text-2xl lg:text-3xl font-bold text-gray-800 mb-6 lg:mb-8 text-center">Edificações</h3>
                <div class="space-y-4">
                    <button onclick="showEdificacoesPublicModal()" class="w-full py-2.5 lg:py-3 px-4 lg:px-6 bg-gradient-to-r from-orange-500 to-orange-700 text-white rounded-full font-semibold text-base lg:text-lg transition-all duration-300 hover:from-orange-600 hover:to-orange-800 hover:shadow-lg focus:outline-none focus:ring-4 focus:ring-orange-300">Escola Pública</button>
                    <button onclick="showEdificacoesPrivateModal()" class="w-full py-2.5 lg:py-3 px-4 lg:px-6 bg-gradient-to-r from-orange-500 to-orange-700 text-white rounded-full font-semibold text-base lg:text-lg transition-all duration-300 hover:from-orange-600 hover:to-orange-800 hover:shadow-lg focus:outline-none focus:ring-4 focus:ring-orange-300">Escola Privada</button>
                </div>
            </div>
        </div>
    </div>
</main>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
      

        function showReportsModal() {
            Swal.fire({
                title: 'Relatórios',
                html: `
                    <div class="form-group">
                        <label class="form-label">Curso</label>
                        <select id="course" class="form-select">
                            <option>Enfermagem</option>
                            <option>Informática</option>
                            <option>Administração</option>
                            <option>Edificações</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Tipo</label>
                        <select id="type" class="form-select">
                            <option>Pública Geral</option>
                            <option>Privada Geral</option>
                            <option>Pública AC</option>
                            <option>Privada AC</option>
                            <option>Pública Cota</option>
                            <option>Privada Cota</option>
                        </select>
                    </div>
                `,
                confirmButtonText: 'Gerar Relatório',
                showCancelButton: true,
                cancelButtonText: 'Cancelar',
                customClass: {
                    confirmButton: 'button button-update',
                    cancelButton: 'button button-exit'
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    const course = document.getElementById('course').value;
                    const type = document.getElementById('type').value;
                    Swal.fire(`Gerando relatório de ${course} - ${type}...`);
                }
            });
        }

        function showResultsModal() {
            Swal.fire({
                title: 'Resultados',
                html: `
                    <div class="form-group">
                        <label class="form-label">Curso</label>
                        <select id="course" class="form-select">
                            <option>Enfermagem</option>
                            <option>Informática</option>
                            <option>Administração</option>
                            <option>Edificações</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="type" class="block mb-2">Tipo</label>
                        <select id="type" class="swal2-select">
                            <option>Pública</option>
                            <option>Privada</option>
                        </select>
                    </div>
                `,
                confirmButtonText: 'Ver Resultados',
                showCancelButton: true,
                cancelButtonText: 'Cancelar',
                focusConfirm: false,
                preConfirm: () => {
                    const course = document.getElementById('course').value;
                    const type = document.getElementById('type').value;

                    if (!course || !type) {
                        Swal.showValidationMessage('Por favor, selecione um curso e um tipo de resultado.');
                    }

                    return {
                        course,
                        type
                    };
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(`Exibindo resultados de ${result.value.course} - ${result.value.type}...`);
                }
            });
        }
    </script>





    <footer class="text-white font-sans w-full mt-auto py-4" style="background-color: #008C45">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
                <!-- Identificação Institucional -->
                <div class="p-2">
                    <h4 class="text-orange-400 text-lg font-bold mb-3">SEEPS</h4>
                    <p class="text-sm mb-3">Sistema de Ensino e Educação Profissional Salaberga</p>
                    <div class="flex gap-3">
                        <a aria-label="Facebook" target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/groups/salaberga/"
                            class="w-8 h-8 bg-white/10 rounded-full flex items-center justify-center hover:bg-orange-400 transition-all">
                            <i class="fab fa-facebook text-sm"></i>
                        </a>
                        <a aria-label="Instagram" target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/eeepsalabergampe/"
                            class="w-8 h-8 bg-white/10 rounded-full flex items-center justify-center hover:bg-orange-400 transition-all">
                            <i class="fab fa-instagram text-sm"></i>
                        </a>
                    </div>
                </div>

                <!-- Contato -->
                <div class="p-2">
                    <h4 class="text-orange-400 text-lg font-bold mb-3">CONTATO</h4>
                    <div class="space-y-2 text-sm">
                        <a class="flex items-center hover:text-orange-400 transition-colors">
                            <i class="fas fa-envelope mr-2"></i>
                            eeepsantaritama@gmail.com
                        </a>
                        <a href="tel:+558531012100" class="flex items-center hover:text-orange-400 transition-colors">
                            <i class="fas fa-phone-alt mr-2"></i>
                            (85) 3101-2100
                        </a>
                    </div>
                </div>

                <!-- Desenvolvedores -->
                <div class="p-2">
                    <h4 class="text-orange-400 text-lg font-bold mb-3">DESENVOLVEDORES</h4>
                    <div class="flex gap-4">
                        <!-- Primeira coluna (3 desenvolvedores) -->
                        <ul class="space-y-2">
                            <li>
                                <a href="https://www.instagram.com/otavio.ce/" target="_blank" rel="noopener noreferrer"
                                    class="flex items-center text-sm hover:text-orange-400 transition-colors">
                                    <i class="fab fa-instagram text-orange-400 mr-2"></i>
                                    Otavio Menezes
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/mth_fl/" target="_blank" rel="noopener noreferrer"
                                    class="flex items-center text-sm hover:text-orange-400 transition-colors">
                                    <i class="fab fa-instagram text-orange-400 mr-2"></i>
                                    Matheus Felix
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/lvnas._/" target="_blank" rel="noopener noreferrer"
                                    class="flex items-center text-sm hover:text-orange-400 transition-colors">
                                    <i class="fab fa-instagram text-orange-400 mr-2"></i>
                                    Lavosier Nascimento
                                </a>
                            </li>
                        </ul>

                        <!-- Segunda coluna (2 desenvolvedores) -->
                        <ul class="space-y-2">
                            <li>
                                <a href="https://www.instagram.com/rogercavalcantetz/" target="_blank" rel="noopener noreferrer"
                                    class="flex items-center text-sm hover:text-orange-400 transition-colors">
                                    <i class="fab fa-instagram text-orange-400 mr-2"></i>
                                    Roger Cavalcante
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/p_.uchoa/" target="_blank" rel="noopener noreferrer"
                                    class="flex items-center text-sm hover:text-orange-400 transition-colors">
                                    <i class="fab fa-instagram text-orange-400 mr-2"></i>
                                    Pedro Uchôa
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Copyright -->
            <div class="border-t border-white/10 pt-3 text-center text-xs">
                <p>&copy; 2024 SEEPS - Todos os direitos reservados</p>
            </div>
        </div>
    </footer>
    <script>
const modalConfig = {
    allowOutsideClick: false,
    allowEscapeKey: false,
    customClass: {
        popup: 'rounded-2xl shadow-2xl bg-white border border-gray-200 custom-scrollbar',
        title: 'text-gray-800',
        htmlContainer: 'text-gray-600',
        input: 'bg-white border-gray-300 text-gray-800 rounded-lg',
        confirmButton: 'inline-flex items-center px-6 py-3 bg-gradient-to-r from-ceara-green to-primary text-white font-medium rounded-lg hover:from-primary hover:to-ceara-green focus:ring-4 focus:ring-ceara-green/50 transition-all duration-300',
        cancelButton: 'inline-flex items-center px-6 py-3 bg-gradient-to-r from-gray-400 to-gray-500 text-white font-medium rounded-lg hover:from-gray-500 hover:to-gray-600 focus:ring-4 focus:ring-gray-400/50 transition-all duration-300'
    },
    buttonsStyling: false,
    background: '#FFFFFF',
    showClass: {
        popup: 'animate__animated animate__fadeInUp animate__faster'
    },
    hideClass: {
        popup: 'animate__animated animate__fadeOutDown animate__faster'
    },
    didOpen: () => {},
    preConfirm: (courseId) => {
        return validateAndCollectData(courseId);
    }
};

// Função para abrir os modais
function showEnfermagemPublicModal() {
    showModal('Enfermagem', 'Escola Pública');
}

function showEnfermagemPrivateModal() {
    showModal('Enfermagem', 'Escola Privada');
}

function showInformaticaPublicModal() {
    showModal('Informática', 'Escola Pública');
}

function showInformaticaPrivateModal() {
    showModal('Informática', 'Escola Privada');
}

function showAdministracaoPublicModal() {
    showModal('Administração', 'Escola Pública');
}

function showAdministracaoPrivateModal() {
    showModal('Administração', 'Escola Privada');
}

function showEdificacoesPublicModal() {
    showModal('Edificações', 'Escola Pública');
}

function showEdificacoesPrivateModal() {
    showModal('Edificações', 'Escola Privada');
}

// Função genérica para mostrar modal
function showModal(courseName, schoolType) {
    Swal.fire({
        ...modalConfig,
        title: `<div class="text-2xl font-bold mb-2 text-ceara-green"> ${courseName} - ${schoolType} </div>`,
        width: '80%',
        html: createModalContent(courseName, schoolType),
        confirmButtonText: 'Cadastrar',
        showCancelButton: true,
        cancelButtonText: 'Cancelar',
        showLoaderOnConfirm: true,
        preConfirm: () => validateAndCollectData(courseName)
    }).then(handleModalResult);
}

// Função para criar o conteúdo do modal
function createModalContent(courseName, schoolType) {
    const subjects = [
        { id: 'lp', name: 'Português' },
        { id: 'ar', name: 'Arte' },
        { id: 'ef', name: 'Ed. Física' },
        { id: 'li', name: 'Inglês' },
        { id: 'ci', name: 'Ciências' },
        { id: 'ge', name: 'Geografia' },
        { id: 'hi', name: 'História' },
        { id: 're', name: 'Religião' },
        { id: 'ma', name: 'Matemática' }
    ];

    // Criando formulários separados para cada curso
    let forms = '';

    // Formulário para Enfermagem
    forms += createForm('Enfermagem', schoolType, subjects);
    // Formulário para Informática
    forms += createForm('Informática', schoolType, subjects);
    // Formulário para Administração
    forms += createForm('Administração', schoolType, subjects);
    // Formulário para Edificações
    forms += createForm('Edificações', schoolType, subjects);

    return forms;
}

// Função para criar um formulário específico
function createForm(course, schoolType, subjects) {
    return `
        <form id="gradeForm_${course}" class="space-y-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-700">
                        Nome Completo <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="name_${course}" name="name" class="w-full px-4 py-3 bg-white border border-gray-300 rounded-lg" placeholder="Digite seu nome completo" required>
                </div>
                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-700">
                        Data de Nascimento <span class="text-red-500">*</span>
                    </label>
                    <input type="date" id="birthDate_${course}" name="birthDate" class="w-full px-4 py-3 bg-white border border-gray-300 rounded-lg" required>
                </div>
            </div>
            <div class="relative mb-6">
                <label class="block text-sm font-medium text-gray-700 mb-2">Curso Selecionado</label>
                <input type="text" value="${course}" class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-lg text-gray-700 cursor-not-allowed opacity-75" disabled />
            </div>
            <div class="relative mb-6">
                <label class="block text-sm font-medium text-gray-700 mb-2">Tipo de Escola</label>
                <input type="text" value="${schoolType}" class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-lg text-gray-700 cursor-not-allowed opacity-75" disabled />
            </div>
            ${[6, 7, 8, 9].map(year => createGradeInputs(year, course, subjects)).join('')}
        </form>`;
}

// Função para criar inputs de notas
function createGradeInputs(year, courseName, subjects) {
    return `
        <div class="py-6 animate-fadeIn">
            <div class="flex items-center space-x-4 mb-6">
                <h3 class="text-xl font-bold text-gray-800">${year}º Ano</h3>
                <div class="flex-1 h-0.5 bg-gradient-to-r from-ceara-green to-transparent rounded-full"></div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                ${subjects.map(subject => `
                    <div class="space-y-2 group">
                        <label class="block text-sm font-medium text-gray-700 group-hover:text-ceara-green transition-colors">
                            ${subject.name}
                        </label>
                        <div class="relative">
                            <input
                                type="text"
                                id="${subject.id}${year}_${courseName}"
                                name="${subject.id}${year}"
                                class="w-full px-4 py-3 bg-white border border-gray-300 rounded-lg focus:border-ceara-green focus:ring-2 focus:ring-ceara-green/50 transition-all duration-300 text-gray-700 placeholder-gray-400 group-hover:border-ceara-green/50"
                                placeholder="0.0"
                                required
                                maxlength="4"
                                oninput="formatGrade(this)"
                                onblur="validateGrade(this)"
                            >
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                <span class="text-gray-400 text-sm">/ 10</span>
                            </div>
                        </div>
                    </div>
                `).join('')}
            </div>
        </div>`;
}

// Funções de validação e coleta de dados
function validateAndCollectData(courseName) {
    const form = document.getElementById(`gradeForm_${courseName}`);
    
    if (!form.checkValidity()) {
        showError('Por favor, preencha todos os campos corretamente');
        return false;
    }

    return collectFormData(courseName);
}

function collectFormData(courseName) {
    const formData = {
        courseName: courseName,
        name: document.getElementById(`name_${courseName}`).value,
        birthDate: document.getElementById(`birthDate_${courseName}`).value
    };

    const subjects = ['lp', 'ar', 'ef', 'li', 'ci', 'ge', 'hi', 're', 'ma'];
    
    [6, 7, 8, 9].forEach(year => {
        subjects.forEach(subject => {
            const inputId = `${subject.id}${year}_${courseName}`;
            const input = document.getElementById(inputId);
            if (input) {
                formData[inputId] = parseFloat(input.value) || 0;
            }
        });
    });

    console.log(formData); // Para verificar os dados coletados
    return formData;
}

// Funções de formatação e validação de notas
function formatGrade(input) {
    // Lógica para formatar a nota
}

function validateGrade(input) {
    // Lógica para validar a nota
}

function showError(message) {
    // Função para exibir mensagens de erro
}

// Exporta as funções necessárias
window.showEnfermagemPublicModal = showEnfermagemPublicModal;
window.showEnfermagemPrivateModal = showEnfermagemPrivateModal;
window.showInformaticaPublicModal = showInformaticaPublicModal;
window.showInformaticaPrivateModal = showInformaticaPrivateModal;
window.showAdministracaoPublicModal = showAdministracaoPublicModal;
window.showAdministracaoPrivateModal = showAdministracaoPrivateModal;
window.showEdificacoesPublicModal = showEdificacoesPublicModal;
window.showEdificacoesPrivateModal = showEdificacoesPrivateModal;
window.formatGrade = formatGrade;
window.validateGrade = validateGrade;

</script>
    <style>

    </style>
</body>

</html>
