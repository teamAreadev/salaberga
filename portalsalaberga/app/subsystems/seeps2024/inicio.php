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
            --shadow-md: 0 6px 12px rgba(0, 0, 0, 0.2);
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
    <header class="bg-white:bg-gray-800 shadow-md fixed w-full top-0 left-0 z-50">
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
               focus:outline-none focus:ring-2 focus:ring-offset-2
               focus:ring-green-500
               shadow-sm hover:shadow-md
               z-50"
        aria-controls="sidebar-menu"
        aria-expanded="false"
        onclick="toggleSidebar()"
    >
        <span class="sr-only">Abrir menu principal</span>
        
        <!-- Ícone Menu (3 barras) -->
        <svg
            class="transform transition-transform duration-300 ease-in-out w-5 h-5"
            id="menu-icon"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke="#4B5563"
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

<!-- Sidebar Menu -->
<div 
    id="sidebar-menu" 
    class="fixed top-0 left-0 h-full w-64 bg-white shadow-lg transform -translate-x-full 
           transition-transform duration-300 ease-in-out z-50"
>
    <div class="p-4 space-y-4">
        <!-- Cabeçalho da Sidebar -->
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-xl font-semibold text-gray-800">Menu</h2>
            <button 
                onclick="toggleSidebar()"
                class="p-2 rounded-lg hover:bg-gray-100 transition-colors duration-200"
            >
                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        <!-- Botões do Menu -->
        <div class="space-y-2">
            <button 
                onclick="showUpdateModal()" 
                class="w-full text-left px-4 py-2 text-sm rounded-lg
                       bg-orange-500 text-white font-medium
                       transition-all duration-300 ease-in-out
                       hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-500
                       flex items-center space-x-2"
            >
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                </svg>
                <span>Atualizar</span>
            </button>

            <button 
                onclick="showReportsModal()" 
                class="w-full text-left px-4 py-2 text-sm rounded-lg
                       bg-green-800 text-white font-medium
                       transition-all duration-300 ease-in-out
                       hover:bg-green-900 focus:outline-none focus:ring-2 focus:ring-green-700
                       flex items-center space-x-2"
            >
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
                <span>Relatórios</span>
            </button>

            <button 
                onclick="showResultsModal()" 
                class="w-full text-left px-4 py-2 text-sm rounded-lg
                       bg-gray-600 text-white font-medium
                       transition-all duration-300 ease-in-out
                       hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500
                       flex items-center space-x-2"
            >
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                </svg>
                <span>Resultados</span>
            </button>

            <button 
                class="w-full text-left px-4 py-2 text-sm rounded-lg
                       bg-red-600 text-white font-medium
                       transition-all duration-300 ease-in-out
                       hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500
                       flex items-center space-x-2"
            >
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                </svg>
                <span>Sair</span>
            </button>
        </div>
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
function toggleSidebar() {
    const sidebar = document.getElementById('sidebar-menu');
    const overlay = document.getElementById('sidebar-overlay');
    const menuIcon = document.getElementById('menu-icon');
    const body = document.body;

    sidebar.classList.toggle('sidebar-open');
    overlay.classList.toggle('hidden');
    menuIcon.classList.toggle('menu-open');
    body.classList.toggle('sidebar-active');

    // Adiciona um pequeno delay para a opacidade do overlay
    setTimeout(() => {
        overlay.classList.toggle('overlay-visible');
    }, 50);
}

// Fecha sidebar ao clicar no overlay
document.getElementById('sidebar-overlay').addEventListener('click', toggleSidebar);

