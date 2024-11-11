
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
                return {
                    course,
                    type
                };
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

            return {
                studentId,
                notas
            };
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










const modalConfig = {
    allowOutsideClick: false,
    allowEscapeKey: false,
    customClass: {
        popup: 'rounded-2xl shadow-2xl bg-white border border-gray-200 custom-scrollbar',
        title: 'text-gray-800',
        input: 'bg-white border-gray-300 text-gray-800 rounded-lg',
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

        width: '80%',
        html: createModalContent(courseName, schoolType)
    });
}

function createModalContent(courseName, schoolType) {
    const subjects = [{
        id: 'lp',
        name: 'Português'
    },
    {
        id: 'ar',
        name: 'Arte'
    },
    {
        id: 'ef',
        name: 'Ed. Física'
    },
    {
        id: 'li',
        name: 'Inglês'
    },
    {
        id: 'ci',
        name: 'Ciências'
    },
    {
        id: 'ge',
        name: 'Geografia'
    },
    {
        id: 'hi',
        name: 'História'
    },
    {
        id: 're',
        name: 'Religião'
    },
    {
        id: 'ma',
        name: 'Matemática'
    }
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
  <form id="EnfermagemForm" action="../controllers/controller.php" method="POST" style="width:auto;">
    <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">Formulário de Enfermagem</h2>

    <!-- Informações Pessoais -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
        <div class="flex flex-col">
            <label class="block text-sm font-medium text-gray-700 mb-2">Nome Completo <span class="text-red-500">*</span></label>
            <input type="text" name="nome" class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400" placeholder="Nome Completo" required>
        </div>
        <div class="flex flex-col">
            <label class="block text-sm font-medium text-gray-700 mb-2">Data de Nascimento <span class="text-red-500">*</span></label>
            <input type="date" name="nasc" class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400" required>
        </div>
        <div class="flex flex-col">
            <label class="block text-sm font-medium text-gray-700 mb-2">Curso Selecionado</label>
            <input type="text" name="curso" value="Enfermagem" class="px-4 py-2 bg-gray-50 border border-gray-300 rounded-lg" disabled>
            <input type="hidden" name="curso" value="Enfermagem">
        </div>
        <div class="flex flex-col">
            <label class="block text-sm font-medium text-gray-700 mb-2">Tipo de Escola</label>
            <input type="text" name="${schoolType}" value="${schoolType}" class="px-4 py-2 bg-gray-50 border border-gray-300 rounded-lg" disabled>
            <input type="hidden" name="publica" value="${schoolType}">
        </div>
        <div class="flex flex-col">
            <label class="block text-sm font-medium text-gray-700 mb-2">Bairro <span class="text-red-500">*</span></label>
            <select name="bairro" class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400" required>
                <option value="">Selecione um bairro</option>
                <option value="Outra Banda">Outra Banda</option>
                <option value="Outros Bairros">Outros Bairros</option>
            </select>
        </div>
       
        <div class="flex flex-col">  
        <label class="block text-sm font-medium text-gray-700 mb-2">PCD</label>  
        <div class="flex items-center justify-center">  
<input type="checkbox" id="pcd" name="pcd" value="1" class="w-5 h-5 text-blue-600 border border-gray-300 rounded focus:ring-2 focus:ring-blue-400 mr-2" style = "margin-left: 10px ; margin-top:5px" />  

</div>  

    </div>
    </div>
    <!-- Notas -->
    <div class="mt-8">
        <div class="space-y-6">
            <!-- 6º Ano -->
               
<div class="bg-gray-50 p-4 rounded-lg">
    <h3 class="text-md font-medium text-gray-700 mb-4 pb-2 border-b">6º Ano</h3>
    <div class="grid grid-cols-10 gap-4">
        <!-- Coluna inicial vazia -->
        <div class="col-span-1"></div>
        
        <!-- Conteúdo centralizado (8 colunas) -->
        <div class="col-span-8 grid grid-cols-8 gap-4">
            <div>
                <label class="text-sm text-gray-600">Português</label>
                <input type="text" name="lp6" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" required oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Artes</label>
                <input type="text" name="a6" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" required oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Matemática</label>
                <input type="text" name="m6" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" required oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">História</label>
                <input type="text" name="h6" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" required oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Geografia</label>
                <input type="text" name="g6" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" required oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Ciências</label>
                <input type="text" name="c6" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" required oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Inglês</label>
                <input type="text" name="i6" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" required oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Ed. Física</label>
                <input type="text" name="ef6" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" required oninput="maskNota(this)">
            </div>
        </div>
        
        <!-- Coluna final vazia -->
        <div class="col-span-1"></div>
    </div>
</div>

<!-- 7º Ano -->
<div class="bg-gray-50 p-4 rounded-lg">
    <h3 class="text-md font-medium text-gray-700 mb-4 pb-2 border-b">7º Ano</h3>
    <div class="grid grid-cols-10 gap-4">
        <!-- Coluna inicial vazia -->
        <div class="col-span-1"></div>
        
        <!-- Conteúdo centralizado (8 colunas) -->
        <div class="col-span-8 grid grid-cols-8 gap-4">
            <div>
                <label class="text-sm text-gray-600">Português</label>
                <input type="text" name="lp7" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Artes</label>
                <input type="text" name="a7" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Matemática</label>
                <input type="text" name="m7" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">História</label>
                <input type="text" name="h7" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Geografia</label>
                <input type="text" name="g7" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Ciências</label>
                <input type="text" name="c7" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Inglês</label>
                <input type="text" name="i7" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Ed. Física</label>
                <input type="text" name="ef7" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
        </div>
        
        <!-- Coluna final vazia -->
        <div class="col-span-1"></div>
    </div>
</div>

<!-- 8º Ano -->
<div class="bg-gray-50 p-4 rounded-lg">
    <h3 class="text-md font-medium text-gray-700 mb-4 pb-2 border-b">8º Ano</h3>
    <div class="grid grid-cols-10 gap-4">
        <!-- Coluna inicial vazia -->
        <div class="col-span-1"></div>
        
        <!-- Conteúdo centralizado (8 colunas) -->
        <div class="col-span-8 grid grid-cols-8 gap-4">
            <div>
                <label class="text-sm text-gray-600">Português</label>
                <input type="text" name="lp8" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Artes</label>
                <input type="text" name="a8" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Matemática</label>
                <input type="text" name="m8" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">História</label>
                <input type="text" name="h8" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Geografia</label>
                <input type="text" name="g8" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Ciências</label>
                <input type="text" name="c8" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Inglês</label>
                <input type="text" name="i8" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Ed. Física</label>
                <input type="text" name="ef8" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
        </div>
        
        <!-- Coluna final vazia -->
        <div class="col-span-1"></div>
    </div>
</div>

            <!-- 9º Ano -->
         <div class="bg-gray-50 p-4 rounded-lg">
    <h3 class="text-md font-medium text-gray-700 mb-4 pb-2 border-b">9º Ano</h3>
    <div class="grid grid-cols-10 gap-4">
        <!-- Coluna inicial vazia para centralização -->
        <div class="col-span-1"></div>
        
        <!-- Conteúdo centralizado (8 colunas) -->
        <div class="col-span-8 grid grid-cols-8 gap-4">
            <div>
                <label class="text-sm text-gray-600">Português</label>
                <input type="text" name="lp9" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Artes</label>
                <input type="text" name="a9" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Matemática</label>
                <input type="text" name="m9" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">História</label>
                <input type="text" name="h9" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Geografia</label>
                <input type="text" name="g9" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Ciências</label>
                <input type="text" name="c9" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Inglês</label>
                <input type="text" name="i9" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Ed. Física</label>
                <input type="text" name="ef9" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
        </div>
        
        <!-- Coluna final vazia para centralização -->
        <div class="col-span-1"></div>
    </div>
    </div>
<!-- Botões -->
    <div class="flex justify-center space-x-3 mt-6 pt-4 border-t">
      <button type="button" onclick="closeModal()" class="px-6 py-2 border border-gray-300 rounded-lg text-gray-600 hover:bg-gray-50 transition-colors duration-200 flex items-center">
        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
        </svg>
        Cancelar
      </button>
      <button type="submit" class="px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition-colors duration-200 flex items-center">
        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
        </svg>
        Cadastrar
      </button>
    </div>
</form>`;
}

function createInformaticaForm(schoolType) {
    return `
<form id="InformaticaForm" action="../controllers/controller.php" method="POST" style="width:auto;">
    <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">Formulário de Informatica</h2>

    <!-- Informações Pessoais -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
        <div class="flex flex-col">
            <label class="block text-sm font-medium text-gray-700 mb-2">Nome Completo <span class="text-red-500">*</span></label>
            <input type="text" name="nome" class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400" placeholder="Nome Completo" required>
        </div>
        <div class="flex flex-col">
            <label class="block text-sm font-medium text-gray-700 mb-2">Data de Nascimento <span class="text-red-500">*</span></label>
            <input type="date" name="nasc" class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400" required>
        </div>
        <div class="flex flex-col">
            <label class="block text-sm font-medium text-gray-700 mb-2">Curso Selecionado</label>
            <input type="text" name="curso" value="Informatica" class="px-4 py-2 bg-gray-50 border border-gray-300 rounded-lg" disabled>
            <input type="hidden" name="curso" value="Informatica">
        </div>
        <div class="flex flex-col">
            <label class="block text-sm font-medium text-gray-700 mb-2">Tipo de Escola</label>
            <input type="text" name="${schoolType}" value="${schoolType}" class="px-4 py-2 bg-gray-50 border border-gray-300 rounded-lg" disabled>
            <input type="hidden" name="publica" value="${schoolType}">
        </div>
        <div class="flex flex-col">
            <label class="block text-sm font-medium text-gray-700 mb-2">Bairro <span class="text-red-500">*</span></label>
            <select name="bairro" class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400" required>
                <option value="">Selecione um bairro</option>
                <option value="Outra Banda">Outras Banda</option>
                <option value="Outros Bairros">Outros Bairros</option>
            </select>
        </div>
       
        <div class="flex flex-col">  
        <label class="block text-sm font-medium text-gray-700 mb-2">PCD</label>  
         <div class="flex items-center justify-center">  
<input type="checkbox" id="pcd" name="pcd" value="sim" class="w-5 h-5 text-blue-600 border border-gray-300 rounded focus:ring-2 focus:ring-blue-400 mr-2" style = "margin-left: 10px ; margin-top:5px" />  

</div>   
    </div>
    </div>
    <!-- Notas -->
    <div class="mt-8">
        <div class="space-y-6">
            <!-- 6º Ano -->
             
<div class="bg-gray-50 p-4 rounded-lg">
    <h3 class="text-md font-medium text-gray-700 mb-4 pb-2 border-b">6º Ano</h3>
    <div class="grid grid-cols-10 gap-4">
        <!-- Coluna inicial vazia -->
        <div class="col-span-1"></div>
        
        <!-- Conteúdo centralizado (8 colunas) -->
        <div class="col-span-8 grid grid-cols-8 gap-4">
            <div>
                <label class="text-sm text-gray-600">Português</label>
                <input type="text" name="lp6" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" required oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Artes</label>
                <input type="text" name="a6" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" required oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Matemática</label>
                <input type="text" name="m6" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" required oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">História</label>
                <input type="text" name="h6" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" required oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Geografia</label>
                <input type="text" name="g6" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" required oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Ciências</label>
                <input type="text" name="c6" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" required oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Inglês</label>
                <input type="text" name="i6" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" required oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Ed. Física</label>
                <input type="text" name="ef6" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" required oninput="maskNota(this)">
            </div>
        </div>
        
        <!-- Coluna final vazia -->
        <div class="col-span-1"></div>
    </div>
</div>

<!-- 7º Ano -->
<div class="bg-gray-50 p-4 rounded-lg">
    <h3 class="text-md font-medium text-gray-700 mb-4 pb-2 border-b">7º Ano</h3>
    <div class="grid grid-cols-10 gap-4">
        <!-- Coluna inicial vazia -->
        <div class="col-span-1"></div>
        
        <!-- Conteúdo centralizado (8 colunas) -->
        <div class="col-span-8 grid grid-cols-8 gap-4">
            <div>
                <label class="text-sm text-gray-600">Português</label>
                <input type="text" name="lp7" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Artes</label>
                <input type="text" name="a7" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Matemática</label>
                <input type="text" name="m7" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">História</label>
                <input type="text" name="h7" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Geografia</label>
                <input type="text" name="g7" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Ciências</label>
                <input type="text" name="c7" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Inglês</label>
                <input type="text" name="i7" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Ed. Física</label>
                <input type="text" name="ef7" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
        </div>
        
        <!-- Coluna final vazia -->
        <div class="col-span-1"></div>
    </div>
</div>

<!-- 8º Ano -->
<div class="bg-gray-50 p-4 rounded-lg">
    <h3 class="text-md font-medium text-gray-700 mb-4 pb-2 border-b">8º Ano</h3>
    <div class="grid grid-cols-10 gap-4">
        <!-- Coluna inicial vazia -->
        <div class="col-span-1"></div>
        
        <!-- Conteúdo centralizado (8 colunas) -->
        <div class="col-span-8 grid grid-cols-8 gap-4">
            <div>
                <label class="text-sm text-gray-600">Português</label>
                <input type="text" name="lp8" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Artes</label>
                <input type="text" name="a8" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Matemática</label>
                <input type="text" name="m8" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">História</label>
                <input type="text" name="h8" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Geografia</label>
                <input type="text" name="g8" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Ciências</label>
                <input type="text" name="c8" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Inglês</label>
                <input type="text" name="i8" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Ed. Física</label>
                <input type="text" name="ef8" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
        </div>
        
        <!-- Coluna final vazia -->
        <div class="col-span-1"></div>
    </div>
</div>

            <!-- 9º Ano -->
         <div class="bg-gray-50 p-4 rounded-lg">
    <h3 class="text-md font-medium text-gray-700 mb-4 pb-2 border-b">9º Ano</h3>
    <div class="grid grid-cols-10 gap-4">
        <!-- Coluna inicial vazia para centralização -->
        <div class="col-span-1"></div>
        
        <!-- Conteúdo centralizado (8 colunas) -->
        <div class="col-span-8 grid grid-cols-8 gap-4">
            <div>
                <label class="text-sm text-gray-600">Português</label>
                <input type="text" name="lp9" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Artes</label>
                <input type="text" name="a9" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Matemática</label>
                <input type="text" name="m9" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">História</label>
                <input type="text" name="h9" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Geografia</label>
                <input type="text" name="g9" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Ciências</label>
                <input type="text" name="c9" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Inglês</label>
                <input type="text" name="i9" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Ed. Física</label>
                <input type="text" name="ef9" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
        </div>
        
        <!-- Coluna final vazia para centralização -->
        <div class="col-span-1"></div>
    </div>
    </div>
<!-- Botões -->
    <div class="flex justify-center space-x-3 mt-6 pt-4 border-t">
      <button type="button" onclick="closeModal()" class="px-6 py-2 border border-gray-300 rounded-lg text-gray-600 hover:bg-gray-50 transition-colors duration-200 flex items-center">
        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
        </svg>
        Cancelar
      </button>
      <button type="submit" class="px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition-colors duration-200 flex items-center">
        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
        </svg>
        Cadastrar
      </button>
    </div>
</form>`;
}

// Função específica para o formulário de Administração
function createAdministracaoForm(schoolType) {
    return `
<form id="AdministracaoForm" action="../controllers/controller.php" method="POST" style="width:auto;">
    <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">Formulário de Administração</h2>
    
    <!-- Informações Pessoais -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
        <div class="flex flex-col">
            <label class="block text-sm font-medium text-gray-700 mb-2">Nome Completo <span class="text-red-500">*</span></label>
            <input type="text" name="nome" class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400" placeholder="Nome Completo" required>
        </div>
        <div class="flex flex-col">
            <label class="block text-sm font-medium text-gray-700 mb-2">Data de Nascimento <span class="text-red-500">*</span></label>
            <input type="date" name="nasc" class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400" required>
        </div>
        <div class="flex flex-col">
            <label class="block text-sm font-medium text-gray-700 mb-2">Curso Selecionado</label>
            <input type="text" name="curso" value="Administraçao" class="px-4 py-2 bg-gray-50 border border-gray-300 rounded-lg" disabled>
            <input type="hidden" name="curso" value="Administraçao">
        </div>
        <div class="flex flex-col">
            <label class="block text-sm font-medium text-gray-700 mb-2">Tipo de Escola</label>
            <input type="text" name="${schoolType}" value="${schoolType}" class="px-4 py-2 bg-gray-50 border border-gray-300 rounded-lg" disabled>
            <input type="hidden" name="publica" value="${schoolType}">
        </div>
        <div class="flex flex-col">
            <label class="block text-sm font-medium text-gray-700 mb-2">Bairro <span class="text-red-500">*</span></label>
            <select name="bairro" class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400" required>
                <option value="">Selecione um bairro</option>
                <option value="Outra Banda">Outras Banda</option>
                <option value="Outros Bairros">Outros Bairros</option>
            </select>
        </div>
       
        <div class="flex flex-col">  
        <label class="block text-sm font-medium text-gray-700 mb-2">PCD</label>  
        <div class="flex items-center justify-center">  
<input type="checkbox" id="pcd" name="pcd" value="sim" class="w-5 h-5 text-blue-600 border border-gray-300 rounded focus:ring-2 focus:ring-blue-400 mr-2" style = "margin-left: 10px ; margin-top:5px" />  

</div>  
    </div>
    </div>
    <!-- Notas -->
    <div class="mt-8">
        <div class="space-y-6">
            <!-- 6º Ano -->
             
<div class="bg-gray-50 p-4 rounded-lg">
    <h3 class="text-md font-medium text-gray-700 mb-4 pb-2 border-b">6º Ano</h3>
    <div class="grid grid-cols-10 gap-4">
        <!-- Coluna inicial vazia -->
        <div class="col-span-1"></div>
        
        <!-- Conteúdo centralizado (8 colunas) -->
        <div class="col-span-8 grid grid-cols-8 gap-4">
            <div>
                <label class="text-sm text-gray-600">Português</label>
                <input type="text" name="lp6" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" required oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Artes</label>
                <input type="text" name="a6" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" required oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Matemática</label>
                <input type="text" name="m6" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" required oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">História</label>
                <input type="text" name="h6" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" required oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Geografia</label>
                <input type="text" name="g6" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" required oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Ciências</label>
                <input type="text" name="c6" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" required oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Inglês</label>
                <input type="text" name="i6" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" required oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Ed. Física</label>
                <input type="text" name="ef6" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" required oninput="maskNota(this)">
            </div>
        </div>
        
        <!-- Coluna final vazia -->
        <div class="col-span-1"></div>
    </div>
</div>

<!-- 7º Ano -->
<div class="bg-gray-50 p-4 rounded-lg">
    <h3 class="text-md font-medium text-gray-700 mb-4 pb-2 border-b">7º Ano</h3>
    <div class="grid grid-cols-10 gap-4">
        <!-- Coluna inicial vazia -->
        <div class="col-span-1"></div>
        
        <!-- Conteúdo centralizado (8 colunas) -->
        <div class="col-span-8 grid grid-cols-8 gap-4">
            <div>
                <label class="text-sm text-gray-600">Português</label>
                <input type="text" name="lp7" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Artes</label>
                <input type="text" name="a7" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Matemática</label>
                <input type="text" name="m7" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">História</label>
                <input type="text" name="h7" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Geografia</label>
                <input type="text" name="g7" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Ciências</label>
                <input type="text" name="c7" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Inglês</label>
                <input type="text" name="i7" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Ed. Física</label>
                <input type="text" name="ef7" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
        </div>
        
        <!-- Coluna final vazia -->
        <div class="col-span-1"></div>
    </div>
</div>

<!-- 8º Ano -->
<div class="bg-gray-50 p-4 rounded-lg">
    <h3 class="text-md font-medium text-gray-700 mb-4 pb-2 border-b">8º Ano</h3>
    <div class="grid grid-cols-10 gap-4">
        <!-- Coluna inicial vazia -->
        <div class="col-span-1"></div>
        
        <!-- Conteúdo centralizado (8 colunas) -->
        <div class="col-span-8 grid grid-cols-8 gap-4">
            <div>
                <label class="text-sm text-gray-600">Português</label>
                <input type="text" name="lp8" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Artes</label>
                <input type="text" name="a8" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Matemática</label>
                <input type="text" name="m8" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">História</label>
                <input type="text" name="h8" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Geografia</label>
                <input type="text" name="g8" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Ciências</label>
                <input type="text" name="c8" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Inglês</label>
                <input type="text" name="i8" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Ed. Física</label>
                <input type="text" name="ef8" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
        </div>
        
        <!-- Coluna final vazia -->
        <div class="col-span-1"></div>
    </div>
</div>

            <!-- 9º Ano -->
         <div class="bg-gray-50 p-4 rounded-lg">
    <h3 class="text-md font-medium text-gray-700 mb-4 pb-2 border-b">9º Ano</h3>
    <div class="grid grid-cols-10 gap-4">
        <!-- Coluna inicial vazia para centralização -->
        <div class="col-span-1"></div>
        
        <!-- Conteúdo centralizado (8 colunas) -->
        <div class="col-span-8 grid grid-cols-8 gap-4">
            <div>
                <label class="text-sm text-gray-600">Português</label>
                <input type="text" name="lp9" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Artes</label>
                <input type="text" name="a9" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Matemática</label>
                <input type="text" name="m9" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">História</label>
                <input type="text" name="h9" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Geografia</label>
                <input type="text" name="g9" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Ciências</label>
                <input type="text" name="c9" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Inglês</label>
                <input type="text" name="i9" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Ed. Física</label>
                <input type="text" name="ef9" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
        </div>
        
        <!-- Coluna final vazia para centralização -->
        <div class="col-span-1"></div>
    </div>
    </div>
<!-- Botões -->
    <div class="flex justify-center space-x-3 mt-6 pt-4 border-t">
      <button type="button" onclick="closeModal()" class="px-6 py-2 border border-gray-300 rounded-lg text-gray-600 hover:bg-gray-50 transition-colors duration-200 flex items-center">
        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
        </svg>
        Cancelar
      </button>
      <button type="submit" class="px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition-colors duration-200 flex items-center">
        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
        </svg>
        Cadastrar
      </button>
    </div>
</form>`;
}

// Função específica para o formulário de Edificações
function createEdificacoesForm(schoolType) {
    return `
<form id="EdificaçoesForm" action="../controllers/controller.php" method="POST" style="width:auto;">
    <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">Formulário de Edificações</h2>

    <!-- Informações Pessoais -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
        <div class="flex flex-col">
            <label class="block text-sm font-medium text-gray-700 mb-2">Nome Completo <span class="text-red-500">*</span></label>
            <input type="text" name="nome" class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400" placeholder="Nome Completo" required>
        </div>
        <div class="flex flex-col">
            <label class="block text-sm font-medium text-gray-700 mb-2">Data de Nascimento <span class="text-red-500">*</span></label>
            <input type="date" name="nasc" class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400" required>
        </div>
        <div class="flex flex-col">
            <label class="block text-sm font-medium text-gray-700 mb-2">Curso Selecionado</label>
            <input type="text" name="curso" value="Edificaçoes" class="px-4 py-2 bg-gray-50 border border-gray-300 rounded-lg" disabled>
            <input type="hidden" name="curso" value="Edificaçoes">
        </div>
        <div class="flex flex-col">
            <label class="block text-sm font-medium text-gray-700 mb-2">Tipo de Escola</label>
            <input type="text" name="${schoolType}" value="${schoolType}" class="px-4 py-2 bg-gray-50 border border-gray-300 rounded-lg" disabled>
            <input type="hidden" name="publica" value="${schoolType}">
        </div>
        <div class="flex flex-col">
            <label class="block text-sm font-medium text-gray-700 mb-2">Bairro <span class="text-red-500">*</span></label>
            <select name="bairro" class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400" required>
                <option value="">Selecione um bairro</option>
                <option value="Outra Banda">Outras Banda</option>
                <option value="Outros Bairros">Outros Bairros</option>
            </select>
        </div>
       
        <div class="flex flex-col">  
        <label class="block text-sm font-medium text-gray-700 mb-2">PCD</label>  
       <div class="flex items-center justify-center">  
<input type="checkbox" id="pcd" name="pcd" value="sim" class="w-5 h-5 text-blue-600 border border-gray-300 rounded focus:ring-2 focus:ring-blue-400 mr-2" style = "margin-left: 10px ; margin-top:5px" />  

</div>   
    </div>
    </div>
    <!-- Notas -->
    <div class="mt-8">
        <div class="space-y-6">
            <!-- 6º Ano -->
         
<div class="bg-gray-50 p-4 rounded-lg">
    <h3 class="text-md font-medium text-gray-700 mb-4 pb-2 border-b">6º Ano</h3>
    <div class="grid grid-cols-10 gap-4">
        <!-- Coluna inicial vazia -->
        <div class="col-span-1"></div>
        
        <!-- Conteúdo centralizado (8 colunas) -->
        <div class="col-span-8 grid grid-cols-8 gap-4">
            <div>
                <label class="text-sm text-gray-600">Português</label>
                <input type="text" name="lp6" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" required oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Artes</label>
                <input type="text" name="a6" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" required oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Matemática</label>
                <input type="text" name="m6" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" required oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">História</label>
                <input type="text" name="h6" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" required oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Geografia</label>
                <input type="text" name="g6" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" required oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Ciências</label>
                <input type="text" name="c6" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" required oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Inglês</label>
                <input type="text" name="i6" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" required oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Ed. Física</label>
                <input type="text" name="ef6" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" required oninput="maskNota(this)">
            </div>
        </div>
        
        <!-- Coluna final vazia -->
        <div class="col-span-1"></div>
    </div>
</div>

<!-- 7º Ano -->
<div class="bg-gray-50 p-4 rounded-lg">
    <h3 class="text-md font-medium text-gray-700 mb-4 pb-2 border-b">7º Ano</h3>
    <div class="grid grid-cols-10 gap-4">
        <!-- Coluna inicial vazia -->
        <div class="col-span-1"></div>
        
        <!-- Conteúdo centralizado (8 colunas) -->
        <div class="col-span-8 grid grid-cols-8 gap-4">
            <div>
                <label class="text-sm text-gray-600">Português</label>
                <input type="text" name="lp7" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Artes</label>
                <input type="text" name="a7" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Matemática</label>
                <input type="text" name="m7" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">História</label>
                <input type="text" name="h7" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Geografia</label>
                <input type="text" name="g7" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Ciências</label>
                <input type="text" name="c7" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Inglês</label>
                <input type="text" name="i7" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Ed. Física</label>
                <input type="text" name="ef7" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
        </div>
        
        <!-- Coluna final vazia -->
        <div class="col-span-1"></div>
    </div>
</div>

<!-- 8º Ano -->
<div class="bg-gray-50 p-4 rounded-lg">
    <h3 class="text-md font-medium text-gray-700 mb-4 pb-2 border-b">8º Ano</h3>
    <div class="grid grid-cols-10 gap-4">
        <!-- Coluna inicial vazia -->
        <div class="col-span-1"></div>
        
        <!-- Conteúdo centralizado (8 colunas) -->
        <div class="col-span-8 grid grid-cols-8 gap-4">
            <div>
                <label class="text-sm text-gray-600">Português</label>
                <input type="text" name="lp8" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Artes</label>
                <input type="text" name="a8" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Matemática</label>
                <input type="text" name="m8" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">História</label>
                <input type="text" name="h8" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Geografia</label>
                <input type="text" name="g8" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Ciências</label>
                <input type="text" name="c8" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Inglês</label>
                <input type="text" name="i8" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Ed. Física</label>
                <input type="text" name="ef8" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
        </div>
        
        <!-- Coluna final vazia -->
        <div class="col-span-1"></div>
    </div>
</div>

            <!-- 9º Ano -->
         <div class="bg-gray-50 p-4 rounded-lg">
    <h3 class="text-md font-medium text-gray-700 mb-4 pb-2 border-b">9º Ano</h3>
    <div class="grid grid-cols-10 gap-4">
        <!-- Coluna inicial vazia para centralização -->
        <div class="col-span-1"></div>
        
        <!-- Conteúdo centralizado (8 colunas) -->
        <div class="col-span-8 grid grid-cols-8 gap-4">
            <div>
                <label class="text-sm text-gray-600">Português</label>
                <input type="text" name="lp9" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Artes</label>
                <input type="text" name="a9" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Matemática</label>
                <input type="text" name="m9" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">História</label>
                <input type="text" name="h9" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Geografia</label>
                <input type="text" name="g9" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Ciências</label>
                <input type="text" name="c9" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Inglês</label>
                <input type="text" name="i9" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
            <div>
                <label class="text-sm text-gray-600">Ed. Física</label>
                <input type="text" name="ef9" class="w-full mt-1 px-3 py-2 border border-gray-200 rounded-md text-center" oninput="maskNota(this)">
            </div>
        </div>
        
        <!-- Coluna final vazia para centralização -->
        <div class="col-span-1"></div>
    </div>
</div>
        </div>
    </div>
    <div class="flex justify-center space-x-3 mt-6 pt-4 border-t">
      <button type="button" onclick="closeModal()" class="px-6 py-2 border border-gray-300 rounded-lg text-gray-600 hover:bg-gray-50 transition-colors duration-200 flex items-center">
        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
        </svg>
        Cancelar
      </button>
      <button type="submit" class="px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition-colors duration-200 flex items-center">
        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
        </svg>
        Cadastrar
      </button>
    </div>
</form>`;
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



