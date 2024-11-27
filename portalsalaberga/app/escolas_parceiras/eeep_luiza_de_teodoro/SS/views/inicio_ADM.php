<?php
require_once('../controllers/controller_sessao/autenticar_sessao.php');
require_once('../controllers/controller_sessao/verificar_sessao.php');

require_once('../models/cursos.php');
$tabela_curso = cursos();

?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SS - Salaberga Seleciona </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="../assets/theme/js/modal.js"></script>
    <script src="../assets/theme/js/sidebar.js"></script>
    <link rel="shortcut icon" href="../../SS/assets/images/logo.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet">

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

        .swal2-confirm:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            background-color: #e0e0e0 !important;
            border-color: #cccccc !important;
            color: #666666 !important;
            pointer-events: none;
            box-shadow: none;
        }
    </style>
</head>

<body>
    <header class="w-full bg-white shadow-sm">
        <nav class="container mx-auto px-4">
            <div class="flex items-center justify-between h-16">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <img
                        src="../assets/images/LOGO_new.png"
                        alt="Logo EEEP"
                        class="w-36 h-auto mt-2.5">
                </div>

                <!-- Botão Menu -->
                <div class="flex items-center">
                    <button
                        id="mobile-menu"
                        class="p-2 rounded-lg transition-all duration-200 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-green-500"
                        aria-label="Menu"
                        onclick="toggleSidebar()">
                        <svg
                            class="w-8 h-8 text-[#008C45] transition-transform duration-200"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>

                <!-- Sidebar -->
                <div
                    id="sidebar"
                    class="fixed top-0 right-0 w-64 h-full bg-white shadow-lg rounded-l-lg transform translate-x-full transition-transform duration-300 ease-in-out z-50">
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-6">
                            <h3 class="text-2xl font-bold text-gray-800">Menu</h3>
                            <button
                                id="closeSidebar"
                                class="p-2 rounded-lg transition-colors duration-200 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-green-500"
                                aria-label="Fechar menu"
                                onclick="toggleSidebar()">
                                <svg
                                    class="w-6 h-6 text-[#008C45]"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                        <!-- Itens do Menu -->
                        <ul class="flex flex-col space-y-3">

                            <li class="mt-4">
                                <button onclick="openInsertUserModal();" class="w-full flex items-center px-4 py-3 text-base rounded-full border-2 border-blue-500 text-blue-500 font-semibold transition-all duration-300 ease-in-out hover:bg-blue-500 hover:text-white hover:shadow-md transform hover:scale-100 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12v4m0 0l4 4m-4-4l-4 4m-4-4v-4m0 0l-4-4m4 4l4-4" />
                                    </svg>
                                    Inserir Usuário
                                </button>
                            </li>

                            <li>
                                <button onclick="openUpdateNotesModal(); toggleOverlay()" class="w-full flex items-center px-4 py-3 text-base rounded-full border-2 border-ceara-orange text-ceara-orange font-semibold transition-all duration-300 ease-in-out hover:bg-ceara-orange hover:text-ceara-white hover:shadow-md transform hover:scale-100 focus:outline-none focus:ring-2 focus:ring-ceara-orange">
                                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                    </svg>
                                    Atualizar
                                </button>
                            </li>

                            <li>
                                <button onclick="showReportsModal(); toggleOverlay()" class="w-full flex items-center px-4 py-3 text-base rounded-full border-2 border-ceara-green text-ceara-green font-semibold transition-all duration-300 ease-in-out hover:bg-ceara-green hover:text-ceara-white hover:shadow-md transform hover:scale-100 focus:outline-none focus:ring-2 focus:ring-ceara-green">
                                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                    Relatórios
                                </button>
                            </li>
                            <li>
                                <button onclick="showResultsModal(); toggleOverlay()" class="w-full flex items-center px-4 py-3 text-base rounded-full border-2 border-gray-600 text-gray-600 font-semibold transition-all duration-300 ease-in-out hover:bg-gray-600 hover:text-ceara-white hover:shadow-md transform hover:scale-100 focus:outline-none focus:ring-2 focus:ring-gray-500">
                                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                    </svg>
                                    Resultados
                                </button>
                            </li>
                            <li>
                                <button onclick="showCourseModal(); toggleOverlay()" class="w-full flex items-center px-4 py-3 text-base rounded-full border-2 border-orange-500 text-orange-500 font-semibold transition-all duration-300 ease-in-out hover:bg-orange-500 hover:text-ceara-white hover:shadow-md transform hover:scale-100 focus:outline-none focus:ring-2 focus:ring-orange-400">
                                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                    </svg>
                                    Cadastrar Curso
                                </button>
                            </li>



                            <li>
                                <button onclick="showDeleteConfirmationModal();" class="w-full flex items-center px-4 py-3 text-base rounded-full border-2 border-purple-600 text-purple-600 font-semibold transition-all duration-300 ease-in-out hover:bg-purple-600 hover:text-ceara-white hover:shadow-md transform hover:scale-100 focus:outline-none focus:ring-2 focus:ring-purple-500">
                                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12v4m0 0l4 4m-4-4l-4 4m-4-4v-4m0 0l-4-4m4 4l4-4" />
                                    </svg>
                                    Limpar banco
                                </button>
                            </li>




                            <a href="../index.php" class="w-full flex items-center px-4 py-3 text-base rounded-full border-2 border-red-600 text-red-600 font-semibold transition-all duration-300 ease-in-out hover:bg-red-600 hover:text-ceara-white hover:shadow-md transform hover:scale-100 focus:outline-none focus:ring-2 focus:ring-red-500">
                                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                </svg>
                                Sair
                            </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Modal do Cadastrar cursos -->
    <div id="courseModal" class="fixed inset-0 z-50 hidden">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative z-50 max-w-md mx-auto mt-20 bg-white rounded-lg shadow-lg">
            <div class="p-6">
                <h3 class="text-xl font-semibold mb-4 text-gray-800">Cadastrar Novo Curso</h3>
                <form id="courseForm">
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Nome do Curso</label>
                        <input type="text" id="courseName"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 transition-all duration-200">
                    </div>

                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-3">Cor do Curso</label>

                        <div class="flex items-center gap-4">
                            <div id="colorPreview" class="w-16 h-16 rounded-lg shadow-inner border border-gray-200"></div>
                            <div class="flex flex-col gap-2">
                                <input type="color" id="courseColor" class="w-full h-10 cursor-pointer rounded-md"
                                    onchange="updateColorPreview(this.value)">
                                <span class="text-xs text-gray-500">Clique para escolher uma cor</span>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-end gap-3 mt-6">
                        <button type="button" onclick="closeCourseModal()"
                            class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 rounded-md hover:bg-gray-200 transition-all duration-200">
                            Cancelar
                        </button>
                        <button type="submit"
                            class="px-4 py-2 text-sm font-medium text-white bg-green-600 rounded-md hover:bg-green-700 transition-all duration-200">
                            Salvar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--fim do codigo modal-->

    <!-- Overlay -->
    <div class="sidebar-overlay fixed inset-0 bg-black bg-opacity-50 opacity-0 invisible transition-all duration-300 ease-in-out z-40"></div>

    <style>
        .sidebar-overlay.active {
            opacity: 1;
            visibility: visible;
            backdrop-filter: blur(5px);
            /* Adiciona desfoque ao fundo */
        }

        #mobile-menu:hover svg {
            transform: scale(1.1);
            transition: transform 0.2s ease;
        }

        /* Estilos adicionais para o sidebar */
        #sidebar {
            background: linear-gradient(to bottom right, #f9f9f9, #ffffff);
            border-right: 1px solid #e0e0e0;
        }

        #sidebar h3 {
            border-bottom: 2px solid #008C45;
            padding-bottom: 10px;
        }

        #sidebar ul {
            padding-top: 10px;
        }
    </style>

    <!--estilo css do card-->

    <p class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 py-12" style="position:relative; margin-top: 100px"></p>
    <style>
        #grid-container {
            display: flex;
            flex-wrap: wrap;
            gap: 1.5rem;
            width: 100%;
            padding: 1rem;
            justify-content: flex-start;
        }
    </style>

    <div id="grid-container">
        <?php foreach ($tabela_curso as $curso) { ?>

            <style>
                @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Source+Sans+Pro:wght@600&display=swap');

                .card {
                    flex: 0 0 calc(300% - 1.3rem);
                    max-width: calc(300% - 1.3rem);
                    background-color: white;
                    border-radius: 1.5rem;
                    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
                    padding: 1.5rem;
                    border: 1px solid #f3f4f6;
                    transform: translateZ(0);
                    transition: all 300ms;
                }

                .card:hover {
                    transform: scale(1.05);
                    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
                }

                .card-content {
                    display: flex;
                    flex-direction: column;
                    height: 100%;
                    justify-content: space-between;
                }

                .card-title {
                    font-family: 'Montserrat', sans-serif;
                    font-size: 1.5rem;
                    color: #1f2937;
                    margin-bottom: 1.5rem;
                    text-align: center;
                    font-weight: 700;
                    letter-spacing: -0.5px;
                }

                .button-group {
                    display: flex;
                    flex-direction: column;
                    gap: 1rem;
                }

                .button {
                    width: 100%;
                    padding: 0.625rem 1rem;
                    background-color: #008C45;
                    color: white;
                    border-radius: 9999px;
                    font-family: 'Source Sans Pro', sans-serif;
                    font-size: 1rem;
                    font-weight: 600;
                    letter-spacing: 0.2px;
                    transition: all 300ms;
                    border: none;
                    cursor: pointer;
                }

                .button:hover {
                    background-color: #008C45;
                    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
                }

                .button:focus {
                    outline: none;
                    box-shadow: 0 0 0 4px rgba(239, 68, 68, 0.3);
                }

                @media (max-width: 1400px) {
                    .card {
                        flex: 0 0 calc(25% - 1.2rem);
                        max-width: calc(25% - 1.2rem);
                    }
                }

                @media (max-width: 1200px) {
                    .card {
                        flex: 0 0 calc(33.333% - 1.2rem);
                        max-width: calc(33.333% - 1.2rem);
                    }
                }

                @media (max-width: 768px) {
                    .card {
                        flex: 0 0 calc(50% - 1.2rem);
                        max-width: calc(50% - 1.2rem);
                    }
                }

                @media (max-width: 480px) {
                    .card {
                        flex: 0 0 100%;
                        max-width: 100%;
                    }
                }

                @media (min-width: 1024px) {
                    .card {
                        padding: 2rem;
                    }

                    .card-title {
                        font-size: 1.875rem;
                        margin-bottom: 2rem;
                    }

                    .button {
                        padding: 0.75rem 1.5rem;
                        font-size: 1.125rem;
                    }
                }
            </style>

            <div class="grid-container">
                <!-- Cada card ocupara 20% da largura (menos o gap) 👍👍👍 -->
                <div class="card">
                    <div class="card-content">
                        <h3 class="card-title">
                            <?php echo $curso['nome_curso']; ?>
                        </h3>
                        <div class="button-group">
                            <button onclick="createForm()" class="button">
                                Escola Pública
                            </button>
                            <button onclick="createForm()" class="button">
                                Escola Privada
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                function createForm() {
                    return `
    <form id="Form" action="../controllers/controller.php" method="POST" class="w-auto bg-[--ceara-white] rounded-xl shadow-md">
        <!-- Cabeçalho -->
        <div class="bg-[#DC2626] p-3 rounded-t-xl">
            <h2 class="text-3xl font-bold text-[--ceara-white] text-center mb-2">Formulário de <?php echo $curso['nome_curso']?></h2>
        </div>

        <!-- Informações Pessoais -->
        <div class="grid grid-cols-1 md:grid-cols-6 gap-4 p-4">
            <div class="flex flex-col md:col-span-6">
                <input type="text" name="nome" class="px-3 py-1.5 border border-[--gray-600] rounded-md focus:ring-1 focus:ring-[#DC2626] w-full text-center"  oninput="removeAccents(this)"   placeholder="Nome Completo" required>
            </div>

           <div class="flex flex-col md:col-span-1">
    <input type="text" name="nasc" maxlength="10" placeholder="DD/MM/AAAA" 
           class="px-6 py-1.5 border border-[--gray-600] rounded-md focus:ring-1 focus:ring-[#DC2626] w-full" 
           oninput="maskNascimento(this)" required>
</div>

            <div class="flex flex-col md:col-span-1">
                <input type="text" name="curso" value="Enfermagem" class="px-3 py-1.5 bg-gray-50 border border-[--gray-600] rounded-md w-full" disabled>
                <input type="hidden" name="curso" value="Enfermagem">
            </div>

            <div class="flex flex-col md:col-span-1">
                <input type="text" name="${schoolType}" value="${schoolType}" class="px-3 py-1.5 bg-gray-50 border border-[--gray-600] rounded-md w-full" disabled>
                <input type="hidden" name="publica" value="${schoolType}">
            </div>

            <div class="flex flex-col md:col-span-2">
                <select name="bairro" class="px-3 py-1.5 border border-[--gray-600] rounded-md focus:ring-1 focus:ring-[#DC2626] w-full" required>
                    <option value="">Selecione um bairro</option>
                    <option value="Outra Banda">Outra Banda</option>
                    <option value="Outros Bairros">Outros Bairros</option>
                </select>
            </div>

            <div class="flex items-center md:col-span-1">
                <label for="pcd" class="text-sm text-[--gray-600] mr-2">PCD</label>
                <input type="checkbox" id="pcd" name="pcd" value="1" class="w-4 h-4 text-[#DC2626] border border-[--gray-600] rounded">
            </div>
        </div>

        <!-- Notas -->
        <div class="space-y-3 px-4">
            <!-- 6º Ano -->
            <div class="bg-white p-4 rounded-lg shadow-sm">
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-10 gap-2 md:gap-3">
                    <div>
                        <h3 class="text-lg md:text-xl font-semibold text-[#DC2626] mb-2 pb-1 border-b">6º Ano</h3>
                    </div>
                    <div>
                        <input type="text" name="lp6" placeholder="PORTUGUÊS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="a6" placeholder="ARTES" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="m6" placeholder="MATEMÁTICA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="h6" placeholder="HISTÓRIA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="g6" placeholder="GEOGRAFIA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="c6" placeholder="CIÊNCIAS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="i6" placeholder="INGLÊS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="ef6" placeholder="ED. FÍSICA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="r6" placeholder="RELIGIÃO" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" required oninput="maskNota(this)">
                    </div>
                </div>
            </div>

            <!-- 7º Ano -->
            <div class="bg-white p-4 rounded-lg shadow-sm">
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-10 gap-2 md:gap-3">
                    <div>
                        <h3 class="text-lg md:text-xl font-semibold text-[#DC2626] mb-2 pb-1 border-b">7º Ano</h3>
                    </div>
                    <div>
                        <input type="text" name="lp7" placeholder="PORTUGUÊS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="a7" placeholder="ARTES" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="m7" placeholder="MATEMÁTICA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="h7" placeholder="HISTÓRIA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="g7" placeholder="GEOGRAFIA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="c7" placeholder="CIÊNCIAS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="i7" placeholder="INGLÊS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="ef7" placeholder="ED. FÍSICA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="r7" placeholder="RELIGIÃO" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" required oninput="maskNota(this)">
                    </div>
                </div>
            </div>

            <!-- 8º Ano -->
            <div class="bg-white p-4 rounded-lg shadow-sm">
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-10 gap-2 md:gap-3">
                    <div>
                        <h3 class="text-lg md:text-xl font-semibold text-[#DC2626] mb-2 pb-1 border-b">8º Ano</h3>
                    </div>
                    <div>
                        <input type="text" name="lp8" placeholder="PORTUGUÊS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="a8" placeholder="ARTES" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="m8" placeholder="MATEMÁTICA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="h8" placeholder="HISTÓRIA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="g8" placeholder="GEOGRAFIA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="c8" placeholder="CIÊNCIAS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="i8" placeholder="INGLÊS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="ef8" placeholder="ED. FÍSICA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="r8" placeholder="RELIGIÃO" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" required oninput="maskNota(this)">
                    </div>
                </div>
            </div>
        </div>
    <div class="flex justify-center space-x-4 mt-4 pt-3 border-t px-4 pb-4">
        <button type="button" onclick="closeModalAndRedirect('EnfermagemForm', 'inicio.php');" 
            class="px-6 py-2.5 border-2 border-red-600 rounded-md text-red-600 hover:bg-red-600/10 text-base flex items-center font-medium">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
            Cancelar
        </button>
        <button type="button" onclick="handleAvancar()" 
            class="px-6 py-2.5 bg-[#DC2626] text-white rounded-md hover:bg-[#DC2626]/90 text-base flex items-center font-medium">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
            </svg>
            Avançar
        </button>
    </div>


    <!-- Modal para Nono Ano -->

        <div id="bimestreModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center">
            <div class="bg-white rounded-lg rounded-xl w-[70%]" style = "margin-top: -50px">
            <div class="bg-[#DC2626] p-3 rounded-t-xl">
            <h2 class="text-3xl font-bold text-[--ceara-white] text-center mb-2">Notas 9º ano</h2>
        </div>
            <div class="bg-white p-4 rounded-lg shadow-sm">
                <!-- 1º Bimestre -->
                <div class="mb-6">
                
                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-10 gap-2 md:gap-3">
                    <div>
                    <h3 class="text-lg md:text-xl font-semibold text-[#DC2626] mb-4 pb-1 border-b">1º Bimestre</h3>
                        </div>
                        <div>
                            <input type="text" name="lp9_1" placeholder="PORTUGUÊS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" required oninput="maskNota(this)">
                        </div>
                        <div>
                            <input type="text" name="m9_1" placeholder="MATEMÁTICA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" required oninput="maskNota(this)">
                        </div>
                        <div>
                            <input type="text" name="h9_1" placeholder="HISTÓRIA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" required oninput="maskNota(this)">
                        </div>
                        <div>
                            <input type="text" name="g9_1" placeholder="GEOGRAFIA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" required oninput="maskNota(this)">
                        </div>
                        <div>
                            <input type="text" name="c9_1" placeholder="CIÊNCIAS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" required oninput="maskNota(this)">
                        </div>
                        <div>
                            <input type="text" name="i9_1" placeholder="INGLÊS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" required oninput="maskNota(this)">
                        </div>
                        <div>
                            <input type="text" name="a9_1" placeholder="ARTES" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" required oninput="maskNota(this)">
                        </div>
                        <div>
                            <input type="text" name="ef9_1" placeholder="ED. FÍSICA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" oninput="maskNota(this)">
                        </div>
                        <div>
                            <input type="text" name="r9_1" placeholder="RELIGIÃO" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" required oninput="maskNota(this)">
                        </div>
                    </div>
                </div>

                <!-- 2º Bimestre -->
                <div class="mb-6">
                
                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-10 gap-2 md:gap-3">
                    <div>
                        <h3 class="text-lg md:text-xl font-semibold text-[#DC2626] mb-4 pb-1 border-b">2º Bimestre</h3>
                        </div>
                        <div>
                            <input type="text" name="lp9_2" placeholder="PORTUGUÊS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" required oninput="maskNota(this)">
                        </div>
                        <div>
                            <input type="text" name="m9_2" placeholder="MATEMÁTICA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" required oninput="maskNota(this)">
                        </div>
                        <div>
                            <input type="text" name="h9_2" placeholder="HISTÓRIA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" required oninput="maskNota(this)">
                        </div>
                        <div>
                            <input type="text" name="g9_2" placeholder="GEOGRAFIA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" required oninput="maskNota(this)">
                        </div>
                        <div>
                            <input type="text" name="c9_2" placeholder="CIÊNCIAS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" required oninput="maskNota(this)">
                        </div>
                        <div>
                            <input type="text" name="i9_2" placeholder="INGLÊS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" required oninput="maskNota(this)">
                        </div>
                        <div>
                            <input type="text" name="a9_2" placeholder="ARTES" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" required oninput="maskNota(this)">
                        </div>
                        <div>
                            <input type="text" name="ef9_2" placeholder="ED. FÍSICA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" oninput="maskNota(this)">
                        </div>
                        <div>
                            <input type="text" name="r9_2" placeholder="RELIGIÃO" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" required oninput="maskNota(this)">
                        </div>
                    </div>
                </div>

                <!-- 3º Bimestre -->
                <div class="mb-6">
                    
                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-10 gap-2 md:gap-3">
                        <div>
                        <h3 class="text-lg md:text-xl font-semibold text-[#DC2626] mb-4 pb-1 border-b">3º Bimestre</h3>
                        </div>
                        <div>
                            <input type="text" name="lp9_3" placeholder="PORTUGUÊS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" required oninput="maskNota(this)">
                        </div>
                        <div>
                            <input type="text" name="m9_3" placeholder="MATEMÁTICA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" required oninput="maskNota(this)">
                        </div>
                        <div>
                            <input type="text" name="h9_3" placeholder="HISTÓRIA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" required oninput="maskNota(this)">
                        </div>
                        <div>
                            <input type="text" name="g9_3" placeholder="GEOGRAFIA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" required oninput="maskNota(this)">
                        </div>
                        <div>
                            <input type="text" name="c9_3" placeholder="CIÊNCIAS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" required oninput="maskNota(this)">
                        </div>
                        <div>
                            <input type="text" name="i9_3" placeholder="INGLÊS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" required oninput="maskNota(this)">
                        </div>
                        <div>
                            <input type="text" name="a9_3" placeholder="ARTES" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" required oninput="maskNota(this)">
                        </div>
                        <div>
                            <input type="text" name="ef9_3" placeholder="ED. FÍSICA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" oninput="maskNota(this)">
                        </div>
                        <div>
                            <input type="text" name="r9_3" placeholder="RELIGIÃO" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" required oninput="maskNota(this)">
                        </div>
                    </div>
                </div>
                <!-- 4º Bimestre -->
    <div class="mb-6">
    
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-10 gap-2 md:gap-3">
            <div>
            <h3 class="text-lg md:text-xl font-semibold text-[#DC2626] mb-4 pb-1 border-b">4º Bimestre</h3>
            </div>
            <div>
                <input type="text" name="lp9_4" placeholder="PORTUGUÊS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" oninput="maskNota(this)">
            </div>
            <div>
                <input type="text" name="m9_4" placeholder="MATEMÁTICA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" oninput="maskNota(this)">
            </div>
            <div>
                <input type="text" name="h9_4" placeholder="HISTÓRIA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" oninput="maskNota(this)">
            </div>
            <div>
                <input type="text" name="g9_4" placeholder="GEOGRAFIA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" oninput="maskNota(this)">
            </div>
            <div>
                <input type="text" name="c9_4" placeholder="CIÊNCIAS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" oninput="maskNota(this)">
            </div>
            <div>
                <input type="text" name="i9_4" placeholder="INGLÊS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" oninput="maskNota(this)">
            </div>
            <div>
                <input type="text" name="a9_4" placeholder="ARTES" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" oninput="maskNota(this)">
            </div>
            <div>
                <input type="text" name="ef9_4" placeholder="ED. FÍSICA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" oninput="maskNota(this)">
            </div>
            <div>
                <input type="text" name="r9_4" placeholder="RELIGIÃO" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#DC2626] text-sm" oninput="maskNota(this)">
            </div>
        </div>
    <div class="flex justify-center space-x-4 mt-4 pt-3 border-t px-4 pb-4">
            <button type="button" onclick="hideBimestreModal()" 
                class="px-6 py-2.5 border-2 border-[#DC2626] rounded-md text-[#DC2626] hover:bg-[#DC2626]/10 text-base flex items-center font-medium">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Voltar
            </button>
            <button type="submit" 
                class="px-6 py-2.5 bg-[#DC2626] text-white rounded-md hover:bg-[#DC2626]/90 text-base flex items-center font-medium">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
                Cadastrar
            </button>
        </div>
    </div>
            </div>
        </div>
    </div>
        
        </div>
        
    </div>

    </form>
    `;
                }
            </script>
        <?php } ?>
    </div>
    </main>

    <style>
        /* Estilos globais */
        h3 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            letter-spacing: -0.5px;
        }

        button {
            font-family: 'Source Sans Pro', sans-serif;
            font-weight: 600;
            letter-spacing: 0.2px;
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <footer class="text-white font-sans w-full mt-auto py-4" style="background-color: #008C45">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
                <!-- Identificação Institucional -->
                <div class="p-2">
                    <h4 class="text-orange-400 text-lg font-bold mb-3">SEEPS</h4>
                    <p class="text-sm mb-3">Sistema de Ensino e Educação Profissional Salaberga</p>
                    <div class="flex gap-3">
                        <a aria-label="Facebook" target="_blank" rel="noopener noreferrer"
                            href="https://www.facebook.com/groups/salaberga/"
                            class="w-8 h-8 bg-white/10 rounded-full flex items-center justify-center hover:bg-orange-400 transition-all">
                            <i class="fab fa-facebook text-sm"></i>
                        </a>
                        <a aria-label="Instagram" target="_blank" rel="noopener noreferrer"
                            href="https://www.instagram.com/eeepsalabergampe/"
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
        </div>

        <!-- Copyright -->
        <div class="border-t border-white/10 pt-3 text-center text-xs">
            <p>&copy; 2024 SEEPS - Todos os direitos reservados</p>
        </div>
        </div>
    </footer>


    <style>
        /* Estilização do scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #666;
        }

        /* Animação do modal */
        @keyframes modalFadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        #modal>div {
            animation: modalFadeIn 0.3s ease-out;
        }

        /* Estilização dos inputs quando focados */
        input:focus,
        select:focus {
            outline: none;
            border-color: #93C5FD;
            box-shadow: 0 0 0 3px rgba(147, 197, 253, 0.25);
        }

        /* Hover effect nos cards dos anos */
        .bg-gray-50:hover {
            background-color: #F8FAFC;
            transition: background-color 0.2s ease;
        }

        /* Estilização para inputs numéricos */
        input[type="text"] {
            transition: all 0.2s ease;
        }

        input[type="text"]:focus {
            transform: scale(1.02);
        }

        /* Tooltip para campos obrigatórios */
        [required] {
            position: relative;
        }

        [required]:after {
            content: '*';
            color: #EF4444;
            position: absolute;
            right: 8px;
            top: 50%;
            transform: translateY(-50%);
        }
    </style>



</body>

</html>