// Fecha sidebar com a tecla ESC
document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
        const sidebar = document.getElementById('sidebar-menu');
        if (sidebar.classList.contains('sidebar-open')) {
            toggleSidebar();
        }
    }
});
</script>

                <!-- Navigation Desktop -->
                <nav class="hidden sm:flex sm:items-center sm:space-x-4">
                    <ul class="flex items-center space-x-4">
                        <!-- Botão Atualizar -->
                        <li>
                            <button
                                onclick="showUpdateModal()"
                                class="inline-flex items-center px-4 py-2 rounded-lg
                                   bg-orange-500 text-white font-medium
                                   transition-all duration-300 ease-in-out
                                   hover:bg-orange-600 hover:shadow-lg hover:scale-105
                                   focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">
                                <span>Atualizar</span>
                            </button>
                        </li>

                        <!-- Botão Relatórios -->
                        <li>
                            <button
                                onclick="showReportsModal()"
                                class="inline-flex items-center px-4 py-2 rounded-lg
                                   bg-green-800 text-white font-medium
                                   transition-all duration-300 ease-in-out
                                   hover:bg-green-900 hover:shadow-lg hover:scale-105
                                   focus:outline-none focus:ring-2 focus:ring-green-700 focus:ring-offset-2">
                                <span>Relatórios</span>
                            </button>
                        </li>

                        <!-- Botão Resultados -->
                        <li>
                            <button
                                onclick="showResultsModal()"
                                class="inline-flex items-center px-4 py-2 rounded-lg
                                   bg-gray-600 text-white font-medium
                                   transition-all duration-300 ease-in-out
                                   hover:bg-gray-700 hover:shadow-lg hover:scale-105
                                   focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">
                                <span>Resultados</span>
                            </button>
                        </li>

                        <!-- Botão Sair -->
                        <li>
                            <button
                                class="inline-flex items-center px-4 py-2 rounded-lg
                                   bg-red-600 text-white font-medium
                                   transition-all duration-300 ease-in-out
                                   hover:bg-red-700 hover:shadow-lg hover:scale-105
                                   focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
                                <span>Sair</span>
                            </button>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <!-- Menu Mobile -->
        <div class="sm:hidden hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-2 bg-white dark:bg-gray-800 shadow-lg">
                <button
                    onclick="showUpdateModal()"
                    class="w-full text-left px-4 py-2 rounded-lg
                       bg-orange-500 text-white font-medium
                       transition-all duration-300 ease-in-out
                       hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-500">
                    Atualizar
                </button>

                <button
                    onclick="showReportsModal()"
                    class="w-full text-left px-4 py-2 rounded-lg
                       bg-green-800 text-white font-medium
                       transition-all duration-300 ease-in-out
                       hover:bg-green-900 focus:outline-none focus:ring-2 focus:ring-green-700">
                    Relatórios
                </button>

                <button
                    onclick="showResultsModal()"
                    class="w-full text-left px-4 py-2 rounded-lg
                       bg-gray-600 text-white font-medium
                       transition-all duration-300 ease-in-out
                       hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500">
                    Resultados
                </button>

                <button
                    class="w-full text-left px-4 py-2 rounded-lg
                       bg-red-600 text-white font-medium
                       transition-all duration-300 ease-in-out
                       hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500">
                    Sair
                </button>
            </div>
        </div>
    </header>

    <!-- Espaçador para compensar o header fixo -->
    <div class="h-16"></div>

    <script>
        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobile-menu');
            const isHidden = mobileMenu.classList.contains('hidden');

            // Toggle menu
            mobileMenu.classList.toggle('hidden');

            // Toggle ícones do botão
            const button = document.querySelector('[aria-controls="mobile-menu"]');
            const menuIcon = button.querySelector('svg:first-of-type');
            const closeIcon = button.querySelector('svg:last-of-type');

            menuIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');

            // Atualiza aria-expanded
            button.setAttribute('aria-expanded', isHidden);
        }

        // Fechar menu mobile ao clicar fora
        document.addEventListener('click', (e) => {
            const mobileMenu = document.getElementById('mobile-menu');
            const menuButton = document.querySelector('[aria-controls="mobile-menu"]');

            if (!mobileMenu.contains(e.target) && !menuButton.contains(e.target)) {
                mobileMenu.classList.add('hidden');
                menuButton.querySelector('svg:first-of-type').classList.remove('hidden');
                menuButton.querySelector('svg:last-of-type').classList.add('hidden');
                menuButton.setAttribute('aria-expanded', 'false');
            }
        });
    </script>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Card Enfermagem -->
            <div class="bg-white rounded-xl shadow-lg p-6 transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
                <h3 class="text-xl font-bold text-gray-800 mb-4 text-center">Enfermagem</h3>
                <div class="space-y-3">
                    <button
                        onclick="showPublicModal('Enfermagem')"
                        class="w-full py-2 px-4 bg-red-600 text-white rounded-lg font-medium transition-all duration-300 hover:bg-red-700 hover:shadow-md focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
                        Escola Pública
                    </button>
                    <button
                        onclick="showPrivateModal('Enfermagem')"
                        class="w-full py-2 px-4 bg-red-600 text-white rounded-lg font-medium transition-all duration-300 hover:bg-red-700 hover:shadow-md focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
                        Escola Privada
                    </button>
                </div>
            </div>

            <!-- Card Informática -->
            <div class="bg-white rounded-xl shadow-lg p-6 transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
                <h3 class="text-xl font-bold text-gray-800 mb-4 text-center">Informática</h3>
                <div class="space-y-3">
                    <button
                        onclick="showPublicModal('Informática')"
                        class="w-full py-2 px-4 bg-blue-600 text-white rounded-lg font-medium transition-all duration-300 hover:bg-blue-700 hover:shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Escola Pública
                    </button>
                    <button
                        onclick="showPrivateModal('Informática')"
                        class="w-full py-2 px-4 bg-blue-600 text-white rounded-lg font-medium transition-all duration-300 hover:bg-blue-700 hover:shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Escola Privada
                    </button>
                </div>
            </div>

            <!-- Card Administração -->
            <div class="bg-white rounded-xl shadow-lg p-6 transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
                <h3 class="text-xl font-bold text-gray-800 mb-4 text-center">Administração</h3>
                <div class="space-y-3">
                    <button
                        onclick="showPublicModal('Administração')"
                        class="w-full py-2 px-4 bg-green-600 text-white rounded-lg font-medium transition-all duration-300 hover:bg-green-700 hover:shadow-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                        Escola Pública
                    </button>
                    <button
                        onclick="showPrivateModal('Administração')"
                        class="w-full py-2 px-4 bg-green-600 text-white rounded-lg font-medium transition-all duration-300 hover:bg-green-700 hover:shadow-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                        Escola Privada
                    </button>
                </div>
            </div>

            <!-- Card Edificações -->
            <div class="bg-white rounded-xl shadow-lg p-6 transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
                <h3 class="text-xl font-bold text-gray-800 mb-4 text-center">Edificações</h3>
                <div class="space-y-3">
                    <button
                        onclick="showPublicModal('Edificações')"
                        class="w-full py-2 px-4 bg-orange-600 text-white rounded-lg font-medium transition-all duration-300 hover:bg-orange-700 hover:shadow-md focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">
                        Escola Pública
                    </button>
                    <button
                        onclick="showPrivateModal('Edificações')"
                        class="w-full py-2 px-4 bg-orange-600 text-white rounded-lg font-medium transition-all duration-300 hover:bg-orange-700 hover:shadow-md focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">
                        Escola Privada
                    </button>
                </div>
            </div>
        </div>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function showPublicModal(course) {
            Swal.fire({
                title: `SEEPS 2024 - ESCOLA PÚBLICA (${course})`,
                html: `
                    <div class="form-group">
                        <label class="form-label">ID</label>
                        <input type="text" id="id" class="form-input">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Português</label>
                        <input type="number" id="port" class="form-input">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Artes</label>
                        <input type="number" id="arte" class="form-input">
                    </div>
                `,
                confirmButtonText: 'Cadastrar',
                showCancelButton: true,
                cancelButtonText: 'Cancelar',
                customClass: {
                    confirmButton: 'button button-update',
                    cancelButton: 'button button-exit'
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    updateCadastro();
                }
            });
        }

        function showPrivateModal(course) {
            Swal.fire({
                title: `SEEPS 2024 - ESCOLA PRIVADA (${course})`,
                html: `
                    <div class="form-group">
                        <label class="form-label">ID</label>
                        <input type="text" id="id" class="form-input">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Português</label>
                        <input type="number" id="port" class="form-input">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Artes</label>
                        <input type="number" id="arte" class="form-input">
                    </div>
                `,
                confirmButtonText: 'Cadastrar',
                showCancelButton: true,
                cancelButtonText: 'Cancelar',
                customClass: {
                    confirmButton: 'button button-update',
                    cancelButton: 'button button-exit'
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    updateCadastro();
                }
            });
        }

        function updateCadastro() {
            const id = document.getElementById('id').value;
            const port = document.getElementById('port').value;
            const arte = document.getElementById('arte').value;

            if (!id || !port || !arte) {
                Swal.fire({
                    icon: 'error',
                    title: 'Erro',
                    text: 'Por favor, preencha todos os campos!'
                });
                return;
            }

            Swal.fire({
                icon: 'success',
                title: 'Sucesso',
                text: `Cadastro atualizado para ID: ${id}`
            });
        }

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
        // Configuração personalizada do SweetAlert2
        const modalConfig = {
            customClass: {
                popup: 'custom-modal',
                input: 'custom-input',
                confirmButton: 'px-6 py-3 bg-gradient-to-r from-green-500 to-teal-500 rounded-lg text-white font-medium hover:from-green-600 hover:to-teal-600 transition-all duration-300',
                cancelButton: 'px-6 py-3 bg-gradient-to-r from-gray-500 to-gray-600 rounded-lg text-white font-medium hover:from-gray-600 hover:to-gray-700 transition-all duration-300'
            },
            buttonsStyling: false
        };

        function createGradeInputs(year) {
            const subjects = [
                'Português', 'Arte', 'Ed. Física', 'Inglês',
                'Ciências', 'Geografia', 'História', 'Religião',
                'Matemática'
            ];

            return `
            <div class="mb-8 animate-fadeIn">
                <div class="flex items-center space-x-4 mb-4">
                    <h3 class="text-xl font-semibold text-white">${year}º Ano</h3>
                    <div class="flex-1 h-px bg-gradient-to-r from-blue-500 to-transparent"></div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    ${subjects.map(subject => `
                        <div class="relative group">
                            <label class="block text-sm font-medium text-gray-300 mb-2">
                                ${subject}
                            </label>
                            <input type="number" 
                                   id="${year}${subject.toLowerCase().replace(' ', '')}"
                                   class="w-full px-4 py-3 bg-gray-800/50 border border-gray-700 rounded-lg
                                          focus:border-blue-500 focus:ring-2 focus:ring-blue-500/50 
                                          transition-all duration-300 text-white placeholder-gray-400"
                                   min="0"
                                   max="10"
                                   step="0.1"
                                   placeholder="0.0"
                                   required
                                   onchange="validateGrade(this)">
                            <div class="absolute inset-0 border border-blue-500/0 rounded-lg group-hover:border-blue-500/50 
                                      pointer-events-none transition-all duration-300"></div>
                        </div>
                    `).join('')}
                </div>
            </div>
        `;
        }

        // Modal para escola pública
        function showPublicModal(course) {
            Swal.fire({
                ...modalConfig,
                title: `<div class="text-2xl font-bold mb-2">
                        ${course} - Escola Pública
                    </div>`,
                width: '80%',
                html: `
                <form id="gradeForm" class="space-y-6 text-left">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <div class="relative group">
                            <label class="block text-sm font-medium text-gray-300 mb-2">
                                Nome Completo
                            </label>
                            <input type="text" 
                                   id="name" 
                                   class="w-full px-4 py-3 bg-gray-800/50 border border-gray-700 rounded-lg
                                          focus:border-blue-500 focus:ring-2 focus:ring-blue-500/50 
                                          transition-all duration-300 text-white"
                                   required>
                        </div>
                        <div class="relative group">
                            <label class="block text-sm font-medium text-gray-300 mb-2">
                                Data de Nascimento
                            </label>
                            <input type="date" 
                                   id="birthDate" 
                                   class="w-full px-4 py-3 bg-gray-800/50 border border-gray-700 rounded-lg
                                          focus:border-blue-500 focus:ring-2 focus:ring-blue-500/50 
                                          transition-all duration-300 text-white"
                                   required>
                        </div>
                    </div>
                    ${[6, 7, 8, 9].map(year => createGradeInputs(year)).join('')}
                </form>
            `,
                confirmButtonText: 'Cadastrar',
                showCancelButton: true,
                cancelButtonText: 'Cancelar',
                showLoaderOnConfirm: true,
                preConfirm: () => {
                    const form = document.getElementById('gradeForm');
                    if (!form.checkValidity()) {
                        Swal.showValidationMessage('Por favor, preencha todos os campos corretamente');
                        return false;
                    }
                    return collectFormData();
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    showSuccessMessage('Cadastro realizado com sucesso!');
                }
            });
        }

        // Modal para escola privada
        function showPrivateModal(course) {
            Swal.fire({
                ...modalConfig,
                title: `<div class="text-2xl font-bold mb-2">
                        ${course} - Escola Privada
                    </div>`,
                width: '80%',
                html: `
                <form id="gradeForm" class="space-y-6 text-left">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <div class="relative group">
                            <label class="block text-sm font-medium text-gray-300 mb-2">
                                Nome Completo
                            </label>
                            <input type="text" 
                                   id="name" 
                                   class="w-full px-4 py-3 bg-gray-800/50 border border-gray-700 rounded-lg
                                          focus:border-blue-500 focus:ring-2 focus:ring-blue-500/50 
                                          transition-all duration-300 text-white"
                                   required>
                        </div>
                        <div class="relative group">
                            <label class="block text-sm font-medium text-gray-300 mb-2">
                                Data de Nascimento
                            </label>
                            <input type="date" 
                                   id="birthDate" 
                                   class="w-full px-4 py-3 bg-gray-800/50 border border-gray-700 rounded-lg
                                          focus:border-blue-500 focus:ring-2 focus:ring-blue-500/50 
                                          transition-all duration-300 text-white"
                                   required>
                        </div>
                    </div>
                    ${[6, 7, 8, 9].map(year => createGradeInputs(year)).join('')}
                </form>
            `,
                confirmButtonText: 'Cadastrar',
                showCancelButton: true,
                cancelButtonText: 'Cancelar',
                showLoaderOnConfirm: true,
                preConfirm: () => {
                    const form = document.getElementById('gradeForm');
                    if (!form.checkValidity()) {
                        Swal.showValidationMessage('Por favor, preencha todos os campos corretamente');
                        return false;
                    }
                    return collectFormData();
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    showSuccessMessage('Cadastro realizado com sucesso!');
                }
            });
        }

        function showSuccessMessage(message) {
            Swal.fire({
                ...modalConfig,
                icon: 'success',
                title: 'Sucesso!',
                text: message,
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true
            });
        }

        function validateGrade(input) {
            const value = parseFloat(input.value);
            if (isNaN(value) || value < 0 || value > 10) {
                input.classList.add('border-red-500');
                input.classList.remove('border-gray-700');
                showError('A nota deve estar entre 0 e 10');
            } else {
                input.classList.remove('border-red-500');
                input.classList.add('border-gray-700');
            }
        }

        function showError(message) {
            const toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            });

            toast.fire({
                icon: 'error',
                title: message
            });
        }

        // Funções auxiliares para coleta de dados
        function collectFormData() {
            // ... (mantém a mesma lógica anterior)
        }
    </script>

    <style>

    </style>
</body>

</html>