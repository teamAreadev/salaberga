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
<header class="w-full bg-white shadow-sm">
    <nav class="container mx-auto px-4">
        <div class="flex items-center justify-between h-16">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <img 
                    src="../assets/images/LOGO_new.png" 
                    alt="Logo EEEP" 
                    class="w-36 h-auto mt-2.5"
                >
            </div>

            <!-- Botão Menu -->
            <div class="flex items-center">
                <button 
                    id="mobile-menu" 
                    class="p-2 rounded-lg transition-all duration-200 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-green-500"
                    aria-label="Menu"
                    onclick="toggleSidebar()"
                >
                    <svg 
                        class="w-8 h-8 text-[#008C45] transition-transform duration-200" 
                        xmlns="http://www.w3.org/2000/svg" 
                        fill="none" 
                        viewBox="0 0 24 24" 
                        stroke="currentColor"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>

            <!-- Sidebar -->
            <div 
    id="sidebar" 
    class="fixed top-0 right-0 w-64 h-full bg-white shadow-lg rounded-l-lg transform translate-x-full transition-transform duration-300 ease-in-out z-50"
>
    <div class="p-6">
        <div class="flex justify-between items-center mb-6">
            <!-- Aumente o tamanho da fonte aqui -->
            <h3 class="text-2xl font-bold text-gray-800">Menu</h3>
            <button 
                id="closeSidebar" 
                class="p-2 rounded-lg transition-colors duration-200 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-green-500"
                aria-label="Fechar menu"
                onclick="toggleSidebar()"
            >
                <svg 
                    class="w-6 h-6 text-[#008C45]" 
                    fill="none" 
                    stroke="currentColor" 
                    viewBox="0 0 24 24"
                >
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>  
                    <!-- Itens do Menu -->
                    <ul class="flex flex-col space-y-3">
                        <li>
                            <button onclick="showUpdateModal()" class="menu-btn text-ceara-orange border-ceara-orange hover:bg-ceara-orange">Atualizar</button>
                        </li>
                        <li>
                            <button onclick="showReportsModal()" class="menu-btn text-ceara-green border-ceara-green hover:bg-ceara-green">Relatórios</button>
                        </li>
                        <li>
                            <button onclick="showResultsModal()" class="menu-btn text-gray-600 border-gray-600 hover:bg-gray-600">Resultados</button>
                        </li>
                        <li>
                            <a href="../seeps2024/index.php" class="menu-btn text-red-600 border-red-600 hover:bg-red-600">Sair</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>

<!-- Overlay -->
<div class="sidebar-overlay fixed inset-0 bg-black bg-opacity-50 opacity-0 invisible transition-all duration-300 ease-in-out z-40"></div>

<style>
    .sidebar-overlay.active {
        opacity: 1;
        visibility: visible;
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

    /* Estilo padrão para os botões do menu */
    .menu-btn {
        display: flex;
        align-items: center;
        width: 100%;
        padding: 12px;
        font-size: 1rem;
        font-weight: 600;
        border-radius: 9999px;
        border-width: 2px;
        transition: all 0.3s ease-in-out;
        transform: scale(1);
    }
    
    .menu-btn:hover {
        color: white;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transform: scale(1.05);
    }
</style>

<script>
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        const overlay = document.querySelector('.sidebar-overlay');

        // Toggle sidebar visibility
        if (sidebar.classList.contains('translate-x-full')) {
            sidebar.classList.remove('translate-x-full');
            sidebar.classList.add('translate-x-0');
            overlay.classList.add('active');
        } else {
            sidebar.classList.remove('translate-x-0');
            sidebar.classList.add('translate-x-full');
            overlay.classList.remove('active');
        }
    }
