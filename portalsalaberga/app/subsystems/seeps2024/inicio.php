<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página similar</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-gray-800 text-white">
    <header class="bg-gray-800 text-white py-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <img src="logo.svg" alt="Logo" class="h-8 animate-bounce">
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="#" class="hover:text-gray-400 transition duration-300 ease-in-out">RELATORIOS</a></li>
                    <li><a href="#" class="hover:text-gray-400 transition duration-300 ease-in-out">RESULTADO</a></li>
                </ul>
            </nav>
            <div class="flex space-x-2">
                <button class="bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600 transition duration-300 ease-in-out" onclick="showUpdateModal()">ATUALIZAR</button>
                <button class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 transition duration-300 ease-in-out">SAIR</button>
            </div>
        </div>
    </header>

    <div class="flex flex-col items-center justify-center h-screen">
        <div class="grid grid-cols-4 gap-4 w-full max-w-6xl">
            <!-- Enfermagem -->
            <div class="flex flex-col items-center p-4 bg-red-500 rounded-lg shadow-md hover:scale-105 transition duration-300 ease-in-out">
                <img src="enfermagem.svg" alt="Enfermagem" class="h-16 w-16 mb-2 animate-pulse">
                <span class="text-white font-bold">ENFERMAGEM</span>
                <div class="flex flex-col items-center mt-2">
                    <span class="text-white">CADASTRAR CANDIDATO</span>
                    <div class="flex space-x-2 mt-2">
                        <button class="bg-white text-red-500 px-4 py-2 rounded-md hover:bg-red-500 hover:text-white transition duration-300 ease-in-out" onclick="showPublicModal('Enfermagem')">PÚBLICA</button>
                        <button class="bg-white text-red-500 px-4 py-2 rounded-md hover:bg-red-500 hover:text-white transition duration-300 ease-in-out" onclick="showPrivateModal('Enfermagem')">PRIVADA</button>
                    </div>
                </div>
            </div>
            
            <!-- Informática -->
            <div class="flex flex-col items-center p-4 bg-blue-500 rounded-lg shadow-md hover:scale-105 transition duration-300 ease-in-out">
                <img src="informatica.svg" alt="Informática" class="h-16 w-16 mb-2 animate-pulse">
                <span class="text-white font-bold">INFORMÁTICA</span>
                <div class="flex flex-col items-center mt-2">
                    <span class="text-white">CADASTRAR CANDIDATO</span>
                    <div class="flex space-x-2 mt-2">
                        <button class="bg-white text-blue-500 px-4 py-2 rounded-md hover:bg-blue-500 hover:text-white transition duration-300 ease-in-out" onclick="showPublicModal('Informática')">PÚBLICA</button>
                        <button class="bg-white text-blue-500 px-4 py-2 rounded-md hover:bg-blue-500 hover:text-white transition duration-300 ease-in-out" onclick="showPrivateModal('Informática')">PRIVADA</button>
                    </div>
                </div>
            </div>
            
            <!-- Administração -->
            <div class="flex flex-col items-center p-4 bg-green-500 rounded-lg shadow-md hover:scale-105 transition duration-300 ease-in-out">
                <img src="administracao.svg" alt="Administração" class="h-16 w-16 mb-2 animate-pulse">
                <span class="text-white font-bold">ADMINISTRAÇÃO</span>
                <div class="flex flex-col items-center mt-2">
                    <span class="text-white">CADASTRAR CANDIDATO</span>
                    <div class="flex space-x-2 mt-2">
                        <button class="bg-white text-green-500 px-4 py-2 rounded-md hover:bg-green-500 hover:text-white transition duration-300 ease-in-out" onclick="showPublicModal('Administração')">PÚBLICA</button>
                        <button class="bg-white text-green-500 px-4 py-2 rounded-md hover:bg-green-500 hover:text-white transition duration-300 ease-in-out" onclick="showPrivateModal('Administração')">PRIVADA</button>
                    </div>
                </div>
            </div>
            
            <!-- Edificações -->
            <div class="flex flex-col items-center p-4 bg-yellow-500 rounded-lg shadow-md hover:scale-105 transition duration-300 ease-in-out">
                <img src="edificacoes.svg" alt="Edificações" class="h-16 w-16 mb-2 animate-pulse">
                <span class="text-white font-bold">EDIFICAÇÕES</span>
                <div class="flex flex-col items-center mt-2">
                    <span class="text-white">CADASTRAR CANDIDATO</span>
                    <div class="flex space-x-2 mt-2">
                        <button class="bg-white text-yellow-500 px-4 py-2 rounded-md hover:bg-yellow-500 hover:text-white transition duration-300 ease-in-out" onclick="showPublicModal('Edificações')">PÚBLICA</button>
                        <button class="bg-white text-yellow-500 px-4 py-2 rounded-md hover:bg-yellow-500 hover:text-white transition duration-300 ease-in-out" onclick="showPrivateModal('Edificações')">PRIVADA</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="mt-8 text-gray-400 text-sm">
            <p>Sistema</p>
            <p>Objetivo: o cadastro de candidatos pretendentes aos cursos da EEEP Salaberga Torquato Gomes de Matos de acordo com a portaria 1342/2014 datada de 17/11/2014.</p>
            <p>Requisito: Mantenha o Java Script de seu navegador ativo, pois sua autenticação é feita por referência linguagem, o que o torna mais leve e rápido.</p>
            <p>Suporte: (85) 98631 7549 - otavio@aluno.uece.br</p>
        </div>
    </div>

    <script>
        function showPublicModal(course) {
            Swal.fire({
                title: `SEEPS 2024 - ESCOLA PÚBLICA (${course})`,
                html: `
                    <input type="text" id="name" class="swal2-input" placeholder="Nome">
                    <input type="text" id="birthDate" class="swal2-input" placeholder="Data de Nascimento">
                    <div class="flex space-x-2">
                        <div class="w-1/2">
                            <label for="course" class="block mb-2">Curso</label>
                            <select id="course" class="swal2-select">
                                <option>Enfermagem</option>
                                <option>Informática</option>
                                <option>Administração</option>
                                <option>Edificações</option>
                            </select>
                        </div>
                        <div class="w-1/2">
                            <label for="neighborhood" class="block mb-2">Bairro</label>
                            <select id="neighborhood" class="swal2-select">
                                <option>Outra Banda</option>
                                <option>Outros</option>
                            </select>
                        </div>
                    </div>
                    <div class="grid grid-cols-4 gap-4 mt-4">
                        <input type="number" id="grade6" class="swal2-input" placeholder="6o Ano">
                        <input type="number" id="grade7" class="swal2-input" placeholder="7o Ano">
                        <input type="number" id="grade8" class="swal2-input" placeholder="8o Ano">
                        <input type="number" id="grade9" class="swal2-input" placeholder="9o Ano">
                    </div>
                `,
                confirmButtonText: 'Cadastrar',
                showCancelButton: true,
                cancelButtonText: 'Cancelar',
                focusConfirm: false,
                preConfirm: () => {
                    const name = document.getElementById('name').value;
                    const birthDate = document.getElementById('birthDate').value;
                    const course = document.getElementById('course').value;
                    const neighborhood = document.getElementById('neighborhood').value;
                    const grade6 = document.getElementById('grade6').value;
                    const grade7 = document.getElementById('grade7').value;
                    const grade8 = document.getElementById('grade8').value;
                    const grade9 = document.getElementById('grade9').value;

                    if (!name || !birthDate || !course || !neighborhood || !grade6 || !grade7 || !grade8 || !grade9) {
                        Swal.showValidationMessage('Por favor, preencha todos os campos.');
                    }

                    return { name, birthDate, course, neighborhood, grade6, grade7, grade8, grade9 };
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(`Candidato ${result.value.name} cadastrado com sucesso!`);
                }
            });
        }

        function showPrivateModal(course) {
            Swal.fire({
                title: `SEEPS 2024 - ESCOLA PRIVADA (${course})`,
                html: `
                    <input type="text" id="name" class="swal2-input" placeholder="Nome">
                    <input type="text" id="birthDate" class="swal2-input" placeholder="Data de Nascimento">
                    <div class="flex space-x-2">
                        <div class="w-1/2">
                            <label for="course" class="block mb-2">Curso</label>
                            <select id="course" class="swal2-select">
                                <option>Enfermagem</option>
                                <option>Informática</option>
                                <option>Administração</option>
                                <option>Edificações</option>
                            </select>
                        </div>
                        <div class="w-1/2">
                            <label for="neighborhood" class="block mb-2">Bairro</label>
                            <select id="neighborhood" class="swal2-select">
                                <option>Outra Banda</option>
                                <option>Outros</option>
                            </select>
                        </div>
                    </div>
                    <div class="grid grid-cols-4 gap-4 mt-4">
                        <input type="number" id="grade6" class="swal2-input" placeholder="6o Ano">
                        <input type="number" id="grade7" class="swal2-input" placeholder="7o Ano">
                        <input type="number" id="grade8" class="swal2-input" placeholder="8o Ano">
                        <input type="number" id="grade9" class="swal2-input" placeholder="9o Ano">
                    </div>
                `,
                confirmButtonText: 'Cadastrar',
                showCancelButton: true,
                cancelButtonText: 'Cancelar',
                focusConfirm: false,
                preConfirm: () => {
                    const name = document.getElementById('name').value;
                    const birthDate = document.getElementById('birthDate').value;
                    const course = document.getElementById('course').value;
                    const neighborhood = document.getElementById('neighborhood').value;
                    const grade6 = document.getElementById('grade6').value;
                    const grade7 = document.getElementById('grade7').value;
                    const grade8 = document.getElementById('grade8').value;
                    const grade9 = document.getElementById('grade9').value;

                    if (!name || !birthDate || !course || !neighborhood || !grade6 || !grade7 || !grade8 || !grade9) {
                        Swal.showValidationMessage('Por favor, preencha todos os campos.');
                    }

                    return { name, birthDate, course, neighborhood, grade6, grade7, grade8, grade9 };
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(`Candidato ${result.value.name} cadastrado com sucesso!`);
                }
            });
        }

        function showUpdateModal() {
            const modal = document.createElement('div');
            modal.innerHTML = `
            <div class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
                    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                            <div class="sm:flex sm:items-start">
                                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                    <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">SEEPS 2025</h3>
                                    <div class="mt-2">
                                        <p class="text-sm text-gray-500">Atualizar Cadastro</p>
                                    </div>
                                </div>
                            </div>
                            <form class="mt-5 space-y-6">
                                <div class="grid grid-cols-3 gap-6">
                                    <div>
                                        <label for="id" class="block text-sm font-medium text-gray-700">ID</label>
                                        <input type="text" name="id" id="id" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                    </div>
                                    <div>
                                        <label for="port" class="block text-sm font-medium text-gray-700">Portfólio</label>
                                        <input type="text" name="port" id="port" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                    </div>
                                    <div>
                                        <label for="arte" class="block text-sm font-medium text-gray-700">Arte</label>
                                        <input type="text" name="arte" id="arte" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                    </div>
                                </div>
                                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                    <button type="button" onclick="updateCadastro()" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:ml-3 sm:w-auto sm:text-sm">
                                        Atualizar
                                    </button>
                                    <button type="button" onclick="fecharModal()" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                                        Cancelar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            `;
            document.body.appendChild(modal);
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

            fecharModal();
        }

        function fecharModal() {
            const modal = document.querySelector('.fixed.z-10.inset-0');
            if (modal) {
                modal.remove();
            }
        }

        function showReportsModal() {
            Swal.fire({
                title: 'Relatórios',
                html: `
                    <div class="mb-4">
                        <label for="course" class="block mb-2">Curso</label>
                        <select id="course" class="swal2-select">
                            <option>Enfermagem</option>
                            <option>Informática</option>
                            <option>Administração</option>
                            <option>Edificações</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="type" class="block mb-2">Tipo</label>
                        <select id="type" class="swal2-select">
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
                focusConfirm: false,
                preConfirm: () => {
                    const course = document.getElementById('course').value;
                    const type = document.getElementById('type').value;
                    
                    if (!course || !type) {
                        Swal.showValidationMessage('Por favor, selecione um curso e um tipo de relatório.');
                    }
                    
                    return { course, type };
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(`Gerando relatório de ${result.value.course} - ${result.value.type}...`);
                }
            });
        }

        function showResultsModal() {
            Swal.fire({
                title: 'Resultados',
                html: `
                    <div class="mb-4">
                        <label for="course" class="block mb-2">Curso</label>
                        <select id="course" class="swal2-select">
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
                    
                    return { course, type };
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(`Exibindo resultados de ${result.value.course} - ${result.value.type}...`);
                }
            });
        }
    </script>
</body>
</html>
