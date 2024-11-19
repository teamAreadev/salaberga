<?php
require_once("models/session_manager.php");
lista();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SS - Salaberga Seleciona </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="stylesheet" href="../seeps2024/assets/theme/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="../seeps2024/assets/images/logo.png" type="image/x-icon">
</head>

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
    /* Variables */
    :root {
        --ceara-green: #008C45;
        --ceara-green-dark: #004d00;
        --ceara-orange: '#FFA500';
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
    }

    body {
        font-family: 'Arial', sans-serif;
        background-color: #f5f5f5;
        line-height: 1.6;
    }

    * {
        user-select: none;
    }

    html {
        height: 100%;
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

    .logo-img {
        height: 2.5rem;
        width: auto;
    }

    /* Navigation Actions */
    .nav-actions {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .mobile-menu-btn {
        display: none;
        padding: 0.5rem;
        color: var(--ceara-green);
        background: transparent;
        border: none;
        cursor: pointer;
        font-size: 1.5rem;
        outline: none;
        /* Remove o outline padrão */
        -webkit-tap-highlight-color: transparent;
        /* Remove o highlight em dispositivos móveis */
    }

    /* Remove o outline azul ao clicar */
    .mobile-menu-btn:focus {
        outline: none;
    }

    /* Opcional: adiciona um efeito visual próprio para feedback */
    .mobile-menu-btn:active {
        transform: scale(0.95);
    }

    .mobile-menu-btn i {
        font-size: 1.8rem;
    }

    @media (max-width: 768px) {
        .mobile-menu-btn {
            display: block;
            padding: 0.5rem;
        }
    }

    /* Login Button */
    .login-button {
        background-color: var(--ceara-green);
        color: var(--ceara-white);
        padding: 0.75rem 2rem;
        border-radius: 0.375rem;
        font-weight: 600;
        font-size: 0.875rem;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        transition: all 0.3s ease;
        border: none;
        cursor: pointer;
    }

    .login-button:hover {
        background-color: var(--ceara-green-dark);
        transform: translateY(-1px);
    }

    .login-button:active {
        transform: translateY(0);
    }

    .main-content {
        padding: 2rem 0;
    }

    .container {
        max-width: 1100px;
        margin: 0 auto;
        padding: 0 1rem;
    }

    /* ==========================================
   SEÇÃO DE CURSOS
========================================== */
    .courses-section {
        padding: 2rem 0;
    }

    .courses-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        /* Reduzido */
        gap: 2rem;
        padding: 1rem;
    }

    /* ==========================================
   CARDS DOS CURSOS
========================================== */
    .course-card {
        background-color: var(--ceara-white);
        padding: 3.2rem 1rem;
        /* Reduzido */
        text-align: center;
        border-radius: 12px;
        box-shadow: var(--shadow-sm);
        min-height: 150px;
        /* Reduzido */
        display: flex;
        flex-direction: column;
        justify-content: center;
        position: relative;
        transition: all var(--transition-duration) var(--transition-timing);
        overflow: hidden;
    }

    .card-content {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0.4rem;
        /* Reduzido */
        transition: transform var(--transition-duration) var(--transition-timing);
    }

    /* Ícones */
    .course-card i {
        font-size: 1.3rem;
        /* Reduzido */
        color: var(--ceara-green);
        margin-bottom: 0.3rem;
        /* Reduzido */
        transition: transform var(--transition-duration) var(--transition-timing);
    }

    /* Títulos */
    .course-card h3 {
        color: var(--gray-dark);
        font-size: 1rem;
        /* Reduzido */
        font-weight: 600;
        margin-bottom: 0.4rem;
        /* Reduzido */
    }

    /* Detalhes do Card */
    .card-details {
        opacity: 0;
        visibility: hidden;
        height: 0;
        transform: translateY(10px);
        transition: all var(--transition-duration) var(--transition-timing);
    }

    .course-description {
        color: var(--gray-600);
        text-align: center;
        margin-bottom: 0.6rem;
        /* Reduzido */
        font-size: 0.8rem;
        /* Reduzido */
        line-height: 1.3;
    }

    /* Informações do Curso */
    .course-info {
        display: flex;
        justify-content: center;
        gap: 0.8rem;
        /* Reduzido */
        margin-bottom: 0.8rem;
        /* Reduzido */
    }

    .course-info span {
        display: flex;
        align-items: center;
        gap: 0.2rem;
        /* Reduzido */
        color: var(--gray-600);
        font-size: 0.75rem;
        /* Reduzido */
    }

    .course-info i {
        font-size: 0.8rem;
        /* Reduzido */
        margin-bottom: 0;
    }

    /* Botão */
    .course-button {
        display: inline-block;
        padding: 0.4rem 0.8rem;
        /* Reduzido */
        background-color: var(--ceara-green);
        color: var(--ceara-white);
        border-radius: 16px;
        /* Reduzido */
        text-decoration: none;
        font-weight: 500;
        font-size: 0.75rem;
        /* Reduzido */
        transition: all var(--transition-duration) var(--transition-timing);
    }

    /* Efeitos Hover */
    .course-card:hover {
        min-height: 220px;
        /* Reduzido */
        padding: 1.4rem 1.2rem;
        /* Reduzido */
        box-shadow: var(--shadow-md);
        transform: scale(var(--hover-scale));
    }

    .course-card:hover .card-details {
        opacity: 1;
        visibility: visible;
        height: auto;
        transform: translateY(0);
    }

    .course-card:hover i {
        transform: scale(1.1);
    }

    .course-button:hover {
        background-color: var(--ceara-green-dark);
        transform: translateY(-2px);
    }

    /* Modal Styles */
    .modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 1050;
        overflow-y: auto;
        opacity: 0;
        transition: opacity 0.3s ease-in-out;
        font-family: 'Raleway', sans-serif;
    }

    .modal.show {
        opacity: 1;
        display: block;
        animation: fadeIn 0.3s ease-out;
    }

    .modal-dialog {
        position: relative;
        width: 400px;
        margin: 10% auto;
        transform: translateY(-50px);
        transition: transform 0.3s ease-out;
    }

    .modal.show .modal-dialog {
        transform: translateY(0);
        animation: slideDown 0.3s ease-out;
    }

    .modal-content {
        position: relative;
        background-color: var(--ceara-white);
        width: 400px;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        padding: 2rem;
    }

    .modal-header {
        text-align: center;
        border-bottom: none;
        padding-bottom: 1.5rem;
    }



    .modal-title-container {
        display: flex;
        justify-content: center;
        margin-top: 1rem;
        margin-bottom: 1.5rem;
    }

    .modal-title {
        font-family: 'Inter', sans-serif;
        font-size: 1.5rem;
        font-weight: 700;
        letter-spacing: -0.025em;
        color: var(--gray-dark);
        text-transform: uppercase;
    }

    .modal-body {
        padding: 0;
        width: 100%;
    }

    .form-control {
        width: 100%;
        padding: 0.75rem 1rem;
        font-size: 1rem;
        line-height: 1.5;
        color: var(--gray-dark);
        background-color: var(--gray-light);
        border: 1px solid #e5e5e5;
        border-radius: 4px;
        transition: all 0.3s ease;
        margin-bottom: 1rem;
    }

    .form-control:focus {
        border-color: var(--ceara-green);
        box-shadow: 0 0 0 2px rgba(0, 140, 69, 0.2);
        outline: none;
        background-color: var(--ceara-white);
    }

    #separadorBtn {
        margin-top: 1.5rem;
        text-align: center;
    }

    .btn-success {
        background-color: var(--ceara-green);
        color: var(--ceara-white);
        border: none;
        padding: 0.75rem 2rem;
        font-size: 0.875rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        border-radius: 4px;
        cursor: pointer;
        transition: all 0.3s ease;
        width: 100%;
    }

    .btn-success:hover {
        background-color: var(--ceara-green-dark);
        transform: translateY(-1px);
    }

    .btn-success:active {
        transform: translateY(0);
    }

    .additional-links {
        margin-top: 1.5rem;
        text-align: center;
    }

    .additional-links a {
        color: var(--ceara-green);
        text-decoration: none;
        font-size: 0.875rem;
        transition: color 0.3s ease;
    }

    .additional-links a:hover {
        color: var(--primary);
        text-decoration: underline;
    }

    .divider {
        color: var(--gray-dark);
        margin: 0 0.5rem;
        opacity: 0.5;
    }

    .modal .logo-container {
        margin-bottom: 1.5rem;
        justify-content: center;
    }

    .modal .logo-img {
        height: 60px;
        width: auto;
    }

    /* Screen Reader Only */
    .sr-only {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        white-space: nowrap;
        border: 0;
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

    @keyframes slideDown {
        from {
            transform: translateY(-10px);
            opacity: 0;
        }

        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .mobile-menu-btn {
            display: block;
        }

        .nav-links {
            position: absolute;
            top: 4rem;
            right: 0;
            background-color: var(--ceara-white);
            width: 100%;
            padding: 1rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: none;
        }

        .nav-links.active {
            display: block;
        }

        .login-button {
            width: 100%;
            text-align: center;
        }

        .courses-grid {
            grid-template-columns: 1fr;
            padding: 1rem;
        }

        .footer-grid {
            grid-template-columns: 1fr;
            text-align: center;
        }

        .contact-info p {
            justify-content: center;
        }

        .modal-dialog,
        .modal-content {
            width: 95%;
            margin: 20px auto;
        }

        .modal-body {
            padding: 1rem;
        }

        .btn-success {
            padding: 0.75rem 1rem;
        }

        .modal-title {
            font-size: 1.5rem;
        }

        .modal .logo-img {
            height: 50px;
        }
    }

    /* Utility Classes */
    .text-center {
        text-align: center;
    }

    .mt-1 {
        margin-top: 0.25rem;
    }

    .mt-2 {
        margin-top: 0.5rem;
    }

    .mt-3 {
        margin-top: 1rem;
    }

    .mt-4 {
        margin-top: 1.5rem;
    }

    .mt-5 {
        margin-top: 2rem;
    }

    .mb-1 {
        margin-bottom: 0.25rem;
    }

    .mb-2 {
        margin-bottom: 0.5rem;
    }

    .mb-3 {
        margin-bottom: 1rem;
    }

    .mb-4 {
        margin-bottom: 1.5rem;
    }

    .mb-5 {
        margin-bottom: 2rem;
    }

    .input-group {
        position: relative;
        display: flex;
        width: 100%;
        margin-bottom: 1rem;
    }

    .input-group-addon {
        display: flex;
        align-items: center;
        padding: 0.75rem 1rem;
        font-size: 1rem;
        color: var(--gray-dark);
        background-color: var(--gray-light);
        border: 1px solid #e5e5e5;
        border-right: none;
        border-radius: 4px 0 0 4px;
        transition: all 0.3s ease;
    }

    .input-group .form-control {
        border-left: none;
        border-radius: 0 4px 4px 0;
        margin-bottom: 0;
        transition: all 0.3s ease;
    }

    /* Ícone normal */
    .input-group-addon i {
        width: 16px;
        text-align: center;
        color: var(--ceara-green);
        transition: all 0.3s ease;
    }

    /* Estado de foco */


    /* Mudança do addon quando o input está em foco */
    .input-group .form-control:focus~.input-group-addon,
    .input-group .form-control:focus+.input-group-addon {
        background-color: var(--ceara-white);
        border-color: var(--ceara-green);
    }

    /* Mudança do ícone quando o input está em foco */
    .input-group .form-control:focus~.input-group-addon i,
    .input-group .form-control:focus+.input-group-addon i {
        color: var(--ceara-green);
    }

    /* Estado hover */
    .input-group:hover .input-group-addon,
    .input-group:hover .form-control {
        border-color: var(--ceara-green);
    }

    /* Correção para garantir que não haja dupla borda */
    .input-group .form-control:focus {
        border-left: none;
    }

    .input-group-addon:first-child {
        border-right: 0;
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

    .logo-img {
        width: 200px;
        /* Ajuste para o tamanho que preferir */
        height: auto;
        /* Mantém a proporção da imagem */
        background-image: none;
        margin-top: 10px;
    }
</style>

<body class="min-h-screen flex flex-col">
    <!-- Header/Navbar -->
    <header class="header-main">
        <nav class="nav-container">
            <div class="nav-content">
                <div class="logo-container">
                    <img src="assets/images/LOGO_new.png" alt="Logo EEEP" class="logo-img w-32 h-auto"> <!-- Aumenta o tamanho da logo -->
                </div>

                <div class="nav-actions">
                    <button id="mobile-menu" class="mobile-menu-btn">
                        <span class="sr-only">Abrir menu</span>
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="nav-links">
                        <button
                            id="openLoginModal"
                            class="px-6 py-2 text-white bg-[#008C45] rounded-lg hover:bg-[#004d00] 
               focus:outline-none focus:ring-2 focus:ring-[#008C45] transition duration-200">
                            ENTRAR
                        </button>
                    </div>

                    <!-- Modal (inicialmente escondido) -->
                    <div id="loginModal"
                        class="hidden fixed inset-0 bg-black/70 backdrop-blur-sm 
            overflow-y-auto h-full w-full z-50">
                        <!-- Adicionado mt-[-8%] para subir o modal -->
                        <div class="flex items-center justify-center min-h-screen p-4 mt-[-4%]">
                            <div class="relative w-96 shadow-[0_6px_12px_rgba(0,0,0,0.2)] 
                    rounded-2xl bg-white p-6">
                                <!-- Modal Header -->
                                <div class="flex items-center justify-between mb-6">
                                    <h3 class="text-2xl font-bold text-[#333333]">Login</h3>
                                    <button id="closeLoginModal"
                                        class="text-[#666666] hover:text-[#333333] 
                               transition-colors duration-400 focus:outline-none">
                                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>

                                <!-- Modal Body -->
                                <form id="loginForm" class="space-y-4" action="controllers/autentica.php" method="post">
                                    <!-- Nome Input -->
                                    <div>
                                        <label for="email" class="block text-sm font-medium text-[#333333]">Nome</label>
                                        <input
                                            type="text"
                                            id="email"
                                            name="email"
                                            class="mt-1 block w-full px-4 py-3 border border-[#666666] 
                               rounded-lg shadow-sm focus:outline-none focus:ring-2 
                               focus:ring-[#008C45] focus:border-[#008C45]
                               transition-all duration-400"
                                            placeholder="Digite seu nome"
                                            required>
                                    </div>

                                    <!-- Senha Input -->
                                    <div>
                                        <label for="password" class="block text-sm font-medium text-[#333333]">Senha</label>
                                        <input
                                            type="password"
                                            id="password"
                                            name="password"
                                            class="mt-1 block w-full px-4 py-3 border border-[#666666] 
                               rounded-lg shadow-sm focus:outline-none focus:ring-2 
                               focus:ring-[#008C45] focus:border-[#008C45]
                               transition-all duration-400"
                                            placeholder="Digite sua senha"
                                            required>
                                    </div>

                                    <!-- Lembrar-me Checkbox -->
                                    <div class="flex items-center">
                                        <input
                                            type="checkbox"
                                            id="remember"
                                            name="remember"
                                            class="w-5 h-5 text-[#008C45] border-[#666666] rounded 
                               focus:ring-[#008C45] transition-all duration-400">
                                        <label for="remember" class="ml-2 text-sm text-[#666666]">
                                            Lembrar-me
                                        </label>
                                    </div>

                                    <!-- Modal Footer -->
                                    <div class="flex space-x-3 pt-4">
                                        <button
                                            type="button"
                                            id="cancelButton"
                                            class="flex-1 px-4 py-3 text-[#666666] bg-white 
                               border border-[#666666] rounded-lg hover:bg-gray-100 
                               transition-all duration-400">
                                            Cancelar
                                        </button>
                                        <button
                                            type="submit"
                                            class="flex-1 px-4 py-3 text-white bg-[#008C45] 
                               rounded-lg hover:bg-[#004d00] 
                               transition-all duration-400
                               shadow-[0_4px_8px_rgba(0,0,0,0.1)]">
                                            Entrar
                                        </button>
                                    </div>

                                    <?php if (isset($_GET['erro'])) { ?>
                                        <div class="text-[#FFA500] text-center mt-4 bg-[rgba(255,165,0,0.1)] 
                              p-3 rounded-lg border border-[#FFA500]">
                                            <p class="text-sm">Email ou senha incorretos</p>
                                        </div>
                                    <?php } ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </nav>
    </header>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.getElementById('loginModal');
            const openButton = document.getElementById('openLoginModal');
            const closeButton = document.getElementById('closeLoginModal');
            const cancelButton = document.getElementById('cancelButton');
            const loginForm = document.getElementById('loginForm');

            // Função para abrir o modal
            function openModal() {
                modal.classList.remove('hidden');
                // Adiciona animação de fade in
                modal.classList.add('fade-in');
            }

            // Função para fechar o modal
            function closeModal() {
                modal.classList.add('hidden');
            }

            // Event Listeners
            openButton.addEventListener('click', openModal);
            closeButton.addEventListener('click', closeModal);
            cancelButton.addEventListener('click', closeModal);

            // Fechar modal quando clicar fora dele
            modal.addEventListener('click', function(e) {
                if (e.target === modal) {
                    closeModal();
                }
            });

            // Prevenir fechamento quando clicar dentro do modal
            modal.querySelector('.relative').addEventListener('click', function(e) {
                e.stopPropagation();
            });

            // Fechar modal com tecla ESC
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
                    closeModal();
                }
            });
        });
    </script>
    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes slideIn {
            from {
                transform: translateY(-10%);
            }

            to {
                transform: translateY(0);
            }
        }

        .fade-in {
            animation: fadeIn 0.3s ease-out;
        }

        .fade-in>div {
            animation: slideIn 0.3s ease-out;
        }
    </style>
    <main class="flex-grow py-16 px-4 mt-20 font-poppins">
        <section class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <?php
                $cursos = [
                    1 => ['nome' => 'ENFERMAGEM', 'icone' => 'fa-user-nurse'],
                    2 => ['nome' => 'INFORMÁTICA', 'icone' => 'fa-laptop-code'],
                    3 => ['nome' => 'ADMINISTRAÇÃO', 'icone' => 'fa-briefcase'],
                    4 => ['nome' => 'EDIFICAÇÕES', 'icone' => 'fa-building']
                ];

                foreach ($cursos as $id => $curso) {
                    $dados = $_SESSION["curso_$id"] ?? [];
                ?>
                    <div class="course-card relative overflow-hidden bg-white rounded-lg shadow-lg cursor-pointer group md:hover:cursor-pointer" onmouseenter="toggleCard(this)">
                        <div class="p-6 text-center front">
                            <i class="fas <?php echo $curso['icone']; ?> text-4xl text-ceara-green mb-4"></i>
                            <h3 class="text-4xl font-bold" style="font-size: 25px"><?php echo $curso['nome']; ?></h3>
                        </div>
                        <div class="absolute inset-0 bg-white transform translate-y-full md:group-hover:translate-y-0 transition-transform duration-300 ease-in-out back">
                            <div class="p-4">
                                <i class="fas <?php echo $curso['icone']; ?> text-4xl text-ceara-green mb-4"></i>
                                <h3 class="text-3xl font-bold mb-6"><?php echo $curso['nome']; ?></h3>
                                <div class="flex flex-col items-start space-y-0" style="margin-left: 28px;">
                                    <div class="info-text" style="display: flex; align-items: center;">
                                        <i class="fas fa-users info-icon text-ceara-green" style="font-size: 14px;"></i>
                                        <span style="margin-left: 12px;">Total Inscritos: <?php echo $dados['total'] ?? 0; ?></span>
                                    </div>
                                    
                                    <div class="info-text" style="display: flex; align-items: center;">
                                        <i class="fas fa-home info-icon text-ceara-green" style="font-size: 14px;"></i>
                                        <span style="margin-left: 12px;">Pública - AC: <?php echo $dados['Pública'] ?? 0; ?></span>
                                    </div>
                                    <div class="info-text" style="display: flex; align-items: center;">
                                        <i class="fas fa-book info-icon text-ceara-green" style="font-size: 14px; margin-left: 2px;"></i>
                                        <span style="margin-left: 14px;"> Pública - COTA: <?php echo $dados['bairro_publica'] ?? 0; ?></span>
                                    </div>
                                    <div class="info-text" style="display: flex; align-items: center;">
                                        <i class="fas fa-building info-icon text-ceara-green" style="font-size: 14px;"></i>
                                        <span style="margin-left: 19px;">Privada - AC: <?php echo $dados['privada'] ?? 0; ?></span>
                                    </div>
                                    <div class="info-text" style="display: flex; align-items: center;">
                                        <i class="fas fa-home info-icon text-ceara-green" style="font-size: 14px;"></i>
                                        <span style="margin-left: 12px;">Privada - COTA: <?php echo $dados['bairro_privada'] ?? 0; ?></span>
                                    </div>
                                    <div class="info-text" style="display: flex; align-items: center;">
                                        <i class="fas fa-wheelchair info-icon text-ceara-green" style="font-size: 14px;"></i>
                                        <span style="margin-left: 14px;">PCD: <?php echo $dados['pcd'] ?? 0; ?></span>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <script>
                function toggleCard(element) {
                    const back = element.querySelector('.back');
                    back.style.transform = back.style.transform === 'translateY(0px)' ? 'translateY(100%)' : 'translateY(0)';
                }
            </script>
        </section>
    </main>
    <script>
        function toggleCard(card) {
            // Verifica se está em um dispositivo móvel
            if (window.innerWidth < 768) {
                // Fecha todos os outros cards
                document.querySelectorAll('.course-card .back').forEach(back => {
                    if (back.parentElement !== card) {
                        back.style.transform = 'translateY(100%)';
                    }
                });

                // Toggle do card clicado
                const backContent = card.querySelector('.back');
                const currentTransform = backContent.style.transform;

                if (currentTransform === 'translateY(0%)') {
                    backContent.style.transform = 'translateY(100%)';
                } else {
                    backContent.style.transform = 'translateY(0%)';
                }
            }
        }

        // Fecha o card quando clicar fora dele (apenas mobile)
        document.addEventListener('click', (e) => {
            if (window.innerWidth < 768 && !e.target.closest('.course-card')) {
                document.querySelectorAll('.course-card .back').forEach(back => {
                    back.style.transform = 'translateY(100%)';
                });
            }
        });

        // Previne que o clique nos links propague para o card
        document.querySelectorAll('.course-card a').forEach(link => {
            link.addEventListener('click', (e) => {
                e.stopPropagation();
            });
        });
    </script>
    <footer class="text-white font-sans w-full mt-auto py-4" style="background-color: #008C45">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
                <!-- Identificação Institucional -->
                <div class="p-2">
                    <h4 class="text-orange-400 text-lg font-bold mb-3">Salaberga Seleciona</h4>
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
                                <a href="https://www.linkedin.com/in/matheus-felix-74489329a/" target="_blank" rel="noopener noreferrer"
                                    class="flex items-center text-sm hover:text-orange-400 transition-colors">
                                    <i class="fab fa-linkedin text-orange-400 mr-2"></i>
                                    Matheus Felix
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/lavosier-nascimento-4b124a2b8/?trk=opento_sprofile_topcard" target="_blank" rel="noopener noreferrer"
                                    class="flex items-center text-sm hover:text-orange-400 transition-colors">
                                    <i class="fab fa-linkedin text-orange-400 mr-2"></i>
                                    Lavosier Nascimento
                                </a>
                            </li>
                        </ul>

                        <!-- Segunda coluna (2 desenvolvedores) -->
                        <ul class="space-y-2">
                            <li>
                                <a href="https://www.linkedin.com/in/roger-cavalcante/" target="_blank"
                                    rel="noopener noreferrer"
                                    class="flex items-center text-sm hover:text-orange-400 transition-colors">
                                    <i class="fab fa-linkedin text-orange-400 mr-2"></i>
                                    Roger Cavalcante
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/pedro-uch%C3%B4a-de-abreu-67723429a/?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank" rel="noopener noreferrer"
                                    class="flex items-center text-sm hover:text-orange-400 transition-colors">
                                    <i class="fab fa-linkedin text-orange-400 mr-2"></i>
                                    Pedro Uchôa
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Copyright -->
            <div class="border-t border-white/10 pt-3 text-center text-xs">
                <p>&copy; 2024 SS - Todos os direitos reservados</p>
            </div>
        </div>
    </footer>
    <!-- Scripts -->
    <script src="../seeps2024/assets/theme/js/main.js"></script>
</body>

</html>