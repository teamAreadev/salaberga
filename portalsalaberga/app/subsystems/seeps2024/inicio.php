<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema SEEPS 2024</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #1a1c2e 0%, #283593 100%);
            min-height: 100vh;
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        }

        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.2);
        }

        .gradient-border {
            position: relative;
            border-radius: 10px;
            padding: 1px;
            background: linear-gradient(45deg, #ff6b6b, #4ecdc4);
        }

        .gradient-border::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border-radius: 9px;
            background: #1a1c2e;
            margin: 1px;
            z-index: -1;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background: rgba(26, 28, 46, 0.95);
            min-width: 200px;
            box-shadow: 0 8px 32px rgba(31, 38, 135, 0.37);
            border-radius: 10px;
            backdrop-filter: blur(8px);
            z-index: 1000;
        }

        .dropdown:hover .dropdown-content {
            display: block;
            animation: fadeIn 0.3s ease;
        }

        .sub-dropdown-content {
            display: none;
            position: absolute;
            left: 100%;
            top: 0;
            background: rgba(26, 28, 46, 0.95);
            min-width: 200px;
            box-shadow: 0 8px 32px rgba(31, 38, 135, 0.37);
            border-radius: 10px;
            backdrop-filter: blur(8px);
        }

        .dropdown-item:hover .sub-dropdown-content {
            display: block;
            animation: fadeIn 0.3s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fadeIn {
            animation: fadeIn 0.5s ease forwards;
        }

        /* Estilos para o modal personalizado */
        .custom-modal {
            background: linear-gradient(135deg, #1e213a 0%, #292d3e 100%);
            border-radius: 20px;
            color: #fff;
        }

        .custom-input {
            background: rgba(255, 255, 255, 0.05) !important;
            border: 1px solid rgba(255, 255, 255, 0.1) !important;
            color: #fff !important;
            border-radius: 10px !important;
            padding: 12px !important;
            transition: all 0.3s ease;
        }

        .custom-input:focus {
            background: rgba(255, 255, 255, 0.1) !important;
            border-color: #4ecdc4 !important;
            box-shadow: 0 0 0 2px rgba(78, 205, 196, 0.2) !important;
        }

        /* Animações para cards */
        .card-enter {
            opacity: 0;
            transform: translateY(20px);
        }

        .card-enter-active {
            opacity: 1;
            transform: translateY(0);
            transition: all 0.5s ease;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header class="glass-effect fixed w-full top-0 z-50 px-6 py-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-4">
                <img src="logo.svg" alt="SEEPS" class="h-12 w-auto">
                <h1 class="text-2xl font-bold bg-gradient-to-r from-blue-400 to-teal-400 bg-clip-text text-transparent">
                    SEEPS 2024
                </h1>
            </div>

            <!-- Menu de Navegação -->
            <nav class="hidden md:flex items-center space-x-8">
                <!-- Dropdown Relatórios -->
                <div class="dropdown relative">
                    <button class="flex items-center space-x-2 text-black hover:text-blue-400 transition-colors">
                        <span>Relatórios</span>
                        <i class="fas fa-chevron-down text-sm"></i>
                    </button>
                    <div class="dropdown-content mt-2">
                        <!-- Enfermagem -->
                        <div class="dropdown-item relative">
                            <a href="#" class="block px-4 py-2 text-black hover:bg-blue-600/30 transition-colors">
                                Enfermagem
                            </a>
                            <div class="sub-dropdown-content">
                                <a href="#" class="block px-4 py-2 text-black hover:bg-blue-600/30">Pública Geral</a>
                                <a href="#" class="block px-4 py-2 text-black hover:bg-blue-600/30">Privada Geral</a>
                                <a href="#" class="block px-4 py-2 text-black hover:bg-blue-600/30">Pública AC</a>
                                <a href="#" class="block px-4 py-2 text-black hover:bg-blue-600/30">Privada AC</a>
                                <a href="#" class="block px-4 py-2 text-black hover:bg-blue-600/30">Pública Cota</a>
                                <a href="#" class="block px-4 py-2 text-black hover:bg-blue-600/30">Privada Cota</a>
                            </div>
                        </div>
                        <!-- Outros cursos similar -->
                    </div>
                </div>

                <!-- Dropdown Resultados -->
                <div class="dropdown relative">
                    <button class="flex items-center space-x-2 text-black hover:text-blue-400 transition-colors">
                        <span>Resultados</span>
                        <i class="fas fa-chevron-down text-sm"></i>
                    </button>
                    <div class="dropdown-content mt-2">
                        <!-- Similar ao dropdown de Relatórios -->
                    </div>
                </div>
            </nav>

            <!-- Botões de Ação -->
            <div class="flex items-center space-x-4">
                <button onclick="showUpdateModal()" class="px-6 py-2 rounded-xl bg-gradient-to-r from-blue-500 to-teal-400 
                               hover:from-blue-600 hover:to-teal-500 transition-all duration-300 shadow-lg">
                    <i class="fas fa-sync-alt mr-2"></i>Atualizar
                </button>
                <button class="px-6 py-2 rounded-xl bg-gradient-to-r from-red-500 to-pink-500 
                             hover:from-red-600 hover:to-pink-600 transition-all duration-300 shadow-lg">
                    <i class="fas fa-sign-out-alt mr-2"></i>Sair
                </button>
            </div>
        </div>
    </header>

    <!-- Conteúdo Principal -->
    <main class="container mx-auto pt-24 px-6 pb-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Card do Curso -->
            <div class="gradient-border card-hover animate-fadeIn">
                <div class="p-6">
                    <h2
                        class="text-xl font-bold mb-4 bg-gradient-to-r from-red-400 to-pink-400 bg-clip-text text-transparent">
                        ENFERMAGEM
                    </h2>
                    <div class="space-y-4">
                        <button onclick="showPublicModal('Enfermagem')"
                            class="w-full py-3 rounded-lg bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 transition-all duration-300 shadow-lg">
                            PÚBLICA
                        </button>
                        <button onclick="showPrivateModal('Enfermagem')"
                            class="w-full py-3 rounded-lg bg-gradient-to-r from-purple-500 to-purple-600 hover:from-purple-600 hover:to-purple-700 transition-all duration-300 shadow-lg">
                            PRIVADA
                        </button>
                    </div>
                </div>
            </div>
            <!-- Repetir para outros cursos -->
        </div>
    </main>
    <script>
        // Configuração personalizada do SweetAlert2
        const modalConfig = {
            customClass: {
                popup: 'custom-modal',
                input: 'custom-input',
                confirmButton: 'px-6 py-3 bg-gradient-to-r from-green-500 to-teal-500 rounded-lg text-black font-medium hover:from-green-600 hover:to-teal-600 transition-all duration-300',
                cancelButton: 'px-6 py-3 bg-gradient-to-r from-gray-500 to-gray-600 rounded-lg text-black font-medium hover:from-gray-600 hover:to-gray-700 transition-all duration-300'
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
                        <h3 class="text-xl font-semibold text-black">${year}º Ano</h3>
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
                                              transition-all duration-300 text-black placeholder-gray-400"
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
                                              transition-all duration-300 text-black"
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
                                              transition-all duration-300 text-black"
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

        function showUpdateModal() {
            Swal.fire({
                ...modalConfig,
                title: '<div class="text-2xl font-bold mb-2">Atualizar Cadastro</div>',
                width: '80%',
                html: `
                    <form id="updateForm" class="space-y-6 text-left">
                        <div class="relative group mb-8">
                            <label class="block text-sm font-medium text-gray-300 mb-2">
                                ID do Aluno
                            </label>
                            <input type="text" 
                                   id="studentId" 
                                   class="w-full px-4 py-3 bg-gray-800/50 border border-gray-700 rounded-lg
                                          focus:border-blue-500 focus:ring-2 focus:ring-blue-500/50 
                                          transition-all duration-300 text-white"
                                   required>
                        </div>
                        ${[6, 7, 8, 9].map(year => createGradeInputs(year)).join('')}
                    </form>
                `,
                confirmButtonText: 'Atualizar',
                showCancelButton: true,
                cancelButtonText: 'Cancelar',
                showLoaderOnConfirm: true,
                preConfirm: () => {
                    const form = document.getElementById('updateForm');
                    if (!form.checkValidity()) {
                        Swal.showValidationMessage('Por favor, preencha todos os campos corretamente');
                        return false;
                    }
                    return collectUpdateFormData();
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    showSuccessMessage('Cadastro atualizado com sucesso!');
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

        function collectUpdateFormData() {
            // ... (mantém a mesma lógica anterior)
        }
    </script>
    </body>
    
    </html>