</script>

    <main class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 py-12" style="position:relative; margin-top: 100px">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8">
            <!-- Card Enfermagem -->
            <div
                class="bg-white rounded-3xl shadow-2xl p-6 lg:p-8 transform transition-all duration-300 hover:scale-105 hover:shadow-2xl border border-gray-100">
                <div class="flex flex-col h-full justify-between">
                    <h3 class="text-2xl lg:text-3xl font-bold text-gray-800 mb-6 lg:mb-8 text-center">Enfermagem</h3>
                    <div class="space-y-4">
                        <button onclick="enfermagemPub()"
                            class="w-full py-2.5 lg:py-3 px-4 lg:px-6 bg-gradient-to-r from-red-500 to-red-700 text-white rounded-full font-semibold text-base lg:text-lg transition-all duration-300 hover:from-red-600 hover:to-red-800 hover:shadow-lg focus:outline-none focus:ring-4 focus:ring-red-300">Escola
                            Pública</button>
                        <button onclick="enfermagemPriv()"
                            class="w-full py-2.5 lg:py-3 px-4 lg:px-6 bg-gradient-to-r from-red-500 to-red-700 text-white rounded-full font-semibold text-base lg:text-lg transition-all duration-300 hover:from-red-600 hover:to-red-800 hover:shadow-lg focus:outline-none focus:ring-4 focus:ring-red-300">Escola
                            Privada</button>
                    </div>
                </div>
            </div>

            <!-- Card Informática -->
            <div
                class="bg-white rounded-3xl shadow-2xl p-6 lg:p-8 transform transition-all duration-300 hover:scale-105 hover:shadow-2xl border border-gray-100">
                <div class="flex flex-col h-full justify-between">
                    <h3 class="text-2xl lg:text-3xl font-bold text-gray-800 mb-6 lg:mb-8 text-center">Informática</h3>
                    <div class="space-y-4">
                        <button onclick="informaticaPub()"
                            class="w-full py-2.5 lg:py-3 px-4 lg:px-6 bg-gradient-to-r from-blue-500 to-blue-700 text-white rounded-full font-semibold text-base lg:text-lg transition-all duration-300 hover:from-blue-600 hover:to-blue-800 hover:shadow-lg focus:outline-none focus:ring-4 focus:ring-blue-300">Escola
                            Pública</button>
                        <button onclick="informaticaPriv()"
                            class="w-full py-2.5 lg:py-3 px-4 lg:px-6 bg-gradient-to-r from-blue-500 to-blue-700 text-white rounded-full font-semibold text-base lg:text-lg transition-all duration-300 hover:from-blue-600 hover:to-blue-800 hover:shadow-lg focus:outline-none focus:ring-4 focus:ring-blue-300">Escola
                            Privada</button>
                    </div>
                </div>
            </div>

            <!-- Card Administração -->
            <div
                class="bg-white rounded-3xl shadow-2xl p-6 lg:p-8 transform transition-all duration-300 hover:scale-105 hover:shadow-2xl border border-gray-100">
                <div class="flex flex-col h-full justify-between">
                    <h3 class="text-2xl lg:text-3xl font-bold text-gray-800 mb-6 lg:mb-8 text-center">Administração</h3>
                    <div class="space-y-4">
                        <button onclick="administracaoPub()"
                            class="w-full py-2.5 lg:py-3 px-4 lg:px-6 bg-gradient-to-r from-green-500 to-green-700 text-white rounded-full font-semibold text-base lg:text-lg transition-all duration-300 hover:from-green-600 hover:to-green-800 hover:shadow-lg focus:outline-none focus:ring-4 focus:ring-green-300">Escola
                            Pública</button>
                        <button onclick="administracaoPriv()"
                            class="w-full py-2.5 lg:py-3 px-4 lg:px-6 bg-gradient-to-r from-green-500 to-green-700 text-white rounded-full font-semibold text-base lg:text-lg transition-all duration-300 hover:from-green-600 hover:to-green-800 hover:shadow-lg focus:outline-none focus:ring-4 focus:ring-green-300">Escola
                            Privada</button>
                    </div>
                </div>
            </div>

            <!-- Card Edificações -->
            <div
                class="bg-white rounded-3xl shadow-2xl p-6 lg:p-8 transform transition-all duration-300 hover:scale-105 hover:shadow-2xl border border-gray-100">
                <div class="flex flex-col h-full justify-between">
                    <h3 class="text-2xl lg:text-3xl font-bold text-gray-800 mb-6 lg:mb-8 text-center">Edificações</h3>
                    <div class="space-y-4">
                        <button onclick="edificacoesPub()"
                            class="w-full py-2.5 lg:py-3 px-4 lg:px-6 bg-gradient-to-r from-orange-500 to-orange-700 text-white rounded-full font-semibold text-base lg:text-lg transition-all duration-300 hover:from-orange-600 hover:to-orange-800 hover:shadow-lg focus:outline-none focus:ring-4 focus:ring-orange-300">Escola
                            Pública</button>
                        <button onclick="edificacoesPriv()"
                            class="w-full py-2.5 lg:py-3 px-4 lg:px-6 bg-gradient-to-r from-orange-500 to-orange-700 text-white rounded-full font-semibold text-base lg:text-lg transition-all duration-300 hover:from-orange-600 hover:to-orange-800 hover:shadow-lg focus:outline-none focus:ring-4 focus:ring-orange-300">Escola
                            Privada</button>
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
            <div class="p-4">
                <div class="mb-4">
                  
                    <select id="course" class="form-select block w-full bg-ceara-white border border-gray-600 rounded-md shadow-sm focus:outline-none">
                        <option value="">Selecione um curso</option>
                        <option value="Enfermagem">Enfermagem</option>
                        <option value="Informática">Informática</option>
                        <option value="Administração">Administração</option>
                        <option value="Edificações">Edificações</option>
                    </select>
                </div>
                <div class="mb-4">
                    
                    <select id="type" class="form-select block w-full bg-ceara-white border border-gray-600 rounded-md shadow-sm focus:outline-none">
                        <option value="">Selecione um tipo</option>
                        <option value="Pública Geral">Pública Geral</option>
                        <option value="Privada Geral">Privada Geral</option>
                        <option value="Pública AC">Pública AC</option>
                        <option value="Privada AC">Privada AC</option>
                        <option value="Pública Cota">Pública Cota</option>
                        <option value="Privada Cota">Privada Cota</option>
                    </select>
                </div>
            </div>
        `,
                confirmButtonText: 'Gerar Relatório',
                showCancelButton: true,
                cancelButtonText: 'Cancelar',
                customClass: {
                    confirmButton: 'bg-ceara-green hover:bg-ceara-green-dark text-ceara-white font-bold py-2 px-4 rounded transition-transform transform hover:scale-105',
                    cancelButton: 'bg-gray-400 hover:bg-gray-400 text-gray-dark font-bold py-2 px-4 rounded transition-transform transform hover:scale-105'
                },
                preConfirm: () => {
                    const course = document.getElementById('course').value;
                    const type = document.getElementById('type').value;
                    if (!course || !type) {
                        Swal.showValidationMessage('Por favor, selecione um curso e um tipo.');
                    } else {
                        return { course, type };
                    }
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(`Gerando relatório de ${result.value.course} - ${result.value.type}...`);
                }
            });
        }

        function showUpdateModal() {
            Swal.fire({
                customClass: {
                    popup: 'rounded-lg',
                    title: 'text-gray-dark text-xl font-bold',
                    confirmButton: 'bg-ceara-orange text-white font-bold py-2 px-6 rounded-md hover:bg-opacity-90 transition-all duration-300 mx-2',
                    cancelButton: 'bg-gray-600 text-white font-bold py-2 px-6 rounded-md hover:bg-opacity-90 transition-all duration-300 mx-2',
                    actions: 'space-x-4' // Adiciona espaçamento entre os botões
                },
                title: 'Atualizar Notas',
                html: `
            <div class="p-4">
                <div class="mb-4">
                    <label class="block text-gray-dark text-sm font-bold mb-2" for="studentId">ID do Aluno</label>
                    <input type="number" id="studentId" class="form-input block w-full bg-ceara-white border border-gray-600 rounded-md shadow-sm focus:outline-none">
                </div>
                
                <div class="grid grid-cols-2 gap-4">
                    <div class="mb-4">
                        <label class="block text-gray-dark text-sm font-bold mb-2" for="portugues">Português</label>
                        <input type="number" step="0.1" min="0" max="10" id="portugues" class="form-input block w-full bg-ceara-white border border-gray-600 rounded-md shadow-sm focus:outline-none">
                    </div>
                    
                    <div class="mb-4">
                        <label class="block text-gray-dark text-sm font-bold mb-2" for="arte">Arte</label>
                        <input type="number" step="0.1" min="0" max="10" id="arte" class="form-input block w-full bg-ceara-white border border-gray-600 rounded-md shadow-sm focus:outline-none">
                    </div>
                    
                    <div class="mb-4">
                        <label class="block text-gray-dark text-sm font-bold mb-2" for="edFisica">Ed. Física</label>
                        <input type="number" step="0.1" min="0" max="10" id="edFisica" class="form-input block w-full bg-ceara-white border border-gray-600 rounded-md shadow-sm focus:outline-none">
                    </div>
                    
                    <div class="mb-4">
                        <label class="block text-gray-dark text-sm font-bold mb-2" for="ingles">Inglês</label>
                        <input type="number" step="0.1" min="0" max="10" id="ingles" class="form-input block w-full bg-ceara-white border border-gray-600 rounded-md shadow-sm focus:outline-none">
                    </div>
                    
                    <div class="mb-4">
                        <label class="block text-gray-dark text-sm font-bold mb-2" for="ciencias">Ciências</label>
                        <input type="number" step="0.1" min="0" max="10" id="ciencias" class="form-input block w-full bg-ceara-white border border-gray-600 rounded-md shadow-sm focus:outline-none">
                    </div>
                    
                    <div class="mb-4">
                        <label class="block text-gray-dark text-sm font-bold mb-2" for="geografia">Geografia</label>
                        <input type="number" step="0.1" min="0" max="10" id="geografia" class="form-input block w-full bg-ceara-white border border-gray-600 rounded-md shadow-sm focus:outline-none">
                    </div>
                    
                    <div class="mb-4">
                        <label class="block text-gray-dark text-sm font-bold mb-2" for="historia">História</label>
                        <input type="number" step="0.1" min="0" max="10" id="historia" class="form-input block w-full bg-ceara-white border border-gray-600 rounded-md shadow-sm focus:outline-none">
                    </div>
                    
                    <div class="mb-4">
                        <label class="block text-gray-dark text-sm font-bold mb-2" for="religiao">Religião</label>
                        <input type="number" step="0.1" min="0" max="10" id="religiao" class="form-input block w-full bg-ceara-white border border-gray-600 rounded-md shadow-sm focus:outline-none">
                    </div>
                    
                    <div class="mb-4">
                        <label class="block text-gray-dark text-sm font-bold mb-2" for="matematica">Matemática</label>
                        <input type="number" step="0.1" min="0" max="10" id="matematica" class="form-input block w-full bg-ceara-white border border-gray-600 rounded-md shadow-sm focus:outline-none">
                    </div>
                </div>
            </div>
        `,
                confirmButtonText: 'Atualizar',
                showCancelButton: true,
                cancelButtonText: 'Cancelar',
                customClass: {
                    confirmButton: 'bg-ceara-green hover:bg-ceara-green-dark text-ceara-white font-bold py-2 px-4 rounded transition-transform transform hover:scale-105',
                    cancelButton: 'bg-gray-300 hover:bg-gray-400 text-gray-dark font-bold py-2 px-4 rounded transition-transform transform hover:scale-105'
                },
                preConfirm: () => {
                    const studentId = document.getElementById('studentId').value;
                    const notas = {
                        portugues: document.getElementById('portugues').value,
                        arte: document.getElementById('arte').value,
                        edFisica: document.getElementById('edFisica').value,
                        ingles: document.getElementById('ingles').value,
                        ciencias: document.getElementById('ciencias').value,
                        geografia: document.getElementById('geografia').value,
                        historia: document.getElementById('historia').value,
                        religiao: document.getElementById('religiao').value,
                        matematica: document.getElementById('matematica').value
                    };

                    if (!studentId) {
                        Swal.showValidationMessage('Por favor, insira o ID do aluno.');
                        return;
                    }

                    // Validação das notas
                    for (let [materia, nota] of Object.entries(notas)) {
                        if (nota === '') {
                            Swal.showValidationMessage(`Por favor, insira a nota de ${materia}.`);
                            return;
                        }
                        if (nota < 0 || nota > 10) {
                            Swal.showValidationMessage(`A nota de ${materia} deve estar entre 0 e 10.`);
                            return;
                        }
                    }

                    return { studentId, notas };
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    // Aqui você pode adicionar a lógica para enviar os dados para o servidor
                    Swal.fire({
                        title: 'Sucesso!',
                        text: 'Notas atualizadas com sucesso!',
                        icon: 'success',
                        confirmButtonText: 'OK',
                        customClass: {
                            confirmButton: 'bg-ceara-green hover:bg-ceara-green-dark text-ceara-white font-bold py-2 px-4 rounded transition-transform transform hover:scale-105'
                        }
                    });
                }
            });
        }


        const styles = `
    .swal2-popup {
        background-color: var(--ceara-white) !important;
    }

    .swal2-actions {
        gap: 1rem !important; /* Adiciona 1rem de espaço entre os botões */
    }

    .swal2-input, .swal2-textarea {
        border-color: var(--gray-600) !important;
        transition: all var(--transition-duration) var(--transition-timing) !important;
    }

    .swal2-input:focus, .swal2-textarea:focus {
        border-color: var(--ceara-orange) !important;
        box-shadow: 0 0 0 2px rgba(255, 165, 0, 0.2) !important;
    }

    .form-input:hover, .swal2-input:hover {
        transform: scale(var(--hover-scale));
    }

    .swal2-confirm {
        background-color: var(--ceara-orange) !important;
        margin: 0 0.5rem !important; /* Adiciona margem lateral */
    }

    .swal2-cancel {
        background-color: var(--gray-600) !important;
        margin: 0 0.5rem !important; /* Adiciona margem lateral */
    }

    .swal2-confirm:hover, .swal2-cancel:hover {
        transform: scale(var(--hover-scale));
    }

    /* Ajuste para telas menores */
    @media (max-width: 640px) {
        .swal2-actions {
            flex-direction: column;
            gap: 0.5rem !important;
        }

        .swal2-confirm, .swal2-cancel {
            margin: 0.25rem 0 !important;
            width: 100%;
        }
    }
