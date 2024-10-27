<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do Usuário</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #ffb84d6b 0%, #008c46c4 100%);
        }

        .glass-effect {
            background: #005A24;
            backdrop-filter: blur(20px);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.18);
            box-shadow: 0 8px 32px 0 rgba(46, 125, 50, 0.37);
        }

        .profile-header {
            background: linear-gradient(90deg, #008C45 0%, #ff8c00a5 90%);
        }

        .profile-icon {
            border: 4px solid white;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }

        .profile-icon:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(255, 140, 0, 0.5);
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        .progress-bar {
            transition: width 1s ease-in-out;
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(76, 175, 80, 0.7);
            }
            70% {
                box-shadow: 0 0 0 10px rgba(76, 175, 80, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(76, 175, 80, 0);
            }
        }

        .pulse {
            animation: pulse 2s infinite;
        }

        .editable {
            border-bottom: 2px dashed #005A24;
            padding: 4px 8px;
            border-radius: 4px;
            background-color: rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }

        .editable:focus {
            outline: none;
            border-color: #ff8c00;
            box-shadow: 0 0 0 3px rgba(255, 140, 0, 0.2);
        }

        .back-button {
            position: fixed;
            top: 20px;
            left: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            color: #005A24;
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            z-index: 1000;
        }

        .back-button:hover {
            background-color: #005a24c7;
            color: white;
            transform: scale(1.1);
        }

        .back-button:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(76, 175, 80, 0.5);
        }

        /* Novos estilos para os botões */
        .action-button {
            background: linear-gradient(90deg, #008C45 0%, #00a651 90%);
            color: white;
            padding: 10px 20px;
            border-radius: 10px;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .action-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        }

        .action-button.edit {
            background: linear-gradient(90deg, #008C45 0%, #00a651 90%);
        }

        .action-button.password {
            background: linear-gradient(90deg, #ff8c00 0%, #ffa500 90%);
        }

        .action-button.delete {
            background: linear-gradient(90deg, #dc3545 0%, #ff4444 90%);
        }

        .action-button.logout {
            background: linear-gradient(90deg, #6c757d 0%, #868e96 90%);
        }

        /* Estilos para os ícones de foto */
        .photo-control {
            background: linear-gradient(90deg, #008C45 0%, #00a651 90%);
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .photo-control:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        }

        .photo-control.delete {
            background: linear-gradient(90deg, #dc3545 0%, #ff4444 90%);
        }

        /* Responsividade */
        @media (max-width: 640px) {
            .back-button {
                top: 10px;
                left: 10px;
                width: 40px;
                height: 40px;
                font-size: 20px;
            }

            .action-button {
                width: 100%;
                margin-bottom: 10px;
            }
        }

        /* Tooltip */
        .tooltip {
            position: relative;
        }

        .tooltip:before {
            content: attr(data-tooltip);
            position: absolute;
            bottom: 100%;
            left: 50%;
            transform: translateX(-50%);
            padding: 5px 10px;
            background: rgba(0, 90, 36, 0.9);
            color: white;
            font-size: 12px;
            border-radius: 4px;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            white-space: nowrap;
        }

        .tooltip:hover:before {
            opacity: 1;
            visibility: visible;
            bottom: 120%;
        }
    </style>
</head>
<body>
    <!-- Botão Voltar -->
    <a aria-label='Voltar para a página inicial' class='back-button' href="javascript:history.back()">
        <i class="fas fa-arrow-left"></i>
    </a>

    <!-- Container Principal -->
    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="glass-effect w-full max-w-4xl">
            <!-- Cabeçalho do Perfil -->
            <div class="profile-header text-white p-6 md:p-10 text-center md:text-left md:flex md:items-center md:justify-between rounded-t-2xl">
                <div class="md:flex md:items-center">
                    <div class="relative">
                        <img id="profileIcon" src="https://via.placeholder.com/80" alt="Profile Icon"
                            class="w-24 h-24 rounded-full profile-icon mx-auto md:mx-0 mb-4 md:mb-0 md:mr-6 pulse">
                        <div class="absolute bottom-0 right-0 flex hidden" id="photoControls">
                            <label for="profilePicture" class="photo-control tooltip mr-2" data-tooltip="Adicionar foto">
                                <i class="fas fa-camera"></i>
                            </label>
                            <button id="deletePhotoBtn" class="photo-control delete tooltip" data-tooltip="Remover foto">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                        <input type="file" id="profilePicture" class="hidden" accept="image/*">
                    </div>
                    <div>
                        <h2 class="text-3xl md:text-4xl font-bold mb-2" id="nomeDisplay"></h2>
                        <p class="text-sm md:text-base opacity-75">Aluno da EEEP Salaberga</p>
                    </div>
                </div>

                <!-- Botões de Ação -->
                <div class="flex flex-col md:flex-row gap-3 mt-6 md:mt-0">
                    <button id="editProfileBtn" class="action-button edit">
                        <i class="fas fa-edit"></i>
                        Editar Perfil
                    </button>
                    <a href="/alterar-senha" class="action-button password">
                        <i class="fas fa-key"></i>
                        Mudar Senha
                    </a>
                    <button id="deleteProfileBtn" class="action-button delete">
                        <i class="fas fa-user-times"></i>
                        Excluir Perfil
                    </button>
                    <button id="logoutBtn" class="action-button logout">
                        <i class="fas fa-sign-out-alt"></i>
                        Sair
                    </button>
                </div>
            </div>

            <!-- Conteúdo do Perfil -->
            <div class="bg-white rounded-b-2xl">
                <div class="border-b border-gray-200">
                    <nav class="flex -mb-px">
                        <a href="#" class="tab-link w-full py-4 px-1 text-center border-b-2 font-medium text-sm leading-5 text-blue-600 border-blue-500 focus:outline-none focus:text-blue-800 focus:border-blue-700" data-tab="info">
                            Informações
                        </a>
                    </nav>
                </div>

                <!-- Informações do Perfil -->
                <div id="infoTab" class="tab-content active p-6 md:p-10">
                    <h3 class="text-xl font-semibold text-gray-700 mb-4">Informações Pessoais</h3>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-500">Matrícula</label>
                            <p id="matriculaDisplay" class="mt-1 text-lg text-gray-900 font-medium"></p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-500">E-mail</label>
                            <p id="emailDisplay" class="mt-1 text-lg text-gray-900 font-medium"></p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-500">Telefone</label>
                            <p id="telefoneDisplay" class="mt-1 text-lg text-gray-900 font-medium"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de Confirmação de Exclusão -->
    <div id="deleteConfirmModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden">
        <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
            <div class="mt-3 text-center">
                <h3 class="text-lg leading-6 font-medium text-gray-900">Excluir Perfil</h3>
                <div class="mt-2 px-7 py-3">
                    <p class="text-sm text-gray-500" id="modalMessage"></p>
                </div>
                <div class="items-center px-4 py-3">
                    <button id="confirmDelete" class="action-button delete w-full mb-2">
                        Excluir
                    </button>
                    <button id="cancelDelete" class="action-button w-full">
                        Cancelar
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de Confirmação de Logout -->
    <div id="logoutConfirmModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden">
        <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
            <div class="mt-3 text-center">
                <h3 class="text-lg leading-6 font-medium text-gray-900">Sair da Conta</h3>
                <div class="mt-2 px-7 py-3">
                    <p class="text-sm text-gray-500">Tem certeza que deseja sair da sua conta?</p>
                </div>
                <div class="items-center px-4 py-3">
                    <button id="confirmLogout" class="action-button logout w-full mb-2">
                        Confirmar
                    </button>
                    <button id="cancelLogout" class="action-button w-full">
                        Cancelar
                    </button>
                </div>
            </div>
        </div>
    </div>

    </body>
    </html>