`;



        function showResultsModal() {
            Swal.fire({
                title: 'Resultados',
                html: `
            <div class="p-4">
                <div class="mb-4">
                
                    <select id="course" class="form-select block w-full bg-ceara-white border border-gray-600 rounded-md shadow-sm focus:outline-none ">
                        <option value="">Selecione um curso</option>
                        <option value="Enfermagem">Enfermagem</option>
                        <option value="Informática">Informática</option>
                        <option value="Administração">Administração</option>
                        <option value="Edificações">Edificações</option>
                    </select>
                </div>
                <div class="mb-4">
                  
                    <select id="type" class="form-select block w-full bg-ceara-white border border-gray-600 rounded-md shadow-sm focus:outline-none ">
                        <option value="">Selecione um tipo</option>
                        <option value="Pública">Pública</option>
                        <option value="Privada">Privada</option>
                    </select>
                </div>
            </div>
        `,
                confirmButtonText: 'Ver Resultados',
                showCancelButton: true,
                cancelButtonText: 'Cancelar',
                customClass: {
                    confirmButton: 'bg-ceara-green hover:bg-ceara-green-dark text-ceara-white font-bold py-2 px-4 rounded transition-transform transform hover:scale-105',
                    cancelButton: 'bg-gray-300 hover:bg-gray-400 text-gray-dark font-bold py-2 px-4 rounded transition-transform transform hover:scale-105'
                },
                preConfirm: () => {
                    const course = document.getElementById('course').value;
                    const type = document.getElementById('type').value;

                    if (!course || !type) {
                        Swal.showValidationMessage('Por favor, selecione um curso e um tipo de resultado.');
                    }

                    return { course, type };
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
                                <a href="https://www.instagram.com/rogercavalcantetz/" target="_blank"
                                    rel="noopener noreferrer"
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
            didOpen: () => { },
            preConfirm: (courseId) => {
                return validateAndCollectData(courseId);
            }
        };

        // Funções para abrir os modais
        function enfermagemPub() {
            showModal('Enfermagem', 'Escola Pública');
        }

        function enfermagemPriv() {
            showModal('Enfermagem', 'Escola Privada');
        }

        function informaticaPub() {
            showModal('Informática', 'Escola Pública');
        }

        function informaticaPriv() {
            showModal('Informática', 'Escola Privada');
        }

        function administracaoPub() {
            showModal('Administração', 'Escola Pública');
        }

        function administracaoPriv() {
            showModal('Administração', 'Escola Privada');
        }

        function edificacoesPub() {
            showModal('Edificações', 'Escola Pública');
        }

        function edificacoesPriv() {
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

            switch (courseName) {
                case 'Enfermagem':
                    return createEnfermagemForm(schoolType, subjects);
                case 'Informática':
                    return createInformaticaForm(schoolType, subjects);
                case 'Administração':
                    return createAdministracaoForm(schoolType, subjects);
                case 'Edificações':
                    return createEdificacoesForm(schoolType, subjects);
                default:
                    return '';
            }
        }

        function createEnfermagemForm(schoolType, subjects) {
            return createForm('Enfermagem', schoolType, subjects);
        }

        function createInformaticaForm(schoolType, subjects) {
            return createForm('Informática', schoolType, subjects);
        }

        function createAdministracaoForm(schoolType, subjects) {
            return createForm('Administração', schoolType, subjects);
        }

        function createEdificacoesForm(schoolType, subjects) {
            return createForm('Edificações', schoolType, subjects);
        }


        // Função para criar o conteúdo do modal com formulários específicos
        function createModalContent(courseName, schoolType) {
            switch (courseName) {
                case 'Enfermagem':
                    return createEnfermagemForm(schoolType);
                case 'Informática':
                    return createInformaticaForm(schoolType);
                case 'Administração':
                    return createAdministracaoForm(schoolType);
                case 'Edificações':
                    return createEdificacoesForm(schoolType);
                default:
                    return '';
            }
        }

        



        function createEnfermagemForm(schoolType) {
        return `
        <form id="enfermagemForm" action="../controllers/controller.php" method="POST" class="space-y-6 max-w-lg mx-auto p-6 bg-white rounded-lg shadow-lg">
            <h2 class="text-xl font-semibold text-center mb-4">Formulário de Enfermagem</h2>
            <div class="grid grid-cols-1 gap-4">
                <div class="flex flex-col">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Nome Completo <span class="text-red-500">*</span></label>
                    <input type="text" name="nome" class="mt-1 block w-full border border-gray-300 rounded-md focus:ring focus:ring-blue-300" placeholder="Nome Completo" required>
                </div>
                <div class="flex flex-col">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Data de Nascimento <span class="text-red-500">*</span></label>
                    <input type="date" name="nasc" class="mt-1 block w-full border border-gray-300 rounded-md focus:ring focus:ring-blue-300" required>
                </div>
                <div class="flex flex-col">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Curso Selecionado</label>
                    <input type="text" name="curso" value="Enfermagem" class="mt-1 block w-full bg-gray-50 border border-gray-300 rounded-md" disabled>
                    <input type="hidden" name="curso" value="Enfermagem">
                </div>
                <div class="flex flex-col">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Tipo de Escola</label>
                    <input type="text" name="${schoolType}" value="${schoolType}" class="mt-1 block w-full bg-gray-50 border border-gray-300 rounded-md" disabled>
                    <input type="hidden" name="Escola" value="${schoolType}">
                </div>
                <div class="flex flex-col">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Bairro <span class="text-red-500">*</span></label>
                    <select name="bairro" class="mt-1 block w-full border border-gray-300 rounded-md focus:ring focus:ring-blue-300" required>
                        <option value="">Selecione um bairro</option>
                        <option value="1">Outra Banda</option>
                        <option value="0">Outros Bairros</option>
                    </select>
                </div>
                <div class="flex flex-col">
                    <label class="block text-sm font-medium text-gray-700 mb-1">PCD</label>
                    <select name="pcd" class="mt-1 block w-full border border-gray-300 rounded-md focus:ring focus:ring-blue-300">
                        <option value="1">Sim</option>
                        <option value="0">Não</option>                        
                    </select>
                </div>
            </div>

            <h2 class="text-lg font-semibold text-center mt-6 mb-4 border-b pb-2">Notas por Matéria</h2>
            <div class="grid grid-cols-1 gap-4">
                <div class="flex items-center bg-gray-50 p-2 rounded-md">
                    <label class="block text-sm font-medium text-gray-700 w-32">Português:</label>
                    <div class="flex space-x-2 flex-1">
                        <input type="text" name="lp6" class="block w-16 border border-gray-300 rounded-md" placeholder="6º" required>
                        <input type="text" name="lp7" class="block w-16 border border-gray-300 rounded-md" placeholder="7º">
                        <input type="text" name="lp8" class="block w-16 border border-gray-300 rounded-md" placeholder="8º">
                        <input type="text" name="lp9" class="block w-16 border border-gray-300 rounded-md" placeholder="9º">
                    </div>
                </div>

                <div class="flex items-center bg-white p-2 rounded-md">
                    <label class="block text-sm font-medium text-gray-700 w-32">Artes:</label>
                    <div class="flex space-x-2 flex-1">
                        <input type="text" name="a6" class="block w-16 border border-gray-300 rounded-md" placeholder="6º">
                        <input type="text" name="a7" class="block w-16 border border-gray-300 rounded-md" placeholder="7º">
                        <input type="text" name="a8" class="block w-16 border border-gray-300 rounded-md" placeholder="8º">
                        <input type="text" name="a9" class="block w-16 border border-gray-300 rounded-md" placeholder="9º">
                    </div>
                </div>

                <div class="flex items-center bg-gray-50 p-2 rounded-md">
                    <label class="block text-sm font-medium text-gray-700 w-32">Matemática:</label>
                    <div class="flex space-x-2 flex-1">
                        <input type="text" name="m6" class="block w-16 border border-gray-300 rounded-md" placeholder="6º" required>
                        <input type="text" name="m7" class="block w-16 border border-gray-300 rounded-md" placeholder="7º">
                        <input type="text" name="m8" class="block w-16 border border-gray-300 rounded-md" placeholder="8º">
                        <input type="text" name="m9" class="block w-16 border border-gray-300 rounded-md" placeholder="9º">
                    </div>
                </div>

                <div class="flex items-center bg-white p-2 rounded-md">
                    <label class="block text-sm font-medium text-gray-700 w-32">Ciências:</label>
                    <div class="flex space-x-2 flex-1">
                        <input type="text" name="c6" class="block w-16 border border-gray-300 rounded-md" placeholder="6º" required>
                        <input type="text" name="c7" class="block w-16 border border-gray-300 rounded-md" placeholder="7º">
                        <input type="text" name="c8" class="block w-16 border border-gray-300 rounded-md" placeholder="8º">
                        <input type="text" name="c9" class="block w-16 border border-gray-300 rounded-md" placeholder="9º">
                    </div>
                </div>

                <div class="flex items-center bg-gray-50 p-2 rounded-md">
                    <label class="block text-sm font-medium text-gray-700 w-32">História:</label>
                    <div class="flex space-x-2 flex-1">
                        <input type="text" name="h6" class="block w-16 border border-gray-300 rounded-md" placeholder="6º" required>
                        <input type="text" name="h7" class="block w-16 border border-gray-300 rounded-md" placeholder="7º">
                        <input type="text" name="h8" class="block w-16 border border-gray-300 rounded-md" placeholder="8º">
                        <input type="text" name="h9" class="block w-16 border border-gray-300 rounded-md" placeholder="9º">
                    </div>
                </div>

                <div class="flex items-center bg-white p-2 rounded-md">
                    <label class="block text-sm font-medium text-gray-700 w-32">Geografia:</label>
                    <div class="flex space-x-2 flex-1">
                        <input type="text" name="g6" class="block w-16 border border-gray-300 rounded-md" placeholder="6º" required>
                        <input type="text" name="g7" class="block w-16 border border-gray-300 rounded-md" placeholder="7º">
                        <input type="text" name="g8" class="block w-16 border border-gray-300 rounded-md" placeholder="8º">
                        <input type="text" name="g9" class="block w-16 border border-gray-300 rounded-md" placeholder="9º">
                    </div>
                </div>

                <div class="flex items-center bg-white p-2 rounded-md">
                    <label class="block text-sm font-medium text-gray-700 w-32">Inglês:</label>
                    <div class="flex space-x-2 flex-1">
                        <input type="text" name="i6" class="block w-16 border border-gray-300 rounded-md" placeholder="6º" required>
                        <input type="text" name="i7" class="block w-16 border border-gray-300 rounded-md" placeholder="7º">
                        <input type="text" name="i8" class="block w-16 border border-gray-300 rounded-md" placeholder="8º">
                        <input type="text" name="i9" class="block w-16 border border-gray-300 rounded-md" placeholder="9º">
                    </div>
                </div>

                <div class="flex items-center bg-gray-50 p-2 rounded-md">
                    <label class="block text-sm font-medium text-gray-700 w-32">Educação Física:</label>
                    <div class="flex space-x-2 flex-1">
                        <input type="text" name="ef6" class="block w-16 border border-gray-300 rounded-md" placeholder="6º" required>
                        <input type="text" name="ef7" class="block w-16 border border-gray-300 rounded-md" placeholder="7º">
                        <input type="text" name="ef8" class="block w-16 border border-gray-300 rounded-md" placeholder="8º">
                        <input type="text" name="ef9" class="block w-16 border border-gray-300 rounded-md" placeholder="9º">
                    </div>
                </div>

                <div class="flex items-center bg-white p-2 rounded-md">
                    <label class="block text-sm font-medium text-gray-700 w-32">Religião:</label>
                    <div class="flex space-x-2 flex-1">
                        <input type="text" name="r6" class="block w-16 border border-gray-300 rounded-md" placeholder="6º" required>
                        <input type="text" name="r7" class="block w-16 border border-gray-300 rounded-md" placeholder="7º">
                        <input type="text" name="r8" class="block w-16 border border-gray-300 rounded-md" placeholder="8º">
                        <input type="text" name="r9" class="block w-16 border border-gray-300 rounded-md" placeholder="9º">
                    </div>
                </div>
            </div>
            <button type="submit" class="mt-6 w-full px-4 py-2 bg-blue-500 text-white font-bold rounded-md hover:bg-blue-600">Cadastrar</button>
        </form>`;
    }

    function createInformaticaForm(schoolType) {
        return `
        <form id="informaticaForm" action="../controllers/controller.php" method="POST" class="space-y-6 max-w-lg mx-auto p-6 bg-white rounded-lg shadow-lg">
            <h2 class="text-xl font-semibold text-center mb-4">Formulário de Informática</h2>
            <div class="grid grid-cols-1 gap-4">
                <div class="flex flex-col">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Nome Completo <span class="text-red-500">*</span></label>
                    <input type="text" name="nome" class="mt-1 block w-full border border-gray-300 rounded-md focus:ring focus:ring-blue-300" placeholder="Nome Completo" required>
                </div>
                <div class="flex flex-col">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Data de Nascimento <span class="text-red-500">*</span></label>
                    <input type="date" name="nasc" class="mt-1 block w-full border border-gray-300 rounded-md focus:ring focus:ring-blue-300" required>
                </div>
                <div class="flex flex-col">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Curso Selecionado</label>
                    <input type="text" name="curso" value="Informática" class="mt-1 block w-full bg-gray-50 border border-gray-300 rounded-md" disabled>
                    <input type="hidden" name="curso" value="Informática">
                </div>
                <div class="flex flex-col">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Tipo de Escola</label>
                    <input type="text" name="${schoolType}" value="${schoolType}" class="mt-1 block w-full bg-gray-50 border border-gray-300 rounded-md" disabled>
                    <input type="hidden" name="Escola" value="${schoolType}">
                </div>
                <div class="flex flex-col">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Bairro <span class="text-red-500">*</span></label>
                    <select name="bairro" class="mt-1 block w-full border border-gray-300 rounded-md focus:ring focus:ring-blue-300" required>
                        <option value="">Selecione um bairro</option>
                        <option value="Outra Banda"></option>
                        <option value="Outros Bairros">Bairro 2</option>
                    </select>
                </div>
                <div class="flex flex-col">
                    <label class="block text-sm font-medium text-gray-700 mb-1">PCD</label>
                    <select name="pcd" class="mt-1 block w-full border border-gray-300 rounded-md focus:ring focus:ring-blue-300">
                        <option value="nao">Não</option>
                        <option value="sim">Sim</option>
                    </select>
                </div>
            </div>

            <h2 class="text-lg font-semibold text-center mt-6 mb-4 border-b pb-2">Notas por Matéria</h2>
            <div class="grid grid-cols-1 gap-4">
                <div class="flex items-center bg-gray-50 p-2 rounded-md">
                    <label class="block text-sm font-medium text-gray-700 w-32">Português:</label>
                    <div class="flex space-x-2 flex-1">
                        <input type="text" name="lp6" class="block w-16 border border-gray-300 rounded-md" placeholder="6º" required>
                        <input type="text" name="lp7" class="block w-16 border border-gray-300 rounded-md" placeholder="7º">
                        <input type="text" name="lp8" class="block w-16 border border-gray-300 rounded-md" placeholder="8º">
                        <input type="text" name="lp9" class="block w-16 border border-gray-300 rounded-md" placeholder="9º">
                    </div>
                </div>

                <div class="flex items-center bg-white p-2 rounded-md">
                    <label class="block text-sm font-medium text-gray-700 w-32">Artes:</label>
                    <div class="flex space-x-2 flex-1">
                        <input type="text" name="a6" class="block w-16 border border-gray-300 rounded-md" placeholder="6º">
                        <input type="text" name="a7" class="block w-16 border border-gray-300 rounded-md" placeholder="7º">
                        <input type="text" name="a8" class="block w-16 border border-gray-300 rounded-md" placeholder="8º">
                        <input type="text" name="a9" class="block w-16 border border-gray-300 rounded-md" placeholder="9º">
                    </div>
                </div>

                <div class="flex items-center bg-gray-50 p-2 rounded-md">
                    <label class="block text-sm font-medium text-gray-700 w-32">Matemática:</label>
                    <div class="flex space-x-2 flex-1">
                        <input type="text" name="m6" class="block w-16 border border-gray-300 rounded-md" placeholder="6º" required>
                        <input type="text" name="m7" class="block w-16 border border-gray-300 rounded-md" placeholder="7º">
                        <input type="text" name="m8" class="block w-16 border border-gray-300 rounded-md" placeholder="8º">
                        <input type="text" name="m9" class="block w-16 border border-gray-300 rounded-md" placeholder="9º">
                    </div>
                </div>

                <div class="flex items-center bg-white p-2 rounded-md">
                    <label class="block text-sm font-medium text-gray-700 w-32">Ciências:</label>
                    <div class="flex space-x-2 flex-1">
                        <input type="text" name="c6" class="block w-16 border border-gray-300 rounded-md" placeholder="6º" required>
                        <input type="text" name="c7" class="block w-16 border border-gray-300 rounded-md" placeholder="7º">
                        <input type="text" name="c8" class="block w-16 border border-gray-300 rounded-md" placeholder="8º">
                        <input type="text" name="c9" class="block w-16 border border-gray-300 rounded-md" placeholder="9º">
                    </div>
                </div>

                <div class="flex items-center bg-gray-50 p-2 rounded-md">
                    <label class="block text-sm font-medium text-gray-700 w-32">História:</label>
                    <div class="flex space-x-2 flex-1">
                        <input type="text" name="h6" class="block w-16 border border-gray-300 rounded-md" placeholder="6º" required>
                        <input type="text" name="h7" class="block w-16 border border-gray-300 rounded-md" placeholder="7º">
                        <input type="text" name="h8" class="block w-16 border border-gray-300 rounded-md" placeholder="8º">
                        <input type="text" name="h9" class="block w-16 border border-gray-300 rounded-md" placeholder="9º">
                    </div>
                </div>

                <div class="flex items-center bg-white p-2 rounded-md">
                    <label class="block text-sm font-medium text-gray-700 w-32">Geografia:</label>
                    <div class="flex space-x-2 flex-1">
                        <input type="text" name="g6" class="block w-16 border border-gray-300 rounded-md" placeholder="6º" required>
                        <input type="text" name="g7" class="block w-16 border border-gray-300 rounded-md" placeholder="7º">
                        <input type="text" name="g8" class="block w-16 border border-gray-300 rounded-md" placeholder="8º">
                        <input type="text" name="g9" class="block w-16 border border-gray-300 rounded-md" placeholder="9º">
                    </div>
                </div>

                <div class="flex items-center bg-white p-2 rounded-md">
                    <label class="block text-sm font-medium text-gray-700 w-32">Inglês:</label>
                    <div class="flex space-x-2 flex-1">
                        <input type="text" name="i6" class="block w-16 border border-gray-300 rounded-md" placeholder="6º" required>
                        <input type="text" name="i7" class="block w-16 border border-gray-300 rounded-md" placeholder="7º">
                        <input type="text" name="i8" class="block w-16 border border-gray-300 rounded-md" placeholder="8º">
                        <input type="text" name="i9" class="block w-16 border border-gray-300 rounded-md" placeholder="9º">
                    </div>
                </div>

                <div class="flex items-center bg-gray-50 p-2 rounded-md">
                    <label class="block text-sm font-medium text-gray-700 w-32">Educação Física:</label>
                    <div class="flex space-x-2 flex-1">
                        <input type="text" name="ef6" class="block w-16 border border-gray-300 rounded-md" placeholder="6º" required>
                        <input type="text" name="ef7" class="block w-16 border border-gray-300 rounded-md" placeholder="7º">
                        <input type="text" name="ef8" class="block w-16 border border-gray-300 rounded-md" placeholder="8º">
                        <input type="text" name="ef9" class="block w-16 border border-gray-300 rounded-md" placeholder="9º">
                    </div>
                </div>

                <div class="flex items-center bg-white p-2 rounded-md">
                    <label class="block text-sm font-medium text-gray-700 w-32">Religião:</label>
                    <div class="flex space-x-2 flex-1">
                        <input type="text" name="r6" class="block w-16 border border-gray-300 rounded-md" placeholder="6º" required>
                        <input type="text" name="r7" class="block w-16 border border-gray-300 rounded-md" placeholder="7º">
                        <input type="text" name="r8" class="block w-16 border border-gray-300 rounded-md" placeholder="8º">
                        <input type="text" name="r9" class="block w-16 border border-gray-300 rounded-md" placeholder="9º">
                    </div>
                </div>
            </div>
            <button type="submit" class="mt-6 w-full px-4 py-2 bg-blue-500 text-white font-bold rounded-md hover:bg-blue-600">Cadastrar</button>
        </form>`;
    }

        // Função específica para o formulário de Administração
        function createAdministracaoForm(schoolType) {
            return `
        <form id="informaticaForm" action="../controllers/controller.php" method="POST" class="space-y-6 max-w-lg mx-auto p-6 bg-white rounded-lg shadow-lg">
            <h2 class="text-xl font-semibold text-center mb-4">Formulário de Informática</h2>
            <div class="grid grid-cols-1 gap-4">
                <div class="flex flex-col">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Nome Completo <span class="text-red-500">*</span></label>
                    <input type="text" name="nome" class="mt-1 block w-full border border-gray-300 rounded-md focus:ring focus:ring-blue-300" placeholder="Nome Completo" required>
                </div>
                <div class="flex flex-col">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Data de Nascimento <span class="text-red-500">*</span></label>
                    <input type="date" name="nasc" class="mt-1 block w-full border border-gray-300 rounded-md focus:ring focus:ring-blue-300" required>
                </div>
                <div class="flex flex-col">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Curso Selecionado</label>
                    <input type="text" name="curso" value="Informática" class="mt-1 block w-full bg-gray-50 border border-gray-300 rounded-md" disabled>
                    <input type="hidden" name="curso" value="Informática">
                </div>
                <div class="flex flex-col">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Tipo de Escola</label>
                    <input type="text" name="${schoolType}" value="${schoolType}" class="mt-1 block w-full bg-gray-50 border border-gray-300 rounded-md" disabled>
                    <input type="hidden" name="publica" value="${schoolType}">
                </div>
                <div class="flex flex-col">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Bairro <span class="text-red-500">*</span></label>
                    <select name="bairro" class="mt-1 block w-full border border-gray-300 rounded-md focus:ring focus:ring-blue-300" required>
                        <option value="">Selecione um bairro</option>
                        <option value="Outra Banda">Bairro 1</option>
                        <option value="Outros Bairros">Bairro 2</option>
                    </select>
                </div>
                <div class="flex flex-col">
                    <label class="block text-sm font-medium text-gray-700 mb-1">PCD</label>
                    <select name="pcd" class="mt-1 block w-full border border-gray-300 rounded-md focus:ring focus:ring-blue-300">
                        <option value="nao">Não</option>
                        <option value="sim">Sim</option>
                    </select>
                </div>
            </div>

            <h2 class="text-lg font-semibold text-center mt-6 mb-4 border-b pb-2">Notas por Matéria</h2>
            <div class="grid grid-cols-1 gap-4">
                <div class="flex items-center bg-gray-50 p-2 rounded-md">
                    <label class="block text-sm font-medium text-gray-700 w-32">Português:</label>
                    <div class="flex space-x-2 flex-1">
                        <input type="text" name="lp6" class="block w-16 border border-gray-300 rounded-md" placeholder="6º" required>
                        <input type="text" name="lp7" class="block w-16 border border-gray-300 rounded-md" placeholder="7º">
                        <input type="text" name="lp8" class="block w-16 border border-gray-300 rounded-md" placeholder="8º">
                        <input type="text" name="lp9" class="block w-16 border border-gray-300 rounded-md" placeholder="9º">
                    </div>
                </div>

                <div class="flex items-center bg-white p-2 rounded-md">
                    <label class="block text-sm font-medium text-gray-700 w-32">Artes:</label>
                    <div class="flex space-x-2 flex-1">
                        <input type="text" name="a6" class="block w-16 border border-gray-300 rounded-md" placeholder="6º">
                        <input type="text" name="a7" class="block w-16 border border-gray-300 rounded-md" placeholder="7º">
                        <input type="text" name="a8" class="block w-16 border border-gray-300 rounded-md" placeholder="8º">
                        <input type="text" name="a9" class="block w-16 border border-gray-300 rounded-md" placeholder="9º">
                    </div>
                </div>

                <div class="flex items-center bg-gray-50 p-2 rounded-md">
                    <label class="block text-sm font-medium text-gray-700 w-32">Matemática:</label>
                    <div class="flex space-x-2 flex-1">
                        <input type="text" name="m6" class="block w-16 border border-gray-300 rounded-md" placeholder="6º" required>
                        <input type="text" name="m7" class="block w-16 border border-gray-300 rounded-md" placeholder="7º">
                        <input type="text" name="m8" class="block w-16 border border-gray-300 rounded-md" placeholder="8º">
                        <input type="text" name="m9" class="block w-16 border border-gray-300 rounded-md" placeholder="9º">
                    </div>
                </div>

                <div class="flex items-center bg-white p-2 rounded-md">
                    <label class="block text-sm font-medium text-gray-700 w-32">Ciências:</label>
                    <div class="flex space-x-2 flex-1">
                        <input type="text" name="c6" class="block w-16 border border-gray-300 rounded-md" placeholder="6º" required>
                        <input type="text" name="c7" class="block w-16 border border-gray-300 rounded-md" placeholder="7º">
                        <input type="text" name="c8" class="block w-16 border border-gray-300 rounded-md" placeholder="8º">
                        <input type="text" name="c9" class="block w-16 border border-gray-300 rounded-md" placeholder="9º">
                    </div>
                </div>

                <div class="flex items-center bg-gray-50 p-2 rounded-md">
                    <label class="block text-sm font-medium text-gray-700 w-32">História:</label>
                    <div class="flex space-x-2 flex-1">
                        <input type="text" name="h6" class="block w-16 border border-gray-300 rounded-md" placeholder="6º" required>
                        <input type="text" name="h7" class="block w-16 border border-gray-300 rounded-md" placeholder="7º">
                        <input type="text" name="h8" class="block w-16 border border-gray-300 rounded-md" placeholder="8º">
                        <input type="text" name="h9" class="block w-16 border border-gray-300 rounded-md" placeholder="9º">
                    </div>
                </div>

                <div class="flex items-center bg-white p-2 rounded-md">
                    <label class="block text-sm font-medium text-gray-700 w-32">Geografia:</label>
                    <div class="flex space-x-2 flex-1">
                        <input type="text" name="g6" class="block w-16 border border-gray-300 rounded-md" placeholder="6º" required>
                        <input type="text" name="g7" class="block w-16 border border-gray-300 rounded-md" placeholder="7º">
                        <input type="text" name="g8" class="block w-16 border border-gray-300 rounded-md" placeholder="8º">
                        <input type="text" name="g9" class="block w-16 border border-gray-300 rounded-md" placeholder="9º">
                    </div>
                </div>

                <div class="flex items-center bg-white p-2 rounded-md">
                    <label class="block text-sm font-medium text-gray-700 w-32">Inglês:</label>
                    <div class="flex space-x-2 flex-1">
                        <input type="text" name="i6" class="block w-16 border border-gray-300 rounded-md" placeholder="6º" required>
                        <input type="text" name="i7" class="block w-16 border border-gray-300 rounded-md" placeholder="7º">
                        <input type="text" name="i8" class="block w-16 border border-gray-300 rounded-md" placeholder="8º">
                        <input type="text" name="i9" class="block w-16 border border-gray-300 rounded-md" placeholder="9º">
                    </div>
                </div>

                <div class="flex items-center bg-gray-50 p-2 rounded-md">
                    <label class="block text-sm font-medium text-gray-700 w-32">Educação Física:</label>
                    <div class="flex space-x-2 flex-1">
                        <input type="text" name="ef6" class="block w-16 border border-gray-300 rounded-md" placeholder="6º" required>
                        <input type="text" name="ef7" class="block w-16 border border-gray-300 rounded-md" placeholder="7º">
                        <input type="text" name="ef8" class="block w-16 border border-gray-300 rounded-md" placeholder="8º">
                        <input type="text" name="ef9" class="block w-16 border border-gray-300 rounded-md" placeholder="9º">
                    </div>
                </div>

                <div class="flex items-center bg-white p-2 rounded-md">
                    <label class="block text-sm font-medium text-gray-700 w-32">Religião:</label>
                    <div class="flex space-x-2 flex-1">
                        <input type="text" name="r6" class="block w-16 border border-gray-300 rounded-md" placeholder="6º" required>
                        <input type="text" name="r7" class="block w-16 border border-gray-300 rounded-md" placeholder="7º">
                        <input type="text" name="r8" class="block w-16 border border-gray-300 rounded-md" placeholder="8º">
                        <input type="text" name="r9" class="block w-16 border border-gray-300 rounded-md" placeholder="9º">
                    </div>
                </div>
            </div>
            <button type="submit" class="mt-6 w-full px-4 py-2 bg-blue-500 text-white font-bold rounded-md hover:bg-blue-600">Cadastrar</button>
        </form>`;
    }
        // Função específica para o formulário de Edificações
        function createEdificacoesForm(schoolType) {
            return `
         <form id="informaticaForm" action="../controllers/controller.php" method="POST" class="space-y-6 max-w-lg mx-auto p-6 bg-white rounded-lg shadow-lg">
            <h2 class="text-xl font-semibold text-center mb-4">Formulário de Informática</h2>
            <div class="grid grid-cols-1 gap-4">
                <div class="flex flex-col">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Nome Completo <span class="text-red-500">*</span></label>
                    <input type="text" name="nome" class="mt-1 block w-full border border-gray-300 rounded-md focus:ring focus:ring-blue-300" placeholder="Nome Completo" required>
                </div>
                <div class="flex flex-col">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Data de Nascimento <span class="text-red-500">*</span></label>
                    <input type="date" name="nasc" class="mt-1 block w-full border border-gray-300 rounded-md focus:ring focus:ring-blue-300" required>
                </div>
                <div class="flex flex-col">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Curso Selecionado</label>
                    <input type="text" name="curso" value="Informática" class="mt-1 block w-full bg-gray-50 border border-gray-300 rounded-md" disabled>
                    <input type="hidden" name="curso" value="Informática">
                </div>
                <div class="flex flex-col">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Tipo de Escola</label>
                    <input type="text" name="${schoolType}" value="${schoolType}" class="mt-1 block w-full bg-gray-50 border border-gray-300 rounded-md" disabled>
                    <input type="hidden" name="Escola" value="${schoolType}">
                </div>
                <div class="flex flex-col">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Bairro <span class="text-red-500">*</span></label>
                    <select name="bairro" class="mt-1 block w-full border border-gray-300 rounded-md focus:ring focus:ring-blue-300" required>
                        <option value="">Selecione um bairro</option>
                        <option value="bairro1">Outra Banda</option>
                        <option value="bairro2">Outros Bairros</option>
                    </select>
                </div>
                <div class="flex flex-col">
                    <label class="block text-sm font-medium text-gray-700 mb-1">PCD</label>
                    <select name="pcd" class="mt-1 block w-full border border-gray-300 rounded-md focus:ring focus:ring-blue-300">
                        <option value="nao">Não</option>
                        <option value="sim">Sim</option>
                    </select>
                </div>
            </div>

            <h2 class="text-lg font-semibold text-center mt-6 mb-4 border-b pb-2">Notas por Matéria</h2>
            <div class="grid grid-cols-1 gap-4">
                <div class="flex items-center bg-gray-50 p-2 rounded-md">
                    <label class="block text-sm font-medium text-gray-700 w-32">Português:</label>
                    <div class="flex space-x-2 flex-1">
                        <input type="text" name="lp6" class="block w-16 border border-gray-300 rounded-md" placeholder="6º" required>
                        <input type="text" name="lp7" class="block w-16 border border-gray-300 rounded-md" placeholder="7º">
                        <input type="text" name="lp8" class="block w-16 border border-gray-300 rounded-md" placeholder="8º">
                        <input type="text" name="lp9" class="block w-16 border border-gray-300 rounded-md" placeholder="9º">
                    </div>
                </div>

                <div class="flex items-center bg-white p-2 rounded-md">
                    <label class="block text-sm font-medium text-gray-700 w-32">Artes:</label>
                    <div class="flex space-x-2 flex-1">
                        <input type="text" name="a6" class="block w-16 border border-gray-300 rounded-md" placeholder="6º">
                        <input type="text" name="a7" class="block w-16 border border-gray-300 rounded-md" placeholder="7º">
                        <input type="text" name="a8" class="block w-16 border border-gray-300 rounded-md" placeholder="8º">
                        <input type="text" name="a9" class="block w-16 border border-gray-300 rounded-md" placeholder="9º">
                    </div>
                </div>

                <div class="flex items-center bg-gray-50 p-2 rounded-md">
                    <label class="block text-sm font-medium text-gray-700 w-32">Matemática:</label>
                    <div class="flex space-x-2 flex-1">
                        <input type="text" name="m6" class="block w-16 border border-gray-300 rounded-md" placeholder="6º" required>
                        <input type="text" name="m7" class="block w-16 border border-gray-300 rounded-md" placeholder="7º">
                        <input type="text" name="m8" class="block w-16 border border-gray-300 rounded-md" placeholder="8º">
                        <input type="text" name="m9" class="block w-16 border border-gray-300 rounded-md" placeholder="9º">
                    </div>
                </div>

                <div class="flex items-center bg-white p-2 rounded-md">
                    <label class="block text-sm font-medium text-gray-700 w-32">Ciências:</label>
                    <div class="flex space-x-2 flex-1">
                        <input type="text" name="c6" class="block w-16 border border-gray-300 rounded-md" placeholder="6º" required>
                        <input type="text" name="c7" class="block w-16 border border-gray-300 rounded-md" placeholder="7º">
                        <input type="text" name="c8" class="block w-16 border border-gray-300 rounded-md" placeholder="8º">
                        <input type="text" name="c9" class="block w-16 border border-gray-300 rounded-md" placeholder="9º">
                    </div>
                </div>

                <div class="flex items-center bg-gray-50 p-2 rounded-md">
                    <label class="block text-sm font-medium text-gray-700 w-32">História:</label>
                    <div class="flex space-x-2 flex-1">
                        <input type="text" name="h6" class="block w-16 border border-gray-300 rounded-md" placeholder="6º" required>
                        <input type="text" name="h7" class="block w-16 border border-gray-300 rounded-md" placeholder="7º">
                        <input type="text" name="h8" class="block w-16 border border-gray-300 rounded-md" placeholder="8º">
                        <input type="text" name="h9" class="block w-16 border border-gray-300 rounded-md" placeholder="9º">
                    </div>
                </div>

                <div class="flex items-center bg-white p-2 rounded-md">
                    <label class="block text-sm font-medium text-gray-700 w-32">Geografia:</label>
                    <div class="flex space-x-2 flex-1">
                        <input type="text" name="g6" class="block w-16 border border-gray-300 rounded-md" placeholder="6º" required>
                        <input type="text" name="g7" class="block w-16 border border-gray-300 rounded-md" placeholder="7º">
                        <input type="text" name="g8" class="block w-16 border border-gray-300 rounded-md" placeholder="8º">
                        <input type="text" name="g9" class="block w-16 border border-gray-300 rounded-md" placeholder="9º">
                    </div>
                </div>

                <div class="flex items-center bg-white p-2 rounded-md">
                    <label class="block text-sm font-medium text-gray-700 w-32">Inglês:</label>
                    <div class="flex space-x-2 flex-1">
                        <input type="text" name="i6" class="block w-16 border border-gray-300 rounded-md" placeholder="6º" required>
                        <input type="text" name="i7" class="block w-16 border border-gray-300 rounded-md" placeholder="7º">
                        <input type="text" name="i8" class="block w-16 border border-gray-300 rounded-md" placeholder="8º">
                        <input type="text" name="i9" class="block w-16 border border-gray-300 rounded-md" placeholder="9º">
                    </div>
                </div>

                <div class="flex items-center bg-gray-50 p-2 rounded-md">
                    <label class="block text-sm font-medium text-gray-700 w-32">Educação Física:</label>
                    <div class="flex space-x-2 flex-1">
                        <input type="text" name="ef6" class="block w-16 border border-gray-300 rounded-md" placeholder="6º" required>
                        <input type="text" name="ef7" class="block w-16 border border-gray-300 rounded-md" placeholder="7º">
                        <input type="text" name="ef8" class="block w-16 border border-gray-300 rounded-md" placeholder="8º">
                        <input type="text" name="ef9" class="block w-16 border border-gray-300 rounded-md" placeholder="9º">
                    </div>
                </div>

                <div class="flex items-center bg-white p-2 rounded-md">
                    <label class="block text-sm font-medium text-gray-700 w-32">Religião:</label>
                    <div class="flex space-x-2 flex-1">
                        <input type="text" name="r6" class="block w-16 border border-gray-300 rounded-md" placeholder="6º" required>
                        <input type="text" name="r7" class="block w-16 border border-gray-300 rounded-md" placeholder="7º">
                        <input type="text" name="r8" class="block w-16 border border-gray-300 rounded-md" placeholder="8º">
                        <input type="text" name="r9" class="block w-16 border border-gray-300 rounded-md" placeholder="9º">
                    </div>
                </div>
            </div>
            <button type="submit" class="mt-6 w-full px-4 py-2 bg-blue-500 text-white font-bold rounded-md hover:bg-blue-600">Cadastrar</button>
        </form>`;
    }


        // Função para criar inputs de notas
        function createGradeInputs(year, courseName, subjects) {
            `
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
                    const inputId = `${subject}${year}_${courseName}`;
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
        window.enfermagemPub = enfermagemPub;
        window.enfermagemPriv = enfermagemPriv;
        window.informaticaPub = informaticaPub;
        window.informaticaPriv = informaticaPriv;
        window.administracaoPub = administracaoPub;
        window.administracaoPriv = administracaoPriv;
        window.edificacoesPub = edificacoesPub;
        window.edificacoesPriv = edificacoesPriv;

    </script>
    <style>

    </style>
</body>

</html>