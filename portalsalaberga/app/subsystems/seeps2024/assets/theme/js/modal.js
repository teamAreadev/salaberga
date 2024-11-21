function showReportsModal() {
    // Define os links para cada tipo de relatório
    const reportUrls = {
        'Pública Geral': '../views/relatorios/publicaGeral.php',
        'Privada Geral': '../views/relatorios/privadaGeral.php',
        'Pública AC': '../views/relatorios/publicaAC.php',
        'Privada AC': '../views/relatorios/privadaAC.php',
        'Pública Cotas': '../views/relatorios/publicaCotas.php',
        'Privada Cotas': '../views/relatorios/privadaCotas.php',


    };

    Swal.fire({
        title: 'Relatórios',
        html: `
        <div class="p-4">
            <div class="mb-4">
                <select id="type" class="form-select block w-full bg-ceara-white border border-gray-600 rounded-md shadow-sm focus:outline-none">
                    <option value="">Selecione um tipo</option>
                    <option value="Pública Geral">Pública Geral</option>
                    <option value="Privada Geral">Privada Geral</option>
                    <option value="Pública AC">Pública AC</option>
                    <option value="Privada AC">Privada AC</option>
                    <option value="Pública Cotas">Pública Cotas</option>
                    <option value="Privada Cotas">Privada Cotas</option>
                  
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
            const type = document.getElementById('type').value;
            if (!type) {
                Swal.showValidationMessage('Por favor, selecione um tipo de relatório.');
                return false;
            }
            return { type };
        }
    }).then((result) => {
        if (result.isConfirmed) {
            const selectedType = result.value.type;
            const url = reportUrls[selectedType];

            if (url) {

                Swal.fire({
                    title: 'Redirecionando...',
                    text: 'Gerando relatório',
                    timer: 1500,
                    timerProgressBar: true,
                    didOpen: () => {
                        Swal.showLoading();

                        setTimeout(() => {
                            window.location.href = url;
                        }, 1500);
                    }
                });
            }
        }
    });
}

/*
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

*//*
const styles = `
.swal2-popup {
background-color: var(--ceara-white) !important;
}

.swal2-actions {
gap: 1rem !important; /* Adiciona 1rem de espaço entre os botões 
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
margin: 0 0.5rem !important; /* Adiciona margem lateral 
}

.swal2-cancel {
background-color: var(--gray-600) !important;
margin: 0 0.5rem !important; /* Adiciona margem lateral 

.swal2-confirm:hover, .swal2-cancel:hover {
transform: scale(var(--hover-scale));
}

/* Ajuste para telas menores 
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
` ;

*/
function showResultsModal() {
    Swal.fire({
        title: 'Resultados',
        html: `
        <form action="../controllers/controller_classificaveis.php" id="searchForm" onsubmit="submitForm(); return false;" method="post">
            <div class="p-4">
                <div class="mb-4">
                    <select id="course" name="curso" class="form-select block w-full bg-ceara-white border border-gray-600 rounded-md shadow-sm focus:outline-none ">
                        <option value="">Selecione um curso</option>
                        <option value="1">Enfermagem</option>
                        <option value="2">Informática</option>
                        <option value="3">Administração</option>
                        <option value="4">Edificações</option>
                    </select>
                </div>
                <div class="mb-4">
                    <select id="type" name="tipo" class="form-select block w-full bg-ceara-white border border-gray-600 rounded-md shadow-sm focus:outline-none ">
                        <option value="">Selecione um tipo</option>
                        <option value="classificados">Classificados</option>
                        <option value="classificaveis">Classificáveis</option>
                    </select>
                </div>
                <div class="flex justify-center gap-4">
                    <button type="submit" class="bg-ceara-green hover:bg-ceara-green-dark text-ceara-white font-bold py-2 px-4 rounded transition-transform transform hover:scale-105">
                        Gerar Resultados
                    </button>
                  <button type="button" class="bg-gray-400 hover:bg-gray-400 text-white font-bold py-2 px-4 rounded transition-transform transform hover:scale-105" onclick="Swal.close()">
    Cancelar
</button>

                </div>
            </div>
        </form>
        `,
        showConfirmButton: false, // Esconde o botão "Ver Resultados"
        showCancelButton: false // Esconde o botão "Cancelar" padrão
    });
}

function submitForm() {
    const form = document.getElementById('searchForm');
    form.submit();
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
    background: 'transparent',
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

        width: '70%',
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
function maskNascimento(input) {
    // Remove non-numeric characters
    let value = input.value.replace(/\D/g, '');

    // Limit to 8 digits
    value = value.slice(0, 8);

    // Format the date
    let formattedValue = '';
    if (value.length >= 6) {
        // Insert slashes for DD/MM/YYYY
        formattedValue = `${value.slice(0, 2)}/${value.slice(2, 4)}/${value.slice(4)}`;
    } else if (value.length >= 4) {
        formattedValue = `${value.slice(0, 2)}/${value.slice(2)}`;
    } else if (value.length >= 2) {
        formattedValue = `${value.slice(0, 2)}/${value.slice(2)}`;
    } else {
        formattedValue = value;
    }

    // Se o valor for vazio, não aplica a máscara
    if (value.length === 0) {
        formattedValue = '';
    }

    input.value = formattedValue;

    // Optional: Basic date validation
    if (formattedValue.length === 10) {
        const [day, month, year] = formattedValue.split('/').map(Number);
        const date = new Date(year, month - 1, day);
        const today = new Date();

        // Check if date is valid and not in the future
        if (
            date.getFullYear() !== year ||
            date.getMonth() + 1 !== month ||
            date.getDate() !== day ||
            date > today
        ) {
            input.setCustomValidity('Data inválida');
        } else {
            input.setCustomValidity('');
        }
    } else {
        input.setCustomValidity('');
    }
}

function createEnfermagemForm(schoolType) {
    return `
    <form id="EnfermagemForm" action="../controllers/controller.php" method="POST" class="w-auto bg-[--ceara-white] rounded-xl shadow-md">
        <!-- Cabeçalho -->
        <div class="bg-[#DC2626] p-3 rounded-t-xl">
            <h2 class="text-3xl font-bold text-[--ceara-white] text-center mb-2">Formulário de Enfermagem</h2>
        </div>

        <!-- Informações Pessoais -->
        <div class="grid grid-cols-1 md:grid-cols-6 gap-4 p-4">
            <div class="flex flex-col md:col-span-6">
                <input type="text" name="nome" class="px-3 py-1.5 border border-[--gray-600] rounded-md focus:ring-1 focus:ring-[#DC2626] w-full text-center"  placeholder="Nome Completo" required>
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

function handleAvancar() {
    // Personal Information Fields
    const personalFields = [
        document.querySelector('input[name="nome"]'),
        document.querySelector('input[name="nasc"]'),
        document.querySelector('select[name="bairro"]')
    ];

    // Required Grade Fields
    const requiredFields = document.querySelectorAll(
        'input[name="lp6"], input[name="a6"], input[name="m6"], input[name="h6"], input[name="g6"], input[name="c6"], input[name="i6"], input[name="r6"],' +
        'input[name="lp7"], input[name="a7"], input[name="m7"], input[name="h7"], input[name="g7"], input[name="c7"], input[name="i7"], input[name="r7"],' +
        'input[name="lp8"], input[name="a8"], input[name="m8"], input[name="h8"], input[name="g8"], input[name="c8"], input[name="i8"], input[name="r8"]'
    );

    // Check personal information fields
    const personalInfoValid = personalFields.every(field => field.value.trim() !== '');

    // Check grade fields
    const gradeFieldsValid = Array.from(requiredFields).every(field => field.value.trim() !== '');

    if (personalInfoValid && gradeFieldsValid) {
        // Show the 9th-grade bimestre modal
        document.getElementById('bimestreModal').classList.remove('hidden');
    } else {
        // Provide specific feedback
        if (!personalInfoValid) {
            alert('Por favor, preencha todas as informações pessoais (Nome, Data de Nascimento, Bairro).');
        } else {
            alert('Por favor, preencha todas as notas dos anos 6º, 7º e 8º antes de avançar.');
        }
    }
}

// Function to handle closing the modal
function hideBimestreModal() {
    document.getElementById('bimestreModal').classList.add('hidden');
}

// Optional: Mask function for note inputs (from original code)
function maskNota(input) {
    // Remove non-numeric characters
    input.value = input.value.replace(/[^0-9.,]/g, '');

    // Replace comma with dot
    input.value = input.value.replace(',', '.');

    // Limit to 2 decimal places
    const parts = input.value.split('.');
    if (parts.length > 1) {
        input.value = parts[0] + '.' + parts[1].slice(0, 2);
    }

    // Ensure value is between 0 and 10
    const numValue = parseFloat(input.value);
    if (numValue > 10) {
        input.value = '10';
    } else if (numValue < 0) {
        input.value = '0';
    }
}
function showBimestreModal() {
    document.getElementById('bimestreModal').classList.remove('hidden');
}

function hideBimestreModal() {
    document.getElementById('bimestreModal').classList.add('hidden');
}

function showBimestreModal() {
    document.getElementById('bimestreModal').classList.remove('hidden');
}

function closeBimestreModal() {
    document.getElementById('bimestreModal').classList.add('hidden');
}

function showNonoAnoModal(bimestre) {
    document.getElementById('bimestreModal').classList.add('hidden');
    document.getElementById('nonoAnoModal').classList.remove('hidden');
}

function closeNonoAnoModal() {
    document.getElementById('nonoAnoModal').classList.add('hidden');
    document.getElementById('bimestreModal').classList.remove('hidden');
}


function submitForm() {
    document.getElementById('EnfermagemForm').submit();
}

function closeModalAndRedirect(formId, redirectUrl) {
    document.getElementById(formId).reset();
    document.getElementById('bimestreModal').classList.add('hidden');
    document.getElementById('nonoAnoModal').classList.add('hidden');
    window.location.href = redirectUrl;
}
function createInformaticaForm(schoolType) {
    return `
<form id="InformaticaForm" action="../controllers/controller.php" method="POST" class="w-auto bg-[--ceara-white] rounded-xl shadow-md">
    <!-- Cabeçalho -->
    <div class="bg-[#4a90e2] p-3 rounded-t-xl">
        <h2 class="text-3xl font-bold text-[--ceara-white] text-center mb-2">Formulário de Informatica</h2>
    </div>

    <!-- Informações Pessoais -->
    <div class="grid grid-cols-1 md:grid-cols-6 gap-4 p-4">
        <div class="flex flex-col md:col-span-6">
            <input type="text" name="nome" class="px-3 py-1.5 border border-[--gray-600] rounded-md focus:ring-1 focus:ring-[#0000ff] w-full text-center"  placeholder="Nome Completo" required>
        </div>
     <div class="flex flex-col md:col-span-1">
    <input type="text" name="nasc" maxlength="10" placeholder="DD/MM/AAAA" 
           class="px-6 py-1.5 border border-[--gray-600] rounded-md focus:ring-1 focus:ring-[#0000ff] w-full" 
           oninput="maskNascimento(this)" required>
</div>

        <div class="flex flex-col md:col-span-1">
            <input type="text" name="curso" value="Informática" class="px-3 py-1.5 bg-gray-50 border border-[--gray-600] rounded-md w-full" disabled>
            <input type="hidden" name="curso" value="Informática">
        </div>

        <div class="flex flex-col md:col-span-1">
            <input type="text" name="${schoolType}" value="${schoolType}" class="px-3 py-1.5 bg-gray-50 border border-[--gray-600] rounded-md w-full" disabled>
            <input type="hidden" name="publica" value="${schoolType}">
        </div>

        <div class="flex flex-col md:col-span-2">
            <select name="bairro" class="px-3 py-1.5 border border-[--gray-600] rounded-md focus:ring-1 focus:ring-[#0000ff] w-full" required>
                <option value="">Selecione um bairro</option>
                <option value="Outra Banda">Outra Banda</option>
                <option value="Outros Bairros">Outros Bairros</option>
            </select>
        </div>

        <div class="flex items-center md:col-span-1">
            <label for="pcd" class="text-sm text-[--gray-600] mr-2">PCD</label>
            <input type="checkbox" id="pcd" name="pcd" value="1" class="w-4 h-4 text-[#0000ff] border border-[--gray-600] rounded">
        </div>
    </div>

    <!-- Notas -->
  <div class="space-y-3 px-4">
    <!-- 6º Ano -->
    <div class="bg-white p-4 rounded-lg shadow-sm">
     
   

   <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-10 gap-2 md:gap-3">
              <div>
                <h3 class="text-lg md:text-xl font-semibold text-[#4a90e2] mb-2 pb-1 border-b">6º Ano</h3>
            </div>

            <!-- Português -->
            <input type="text" name="lp6" placeholder="PORTUGUÊS" class="w-full mt-1 px-2 py-1 border border-gray-600 rounded-md text-center text-sm focus:ring-1 focus:ring-[#0000ff]" required oninput="maskNota(this)">
            <!-- Artes -->
            <input type="text" name="a6" placeholder="ARTES" class="w-full mt-1 px-2 py-1 border border-gray-600 rounded-md text-center text-sm focus:ring-1 focus:ring-[#0000ff]" required oninput="maskNota(this)">
            <!-- Matemática -->
            <input type="text" name="m6" placeholder="MATEMÁTICA" class="w-full mt-1 px-2 py-1 border border-gray-600 rounded-md text-center text-sm focus:ring-1 focus:ring-[#0000ff]" required oninput="maskNota(this)">
            <!-- História -->
            <input type="text" name="h6" placeholder="HISTÓRIA" class="w-full mt-1 px-2 py-1 border border-gray-600 rounded-md text-center text-sm focus:ring-1 focus:ring-[#0000ff]" required oninput="maskNota(this)">
            <!-- Geografia -->
            <input type="text" name="g6" placeholder="GEOGRAFIA" class="w-full mt-1 px-2 py-1 border border-gray-600 rounded-md text-center text-sm focus:ring-1 focus:ring-[#0000ff]" required oninput="maskNota(this)">
            <!-- Ciências -->
            <input type="text" name="c6" placeholder="CIÊNCIAS" class="w-full mt-1 px-2 py-1 border border-gray-600 rounded-md text-center text-sm focus:ring-1 focus:ring-[#0000ff]" required oninput="maskNota(this)">
            <!-- Inglês -->
            <input type="text" name="i6" placeholder="INGLÊS" class="w-full mt-1 px-2 py-1 border border-gray-600 rounded-md text-center text-sm focus:ring-1 focus:ring-[#0000ff]" required oninput="maskNota(this)">
            <!-- Ed. Física -->
            <input type="text" name="ef6" placeholder="ED. FÍSICA" class="w-full mt-1 px-2 py-1 border border-gray-600 rounded-md text-center text-sm focus:ring-1 focus:ring-[#0000ff]" oninput="maskNota(this)">
            <!-- Religião -->
            <input type="text" name="r6" placeholder="RELIGIÃO" class="w-full mt-1 px-2 py-1 border border-gray-600 rounded-md text-center text-sm focus:ring-1 focus:ring-[#0000ff]" required oninput="maskNota(this)">
        </div>
    </div>

    <!-- 7º Ano -->
    <div class="bg-white p-4 rounded-lg shadow-sm">
       
        <!-- Grid responsivo -->
       <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-10 gap-2 md:gap-3">
              <div>
                <h3 class="text-lg md:text-xl font-semibold text-[#4a90e2] mb-2 pb-1 border-b">7º Ano</h3>
            </div>
            <!-- Português -->
            <input type="text" name="lp7" placeholder="PORTUGUÊS" class="w-full mt-1 px-2 py-1 border border-gray-600 rounded-md text-center text-sm focus:ring-1 focus:ring-[#0000ff]" required oninput="maskNota(this)">
            <!-- Artes -->
            <input type="text" name="a7" placeholder="ARTES" class="w-full mt-1 px-2 py-1 border border-gray-600 rounded-md text-center text-sm focus:ring-1 focus:ring-[#0000ff]" required oninput="maskNota(this)">
            <!-- Matemática -->
            <input type="text" name="m7" placeholder="MATEMÁTICA" class="w-full mt-1 px-2 py-1 border border-gray-600 rounded-md text-center text-sm focus:ring-1 focus:ring-[#0000ff]" required oninput="maskNota(this)">
            <!-- História -->
            <input type="text" name="h7" placeholder="HISTÓRIA" class="w-full mt-1 px-2 py-1 border border-gray-600 rounded-md text-center text-sm focus:ring-1 focus:ring-[#0000ff]" required oninput="maskNota(this)">
            <!-- Geografia -->
            <input type="text" name="g7" placeholder="GEOGRAFIA" class="w-full mt-1 px-2 py-1 border border-gray-600 rounded-md text-center text-sm focus:ring-1 focus:ring-[#0000ff]" required oninput="maskNota(this)">
            <!-- Ciências -->
            <input type="text" name="c7" placeholder="CIÊNCIAS" class="w-full mt-1 px-2 py-1 border border-gray-600 rounded-md text-center text-sm focus:ring-1 focus:ring-[#0000ff]" required oninput="maskNota(this)">
            <!-- Inglês -->
            <input type="text" name="i7" placeholder="INGLÊS" class="w-full mt-1 px-2 py-1 border border-gray-600 rounded-md text-center text-sm focus:ring-1 focus:ring-[#0000ff]" required oninput="maskNota(this)">
            <!-- Ed. Física -->
            <input type="text" name="ef7" placeholder="ED. FÍSICA" class="w-full mt-1 px-2 py-1 border border-gray-600 rounded-md text-center text-sm focus:ring-1 focus:ring-[#0000ff]" oninput="maskNota(this)">
            <!-- Religião -->
            <input type="text" name="r7" placeholder="RELIGIÃO" class="w-full mt-1 px-2 py-1 border border-gray-600 rounded-md text-center text-sm focus:ring-1 focus:ring-[#0000ff]" required oninput="maskNota(this)">
        </div>
    </div>
    <!-- 8º Ano -->
        <div class="bg-white p-4 rounded-lg shadow-sm">
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-10 gap-2 md:gap-3">
                <div>
                    <h3 class="text-lg md:text-xl font-semibold text-[#4a90e2] mb-2 pb-1 border-b">8º Ano</h3>
                </div>
                <div>
                    <input type="text" name="lp8" placeholder="PORTUGUÊS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a90e2] text-sm" required oninput="maskNota(this)">
                </div>
                <div>
                    <input type="text" name="a8" placeholder="ARTES" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a90e2] text-sm" required oninput="maskNota(this)">
                </div>
                <div>
                    <input type="text" name="m8" placeholder="MATEMÁTICA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a90e2] text-sm" required oninput="maskNota(this)">
                </div>
                <div>
                    <input type="text" name="h8" placeholder="HISTÓRIA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a90e2] text-sm" required oninput="maskNota(this)">
                </div>
                <div>
                    <input type="text" name="g8" placeholder="GEOGRAFIA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a90e2] text-sm" required oninput="maskNota(this)">
                </div>
                <div>
                    <input type="text" name="c8" placeholder="CIÊNCIAS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a90e2] text-sm" required oninput="maskNota(this)">
                </div>
                <div>
                    <input type="text" name="i8" placeholder="INGLÊS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a90e2] text-sm" required oninput="maskNota(this)">
                </div>
                <div>
                    <input type="text" name="ef8" placeholder="ED. FÍSICA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a90e2] text-sm" oninput="maskNota(this)">
                </div>
                <div>
                    <input type="text" name="r8" placeholder="RELIGIÃO" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a90e2] text-sm" required oninput="maskNota(this)">
                </div>
            </div>
        </div>
    </div>
<div class="flex justify-center space-x-4 mt-4 pt-3 border-t px-4 pb-4">
        <button type="button" onclick="closeModalAndRedirect('InformaticaForm', 'inicio.php');" 
            class="px-6 py-2.5 border-2 border-[#4a90e2] rounded-md text-[#4a90e2] hover:bg-[#4a90e2]/10 text-base flex items-center font-medium">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
            Cancelar
        </button>
      <button type="button" onclick="handleAvancar()" 
    class="px-6 py-2.5 bg-[#4a90e2] text-white rounded-md hover:bg-[#4a90e2]/90 text-base flex items-center font-medium">
    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
    </svg>
    Avançar
</button>
</div>

<!-- Modal para Nono Ano -->

       <div id="bimestreModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center">
        <div class="bg-white rounded-lg rounded-xl w-[70%]" style = "margin-top: -50px">
         <div class="bg-[#4a90e2] p-3 rounded-t-xl">
        <h2 class="text-3xl font-bold text-[--ceara-white] text-center mb-2">Notas 9º ano</h2>
    </div>
        <div class="bg-white p-4 rounded-lg shadow-sm">
            <!-- 1º Bimestre -->
            <div class="mb-6">
               
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-10 gap-2 md:gap-3">
                 <div>
                   <h3 class="text-lg md:text-xl font-semibold text-[#4a90e2] mb-4 pb-1 border-b">1º Bimestre</h3>
                    </div>
                    <div>
                        <input type="text" name="lp9_1" placeholder="PORTUGUÊS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a90e2] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="m9_1" placeholder="MATEMÁTICA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a90e2] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="h9_1" placeholder="HISTÓRIA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a90e2] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="g9_1" placeholder="GEOGRAFIA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a90e2] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="c9_1" placeholder="CIÊNCIAS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a90e2] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="i9_1" placeholder="INGLÊS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a90e2] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="a9_1" placeholder="ARTES" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a90e2] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="ef9_1" placeholder="ED. FÍSICA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a90e2] text-sm" oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="r9_1" placeholder="RELIGIÃO" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a90e2] text-sm" required oninput="maskNota(this)">
                    </div>
                </div>
            </div>

            <!-- 2º Bimestre -->
            <div class="mb-6">
              
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-10 gap-2 md:gap-3">
                 <div>
                      <h3 class="text-lg md:text-xl font-semibold text-[#4a90e2] mb-4 pb-1 border-b">2º Bimestre</h3>
                    </div>
                    <div>
                        <input type="text" name="lp9_2" placeholder="PORTUGUÊS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a90e2] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="m9_2" placeholder="MATEMÁTICA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a90e2] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="h9_2" placeholder="HISTÓRIA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a90e2] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="g9_2" placeholder="GEOGRAFIA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a90e2] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="c9_2" placeholder="CIÊNCIAS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a90e2] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="i9_2" placeholder="INGLÊS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a90e2] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="a9_2" placeholder="ARTES" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a90e2] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="ef9_2" placeholder="ED. FÍSICA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a90e2] text-sm" oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="r9_2" placeholder="RELIGIÃO" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a90e2] text-sm" required oninput="maskNota(this)">
                    </div>
                </div>
            </div>

            <!-- 3º Bimestre -->
            <div class="mb-6">
                
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-10 gap-2 md:gap-3">
                     <div>
                      <h3 class="text-lg md:text-xl font-semibold text-[#4a90e2] mb-4 pb-1 border-b">3º Bimestre</h3>
                    </div>
                    <div>
                        <input type="text" name="lp9_3" placeholder="PORTUGUÊS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a90e2] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="m9_3" placeholder="MATEMÁTICA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a90e2] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="h9_3" placeholder="HISTÓRIA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a90e2] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="g9_3" placeholder="GEOGRAFIA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a90e2] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="c9_3" placeholder="CIÊNCIAS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a90e2] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="i9_3" placeholder="INGLÊS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a90e2] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="a9_3" placeholder="ARTES" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a90e2] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="ef9_3" placeholder="ED. FÍSICA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a90e2] text-sm" oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="r9_3" placeholder="RELIGIÃO" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a90e2] text-sm" required oninput="maskNota(this)">
                    </div>
                </div>
            </div>
            <!-- 4º Bimestre -->
<div class="mb-6">
  
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-10 gap-2 md:gap-3">
        <div>
          <h3 class="text-lg md:text-xl font-semibold text-[#4a90e2] mb-4 pb-1 border-b">4º Bimestre</h3>
        </div>
        <div>
            <input type="text" name="lp9_4" placeholder="PORTUGUÊS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a90e2] text-sm" oninput="maskNota(this)">
        </div>
        <div>
            <input type="text" name="m9_4" placeholder="MATEMÁTICA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a90e2] text-sm" oninput="maskNota(this)">
        </div>
        <div>
            <input type="text" name="h9_4" placeholder="HISTÓRIA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a90e2] text-sm" oninput="maskNota(this)">
        </div>
        <div>
            <input type="text" name="g9_4" placeholder="GEOGRAFIA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a90e2] text-sm" oninput="maskNota(this)">
        </div>
        <div>
            <input type="text" name="c9_4" placeholder="CIÊNCIAS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a90e2] text-sm" oninput="maskNota(this)">
        </div>
        <div>
            <input type="text" name="i9_4" placeholder="INGLÊS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a90e2] text-sm" oninput="maskNota(this)">
        </div>
        <div>
            <input type="text" name="a9_4" placeholder="ARTES" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a90e2] text-sm" oninput="maskNota(this)">
        </div>
        <div>
            <input type="text" name="ef9_4" placeholder="ED. FÍSICA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a90e2] text-sm" oninput="maskNota(this)">
        </div>
        <div>
            <input type="text" name="r9_4" placeholder="RELIGIÃO" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a90e2] text-sm" oninput="maskNota(this)">
        </div>
    </div>
     <div class="flex justify-center space-x-4 mt-4 pt-3 border-t px-4 pb-4">
        <button type="button" onclick="hideBimestreModal()" 
            class="px-6 py-2.5 border-2 border-[#4a90e2] rounded-md text-[#4a90e2] hover:bg-[#4a90e2]/10 text-base flex items-center font-medium">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
            </svg>
            Voltar
        </button>
        <button type="submit" 
            class="px-6 py-2.5 bg-[#4a90e2] text-white rounded-md hover:bg-[#4a90e2]/90 text-base flex items-center font-medium">
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
// Função específica para o formulário de Administração
function createAdministracaoForm(schoolType) {
    return `
<form id="AdministracaoForm" action="../controllers/controller.php" method="POST" class="w-auto bg-[--ceara-white] rounded-xl shadow-md">
    <!-- Cabeçalho -->
    <div class="bg-[#008000] p-3 rounded-t-xl">
        <h2 class="text-3xl font-bold text-[--ceara-white] text-center mb-2">Formulário de Administração</h2>
    </div>

    <!-- Informações Pessoais -->
    <div class="grid grid-cols-1 md:grid-cols-6 gap-4 p-4">
        <div class="flex flex-col md:col-span-6">
            <input type="text" name="nome" class="px-3 py-1.5 border border-[--gray-600] rounded-md focus:ring-1 focus:ring-[#008000] w-full text-center"  placeholder="Nome Completo" required>
        </div>

         <div class="flex flex-col md:col-span-1">
    <input type="text" name="nasc" maxlength="10" placeholder="DD/MM/AAAA" 
           class="px-6 py-1.5 border border-[--gray-600] rounded-md focus:ring-1 focus:ring-[#008000] w-full" 
           oninput="maskNascimento(this)" required>
</div>

        <div class="flex flex-col md:col-span-1">
            <input type="text" name="curso" value="Administração" class="px-3 py-1.5 bg-gray-50 border border-[--gray-600] rounded-md w-full" disabled>
            <input type="hidden" name="curso" value="Administração">
        </div>

        <div class="flex flex-col md:col-span-1">
            <input type="text" name="${schoolType}" value="${schoolType}" class="px-3 py-1.5 bg-gray-50 border border-[--gray-600] rounded-md w-full" disabled>
            <input type="hidden" name="publica" value="${schoolType}">
        </div>

        <div class="flex flex-col md:col-span-2">
            <select name="bairro" class="px-3 py-1.5 border border-[--gray-600] rounded-md focus:ring-1 focus:ring-[#008000] w-full" required>
                <option value="">Selecione um bairro</option>
                <option value="Outra Banda">Outra Banda</option>
                <option value="Outros Bairros">Outros Bairros</option>
            </select>
        </div>

        <div class="flex items-center md:col-span-1">
            <label for="pcd" class="text-sm text-[--gray-600] mr-2">PCD</label>
            <input type="checkbox" id="pcd" name="pcd" value="1" class="w-4 h-4 text-[#008000] border border-[--gray-600] rounded">
        </div>
    </div>

     <!-- Notas -->
  <div class="space-y-3 px-4">
    <!-- 6º Ano -->
    <div class="bg-white p-4 rounded-lg shadow-sm">
   
        <!-- Grid responsivo -->
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-10 gap-2 md:gap-3">
              <div>
                <h3 class="text-lg md:text-xl font-semibold text-[#008000] mb-2 pb-1 border-b">6º Ano</h3>
            </div>
            <!-- Português -->
            <input type="text" name="lp6" placeholder="PORTUGUÊS" class="w-full mt-1 px-2 py-1 border border-gray-600 rounded-md text-center text-sm focus:ring-1 focus:ring-[#0000ff]" required oninput="maskNota(this)">
            <!-- Artes -->
            <input type="text" name="a6" placeholder="ARTES" class="w-full mt-1 px-2 py-1 border border-gray-600 rounded-md text-center text-sm focus:ring-1 focus:ring-[#0000ff]" required oninput="maskNota(this)">
            <!-- Matemática -->
            <input type="text" name="m6" placeholder="MATEMÁTICA" class="w-full mt-1 px-2 py-1 border border-gray-600 rounded-md text-center text-sm focus:ring-1 focus:ring-[#0000ff]" required oninput="maskNota(this)">
            <!-- História -->
            <input type="text" name="h6" placeholder="HISTÓRIA" class="w-full mt-1 px-2 py-1 border border-gray-600 rounded-md text-center text-sm focus:ring-1 focus:ring-[#0000ff]" required oninput="maskNota(this)">
            <!-- Geografia -->
            <input type="text" name="g6" placeholder="GEOGRAFIA" class="w-full mt-1 px-2 py-1 border border-gray-600 rounded-md text-center text-sm focus:ring-1 focus:ring-[#0000ff]" required oninput="maskNota(this)">
            <!-- Ciências -->
            <input type="text" name="c6" placeholder="CIÊNCIAS" class="w-full mt-1 px-2 py-1 border border-gray-600 rounded-md text-center text-sm focus:ring-1 focus:ring-[#0000ff]" required oninput="maskNota(this)">
            <!-- Inglês -->
            <input type="text" name="i6" placeholder="INGLÊS" class="w-full mt-1 px-2 py-1 border border-gray-600 rounded-md text-center text-sm focus:ring-1 focus:ring-[#0000ff]" required oninput="maskNota(this)">
            <!-- Ed. Física -->
            <input type="text" name="ef6" placeholder="ED. FÍSICA" class="w-full mt-1 px-2 py-1 border border-gray-600 rounded-md text-center text-sm focus:ring-1 focus:ring-[#0000ff]" oninput="maskNota(this)">
            <!-- Religião -->
            <input type="text" name="r6" placeholder="RELIGIÃO" class="w-full mt-1 px-2 py-1 border border-gray-600 rounded-md text-center text-sm focus:ring-1 focus:ring-[#0000ff]" required oninput="maskNota(this)">
        </div>
    </div>

    <!-- 7º Ano -->
    <div class="bg-white p-4 rounded-lg shadow-sm">
      
        <!-- Grid responsivo -->
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-10 gap-2 md:gap-3">
              <div>
                <h3 class="text-lg md:text-xl font-semibold text-[#008000] mb-2 pb-1 border-b">7º Ano</h3>
            </div>
            <!-- Português -->
            <input type="text" name="lp7" placeholder="PORTUGUÊS" class="w-full mt-1 px-2 py-1 border border-gray-600 rounded-md text-center text-sm focus:ring-1 focus:ring-[#0000ff]" required oninput="maskNota(this)">
            <!-- Artes -->
            <input type="text" name="a7" placeholder="ARTES" class="w-full mt-1 px-2 py-1 border border-gray-600 rounded-md text-center text-sm focus:ring-1 focus:ring-[#0000ff]" required oninput="maskNota(this)">
            <!-- Matemática -->
            <input type="text" name="m7" placeholder="MATEMÁTICA" class="w-full mt-1 px-2 py-1 border border-gray-600 rounded-md text-center text-sm focus:ring-1 focus:ring-[#0000ff]" required oninput="maskNota(this)">
            <!-- História -->
            <input type="text" name="h7" placeholder="HISTÓRIA" class="w-full mt-1 px-2 py-1 border border-gray-600 rounded-md text-center text-sm focus:ring-1 focus:ring-[#0000ff]" required oninput="maskNota(this)">
            <!-- Geografia -->
            <input type="text" name="g7" placeholder="GEOGRAFIA" class="w-full mt-1 px-2 py-1 border border-gray-600 rounded-md text-center text-sm focus:ring-1 focus:ring-[#0000ff]" required oninput="maskNota(this)">
            <!-- Ciências -->
            <input type="text" name="c7" placeholder="CIÊNCIAS" class="w-full mt-1 px-2 py-1 border border-gray-600 rounded-md text-center text-sm focus:ring-1 focus:ring-[#0000ff]" required oninput="maskNota(this)">
            <!-- Inglês -->
            <input type="text" name="i7" placeholder="INGLÊS" class="w-full mt-1 px-2 py-1 border border-gray-600 rounded-md text-center text-sm focus:ring-1 focus:ring-[#0000ff]" required oninput="maskNota(this)">
            <!-- Ed. Física -->
            <input type="text" name="ef7" placeholder="ED. FÍSICA" class="w-full mt-1 px-2 py-1 border border-gray-600 rounded-md text-center text-sm focus:ring-1 focus:ring-[#0000ff]" oninput="maskNota(this)">
            <!-- Religião -->
            <input type="text" name="r7" placeholder="RELIGIÃO" class="w-full mt-1 px-2 py-1 border border-gray-600 rounded-md text-center text-sm focus:ring-1 focus:ring-[#0000ff]" required oninput="maskNota(this)">
        </div>
    </div>

    <!-- 8º Ano -->
        <div class="bg-white p-4 rounded-lg shadow-sm">
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-10 gap-2 md:gap-3">
                <div>
                    <h3 class="text-lg md:text-xl font-semibold text-[#008000] mb-2 pb-1 border-b">8º Ano</h3>
                </div>
                <div>
                    <input type="text" name="lp8" placeholder="PORTUGUÊS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#008000] text-sm" required oninput="maskNota(this)">
                </div>
                <div>
                    <input type="text" name="a8" placeholder="ARTES" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#008000] text-sm" required oninput="maskNota(this)">
                </div>
                <div>
                    <input type="text" name="m8" placeholder="MATEMÁTICA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#008000] text-sm" required oninput="maskNota(this)">
                </div>
                <div>
                    <input type="text" name="h8" placeholder="HISTÓRIA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#008000] text-sm" required oninput="maskNota(this)">
                </div>
                <div>
                    <input type="text" name="g8" placeholder="GEOGRAFIA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#008000] text-sm" required oninput="maskNota(this)">
                </div>
                <div>
                    <input type="text" name="c8" placeholder="CIÊNCIAS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#008000] text-sm" required oninput="maskNota(this)">
                </div>
                <div>
                    <input type="text" name="i8" placeholder="INGLÊS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#008000] text-sm" required oninput="maskNota(this)">
                </div>
                <div>
                    <input type="text" name="ef8" placeholder="ED. FÍSICA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#008000] text-sm" oninput="maskNota(this)">
                </div>
                <div>
                    <input type="text" name="r8" placeholder="RELIGIÃO" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#008000] text-sm" required oninput="maskNota(this)">
                </div>
            </div>
        </div>
    </div>

 <div class="flex justify-center space-x-4 mt-4 pt-3 border-t px-4 pb-4">
        <button type="button" onclick="closeModalAndRedirect('AdministracaoForm', 'inicio.php');" 
            class="px-6 py-2.5 border-2 border-[#008000] rounded-md text-[#008000] hover:bg-[#008000]/10 text-base flex items-center font-medium">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
            Cancelar
        </button>
      <button type="button" onclick="handleAvancar()" 
    class="px-6 py-2.5 bg-[#008000] text-white rounded-md hover:bg-[#008000]/90 text-base flex items-center font-medium">
    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
    </svg>
    Avançar
</button>
</div>
                

<!-- Modal para Nono Ano -->

      <div id="bimestreModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center">
        <div class="bg-white rounded-lg rounded-xl w-[70%]" style = "margin-top: -50px">
         <div class="bg-[#008000] p-3 rounded-t-xl">
        <h2 class="text-3xl font-bold text-[--ceara-white] text-center mb-2">Notas 9º ano</h2>
    </div>
    
        <div class="bg-white p-4 rounded-lg shadow-sm">
        
            <!-- 1º Bimestre -->
            <div class="mb-6">
               
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-10 gap-2 md:gap-3">
                
                 <div>
                   <h3 class="text-lg md:text-xl font-semibold text-[#008000] mb-4 pb-1 border-b">1º Bimestre</h3>
                    </div>

                
                    <div>
                        <input type="text" name="lp9_1" placeholder="PORTUGUÊS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#008000] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="m9_1" placeholder="MATEMÁTICA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#008000] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="h9_1" placeholder="HISTÓRIA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#008000] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="g9_1" placeholder="GEOGRAFIA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#008000] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="c9_1" placeholder="CIÊNCIAS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#008000] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="i9_1" placeholder="INGLÊS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#008000] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="a9_1" placeholder="ARTES" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#008000] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="ef9_1" placeholder="ED. FÍSICA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#008000] text-sm" oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="r9_1" placeholder="RELIGIÃO" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#008000] text-sm" required oninput="maskNota(this)">
                    </div>
                </div>
            </div>

            <!-- 2º Bimestre -->
            <div class="mb-6">
              
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-10 gap-2 md:gap-3">
                 <div>
                      <h3 class="text-lg md:text-xl font-semibold text-[#008000] mb-4 pb-1 border-b">2º Bimestre</h3>
                    </div>
                    <div>
                        <input type="text" name="lp9_2" placeholder="PORTUGUÊS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#008000] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="m9_2" placeholder="MATEMÁTICA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#008000] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="h9_2" placeholder="HISTÓRIA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#008000] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="g9_2" placeholder="GEOGRAFIA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#008000] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="c9_2" placeholder="CIÊNCIAS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#008000] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="i9_2" placeholder="INGLÊS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#008000] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="a9_2" placeholder="ARTES" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#008000] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="ef9_2" placeholder="ED. FÍSICA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#008000] text-sm" oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="r9_2" placeholder="RELIGIÃO" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#008000] text-sm" required oninput="maskNota(this)">
                    </div>
                </div>
            </div>

            <!-- 3º Bimestre -->
            <div class="mb-6">
                
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-10 gap-2 md:gap-3">
                     <div>
                      <h3 class="text-lg md:text-xl font-semibold text-[#008000] mb-4 pb-1 border-b">3º Bimestre</h3>
                    </div>
                    <div>
                        <input type="text" name="lp9_3" placeholder="PORTUGUÊS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#008000] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="m9_3" placeholder="MATEMÁTICA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#008000] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="h9_3" placeholder="HISTÓRIA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#008000] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="g9_3" placeholder="GEOGRAFIA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#008000] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="c9_3" placeholder="CIÊNCIAS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#008000] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="i9_3" placeholder="INGLÊS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#008000] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="a9_3" placeholder="ARTES" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#008000] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="ef9_3" placeholder="ED. FÍSICA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#008000] oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="r9_3" placeholder="RELIGIÃO" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#008000] text-sm" required oninput="maskNota(this)">
                    </div>
                </div>
            </div>
            <!-- 4º Bimestre -->
<div class="mb-6">
  
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-10 gap-2 md:gap-3">
        <div>
          <h3 class="text-lg md:text-xl font-semibold text-[#008000] mb-4 pb-1 border-b">4º Bimestre</h3>
        </div>
        <div>
            <input type="text" name="lp9_4" placeholder="PORTUGUÊS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#008000] text-sm" oninput="maskNota(this)">
        </div>
        <div>
            <input type="text" name="m9_4" placeholder="MATEMÁTICA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#008000] text-sm" oninput="maskNota(this)">
        </div>
        <div>
            <input type="text" name="h9_4" placeholder="HISTÓRIA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#008000] text-sm" oninput="maskNota(this)">
        </div>
        <div>
            <input type="text" name="g9_4" placeholder="GEOGRAFIA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#008000] text-sm" oninput="maskNota(this)">
        </div>
        <div>
            <input type="text" name="c9_4" placeholder="CIÊNCIAS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#008000] text-sm" oninput="maskNota(this)">
        </div>
        <div>
            <input type="text" name="i9_4" placeholder="INGLÊS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#008000] text-sm" oninput="maskNota(this)">
        </div>
        <div>
            <input type="text" name="a9_4" placeholder="ARTES" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#008000] text-sm" oninput="maskNota(this)">
        </div>
        <div>
            <input type="text" name="ef9_4" placeholder="ED. FÍSICA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#008000] text-sm" oninput="maskNota(this)">
        </div>
        <div>
            <input type="text" name="r9_4" placeholder="RELIGIÃO" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#008000] text-sm" oninput="maskNota(this)">
        </div>
    </div>
     <div class="flex justify-center space-x-4 mt-4 pt-3 border-t px-4 pb-4">
        <button type="button" onclick="hideBimestreModal()" 
            class="px-6 py-2.5 border-2 border-[#008000] rounded-md text-[#008000] hover:bg-[#008000]/10 text-base flex items-center font-medium">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
            </svg>
            Voltar
        </button>
        <button type="submit" 
            class="px-6 py-2.5 bg-[#008000] text-white rounded-md hover:bg-[#008000]/90 text-base flex items-center font-medium">
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
<form>

`;
}

// Função específica para o formulário de Edificações
function createEdificacoesForm(schoolType) {
    return `
<form id="EdificacoesForm"  action="../controllers/controller.php" method="POST" class="w-auto bg-[--ceara-white] rounded-xl shadow-md">
    <!-- Cabeçalho -->
    <div class="bg-[#4a4a4a] p-3 rounded-t-xl">
        <h2 class="text-3xl font-bold text-[--ceara-white] text-center mb-2">Formulário de Edificações</h2>
    </div>

    <!-- Informações Pessoais -->
    <div class="grid grid-cols-1 md:grid-cols-6 gap-4 p-4">
        <div class="flex flex-col md:col-span-6">
            <input type="text" name="nome" class="px-3 py-1.5 border border-[--gray-600] rounded-md focus:ring-1 focus:ring-[#4a4a4a] w-full text-center"  placeholder="Nome Completo" required>
        </div>

    <div class="flex flex-col md:col-span-1">
    <input type="text" name="nasc" maxlength="10" placeholder="DD/MM/AAAA" 
           class="px-6 py-1.5 border border-[--gray-600] rounded-md focus:ring-1 focus:ring-[#4a4a4a] w-full" 
           oninput="maskNascimento(this)" required>
</div>

        <div class="flex flex-col md:col-span-1">
            <input type="text" name="curso" value="Edificações" class="px-3 py-1.5 bg-gray-50 border border-[--gray-600] rounded-md w-full" disabled>
            <input type="hidden" name="curso" value="Edificações">
        </div>

        <div class="flex flex-col md:col-span-1">
            <input type="text" name="${schoolType}" value="${schoolType}" class="px-3 py-1.5 bg-gray-50 border border-[--gray-600] rounded-md w-full" disabled>
            <input type="hidden" name="publica" value="${schoolType}">
        </div>

        <div class="flex flex-col md:col-span-2">
            <select name="bairro" class="px-3 py-1.5 border border-[--gray-600] rounded-md focus:ring-1 focus:ring-[#4a4a4a] w-full" required>
                <option value="">Selecione um bairro</option>
                <option value="Outra Banda">Outra Banda</option>
                <option value="Outros Bairros">Outros Bairros</option>
            </select>
        </div>

        <div class="flex items-center md:col-span-1">
            <label for="pcd" class="text-sm text-[--gray-600] mr-2">PCD</label>
            <input type="checkbox" id="pcd" name="pcd" value="1" class="w-4 h-4 text-[#4a4a4a] border border-[--gray-600] rounded">
        </div>
    </div>

    <!-- Notas -->
  <div class="space-y-3 px-4">
    <!-- 6º Ano -->
    <div class="bg-white p-4 rounded-lg shadow-sm">
    
        <!-- Grid responsivo -->
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-10 gap-2 md:gap-3">
              <div>
                <h3 class="text-lg md:text-xl font-semibold text-[#4a4a4a] mb-2 pb-1 border-b">9º Ano</h3>
            </div>
            <!-- Português -->
            <input type="text" name="lp6" placeholder="PORTUGUÊS" class="w-full mt-1 px-2 py-1 border border-gray-600 rounded-md text-center text-sm focus:ring-1 focus:ring-[#0000ff]" required oninput="maskNota(this)">
            <!-- Artes -->
            <input type="text" name="a6" placeholder="ARTES" class="w-full mt-1 px-2 py-1 border border-gray-600 rounded-md text-center text-sm focus:ring-1 focus:ring-[#0000ff]" required oninput="maskNota(this)">
            <!-- Matemática -->
            <input type="text" name="m6" placeholder="MATEMÁTICA" class="w-full mt-1 px-2 py-1 border border-gray-600 rounded-md text-center text-sm focus:ring-1 focus:ring-[#0000ff]" required oninput="maskNota(this)">
            <!-- História -->
            <input type="text" name="h6" placeholder="HISTÓRIA" class="w-full mt-1 px-2 py-1 border border-gray-600 rounded-md text-center text-sm focus:ring-1 focus:ring-[#0000ff]" required oninput="maskNota(this)">
            <!-- Geografia -->
            <input type="text" name="g6" placeholder="GEOGRAFIA" class="w-full mt-1 px-2 py-1 border border-gray-600 rounded-md text-center text-sm focus:ring-1 focus:ring-[#0000ff]" required oninput="maskNota(this)">
            <!-- Ciências -->
            <input type="text" name="c6" placeholder="CIÊNCIAS" class="w-full mt-1 px-2 py-1 border border-gray-600 rounded-md text-center text-sm focus:ring-1 focus:ring-[#0000ff]" required oninput="maskNota(this)">
            <!-- Inglês -->
            <input type="text" name="i6" placeholder="INGLÊS" class="w-full mt-1 px-2 py-1 border border-gray-600 rounded-md text-center text-sm focus:ring-1 focus:ring-[#0000ff]" required oninput="maskNota(this)">
            <!-- Ed. Física -->
            <input type="text" name="ef6" placeholder="ED. FÍSICA" class="w-full mt-1 px-2 py-1 border border-gray-600 rounded-md text-center text-sm focus:ring-1 focus:ring-[#0000ff]" oninput="maskNota(this)">
            <!-- Religião -->
            <input type="text" name="r6" placeholder="RELIGIÃO" class="w-full mt-1 px-2 py-1 border border-gray-600 rounded-md text-center text-sm focus:ring-1 focus:ring-[#0000ff]" required oninput="maskNota(this)">
        </div>
    </div>

    <!-- 7º Ano -->
    <div class="bg-white p-4 rounded-lg shadow-sm">
      
        <!-- Grid responsivo -->
   <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-10 gap-2 md:gap-3">
              <div>
                <h3 class="text-lg md:text-xl font-semibold text-[#4a4a4a] mb-2 pb-1 border-b">7º Ano</h3>
            </div>
            <!-- Português -->
            <input type="text" name="lp7" placeholder="PORTUGUÊS" class="w-full mt-1 px-2 py-1 border border-gray-600 rounded-md text-center text-sm focus:ring-1 focus:ring-[#0000ff]" required oninput="maskNota(this)">
            <!-- Artes -->
            <input type="text" name="a7" placeholder="ARTES" class="w-full mt-1 px-2 py-1 border border-gray-600 rounded-md text-center text-sm focus:ring-1 focus:ring-[#0000ff]" required oninput="maskNota(this)">
            <!-- Matemática -->
            <input type="text" name="m7" placeholder="MATEMÁTICA" class="w-full mt-1 px-2 py-1 border border-gray-600 rounded-md text-center text-sm focus:ring-1 focus:ring-[#0000ff]" required oninput="maskNota(this)">
            <!-- História -->
            <input type="text" name="h7" placeholder="HISTÓRIA" class="w-full mt-1 px-2 py-1 border border-gray-600 rounded-md text-center text-sm focus:ring-1 focus:ring-[#0000ff]" required oninput="maskNota(this)">
            <!-- Geografia -->
            <input type="text" name="g7" placeholder="GEOGRAFIA" class="w-full mt-1 px-2 py-1 border border-gray-600 rounded-md text-center text-sm focus:ring-1 focus:ring-[#0000ff]" required oninput="maskNota(this)">
            <!-- Ciências -->
            <input type="text" name="c7" placeholder="CIÊNCIAS" class="w-full mt-1 px-2 py-1 border border-gray-600 rounded-md text-center text-sm focus:ring-1 focus:ring-[#0000ff]" required oninput="maskNota(this)">
            <!-- Inglês -->
            <input type="text" name="i7" placeholder="INGLÊS" class="w-full mt-1 px-2 py-1 border border-gray-600 rounded-md text-center text-sm focus:ring-1 focus:ring-[#0000ff]" required oninput="maskNota(this)">
            <!-- Ed. Física -->
            <input type="text" name="ef7" placeholder="ED. FÍSICA" class="w-full mt-1 px-2 py-1 border border-gray-600 rounded-md text-center text-sm focus:ring-1 focus:ring-[#0000ff]" oninput="maskNota(this)">
            <!-- Religião -->
            <input type="text" name="r7" placeholder="RELIGIÃO" class="w-full mt-1 px-2 py-1 border border-gray-600 rounded-md text-center text-sm focus:ring-1 focus:ring-[#0000ff]" required oninput="maskNota(this)">
        </div>
    </div>

    <!-- 8º Ano -->
        <div class="bg-white p-4 rounded-lg shadow-sm">
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-10 gap-2 md:gap-3">
                <div>
                    <h3 class="text-lg md:text-xl font-semibold text-[#4a4a4a] mb-2 pb-1 border-b">8º Ano</h3>
                </div>
                <div>
                    <input type="text" name="lp8" placeholder="PORTUGUÊS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a4a4a] text-sm" required oninput="maskNota(this)">
                </div>
                <div>
                    <input type="text" name="a8" placeholder="ARTES" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a4a4a] text-sm" required oninput="maskNota(this)">
                </div>
                <div>
                    <input type="text" name="m8" placeholder="MATEMÁTICA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a4a4a] text-sm" required oninput="maskNota(this)">
                </div>
                <div>
                    <input type="text" name="h8" placeholder="HISTÓRIA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a4a4a] text-sm" required oninput="maskNota(this)">
                </div>
                <div>
                    <input type="text" name="g8" placeholder="GEOGRAFIA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a4a4a] text-sm" required oninput="maskNota(this)">
                </div>
                <div>
                    <input type="text" name="c8" placeholder="CIÊNCIAS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a4a4a] text-sm" required oninput="maskNota(this)">
                </div>
                <div>
                    <input type="text" name="i8" placeholder="INGLÊS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a4a4a] text-sm" required oninput="maskNota(this)">
                </div>
                <div>
                    <input type="text" name="ef8" placeholder="ED. FÍSICA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a4a4a] text-sm" oninput="maskNota(this)">
                </div>
                <div>
                    <input type="text" name="r8" placeholder="RELIGIÃO" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a4a4a] text-sm" required oninput="maskNota(this)">
                </div>
            </div>
        </div>
    </div>
<div class="flex justify-center space-x-4 mt-4 pt-3 border-t px-4 pb-4">
        <button type="button" onclick="closeModalAndRedirect('EdificacoesForm', 'inicio.php');" 
            class="px-6 py-2.5 border-2 border-[#4a4a4a] rounded-md text-[#4a4a4a] hover:bg-[#4a4a4a]/10 text-base flex items-center font-medium">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
            Cancelar
        </button>
      <button type="button" onclick="handleAvancar()" 
    class="px-6 py-2.5 bg-[#4a4a4a] text-white rounded-md hover:bg-[#4a4a4a]/90 text-base flex items-center font-medium">
    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
    </svg>
    Avançar
</button>
</div>

    </div>
<!-- Modal para Nono Ano -->
  <div id="bimestreModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center">
        <div class="bg-white rounded-lg rounded-xl w-[70%]" style = "margin-top: -50px">
         <div class="bg-[#4a4a4a] p-3 rounded-t-xl">
        <h2 class="text-3xl font-bold text-[--ceara-white] text-center mb-2">Notas 9º ano</h2>
    </div>
        <div class="bg-white p-4 rounded-lg shadow-sm">
            <!-- 1º Bimestre -->
            <div class="mb-6">
               
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-10 gap-2 md:gap-3">
                 <div>
                   <h3 class="text-lg md:text-xl font-semibold text-[#4a4a4a] mb-4 pb-1 border-b">1º Bimestre</h3>
                    </div>
                    <div>
                        <input type="text" name="lp9_1" placeholder="PORTUGUÊS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a4a4a] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="m9_1" placeholder="MATEMÁTICA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a4a4a] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="h9_1" placeholder="HISTÓRIA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a4a4a] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="g9_1" placeholder="GEOGRAFIA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a4a4a] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="c9_1" placeholder="CIÊNCIAS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a4a4a] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="i9_1" placeholder="INGLÊS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a4a4a] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="a9_1" placeholder="ARTES" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a4a4a] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="ef9_1" placeholder="ED. FÍSICA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a4a4a] text-sm" oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="r9_1" placeholder="RELIGIÃO" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a4a4a] text-sm" required oninput="maskNota(this)">
                    </div>
                </div>
            </div>

            <!-- 2º Bimestre -->
            <div class="mb-6">
              
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-10 gap-2 md:gap-3">
                 <div>
                      <h3 class="text-lg md:text-xl font-semibold text-[#4a4a4a] mb-4 pb-1 border-b">2º Bimestre</h3>
                    </div>
                    <div>
                        <input type="text" name="lp9_2" placeholder="PORTUGUÊS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a4a4a] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="m9_2" placeholder="MATEMÁTICA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a4a4a] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="h9_2" placeholder="HISTÓRIA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a4a4a] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="g9_2" placeholder="GEOGRAFIA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a4a4a] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="c9_2" placeholder="CIÊNCIAS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a4a4a] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="i9_2" placeholder="INGLÊS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a4a4a] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="a9_2" placeholder="ARTES" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a4a4a] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="ef9_2" placeholder="ED. FÍSICA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a4a4a] text-sm" oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="r9_2" placeholder="RELIGIÃO" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a4a4a] text-sm" required oninput="maskNota(this)">
                    </div>
                </div>
            </div>

            <!-- 3º Bimestre -->
            <div class="mb-6">
                
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-10 gap-2 md:gap-3">
                     <div>
                      <h3 class="text-lg md:text-xl font-semibold text-[#4a4a4a] mb-4 pb-1 border-b">3º Bimestre</h3>
                    </div>
                    <div>
                        <input type="text" name="lp9_3" placeholder="PORTUGUÊS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a4a4a] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="m9_3" placeholder="MATEMÁTICA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a4a4a] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="h9_3" placeholder="HISTÓRIA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a4a4a] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="g9_3" placeholder="GEOGRAFIA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a4a4a] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="c9_3" placeholder="CIÊNCIAS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a4a4a] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="i9_3" placeholder="INGLÊS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a4a4a] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="a9_3" placeholder="ARTES" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a4a4a] text-sm" required oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="ef9_3" placeholder="ED. FÍSICA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a4a4a] oninput="maskNota(this)">
                    </div>
                    <div>
                        <input type="text" name="r9_3" placeholder="RELIGIÃO" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a4a4a] text-sm" required oninput="maskNota(this)">
                    </div>
                </div>
            </div>
            <!-- 4º Bimestre -->
<div class="mb-6">
  
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-10 gap-2 md:gap-3">
        <div>
          <h3 class="text-lg md:text-xl font-semibold text-[#4a4a4a] mb-4 pb-1 border-b">4º Bimestre</h3>
        </div>
        <div>
            <input type="text" name="lp9_4" placeholder="PORTUGUÊS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a4a4a] text-sm" oninput="maskNota(this)">
        </div>
        <div>
            <input type="text" name="m9_4" placeholder="MATEMÁTICA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a4a4a] text-sm" oninput="maskNota(this)">
        </div>
        <div>
            <input type="text" name="h9_4" placeholder="HISTÓRIA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a4a4a] text-sm" oninput="maskNota(this)">
        </div>
        <div>
            <input type="text" name="g9_4" placeholder="GEOGRAFIA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a4a4a] text-sm" oninput="maskNota(this)">
        </div>
        <div>
            <input type="text" name="c9_4" placeholder="CIÊNCIAS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a4a4a] text-sm" oninput="maskNota(this)">
        </div>
        <div>
            <input type="text" name="i9_4" placeholder="INGLÊS" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a4a4a] text-sm" oninput="maskNota(this)">
        </div>
        <div>
            <input type="text" name="a9_4" placeholder="ARTES" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a4a4a] text-sm" oninput="maskNota(this)">
        </div>
        <div>
            <input type="text" name="ef9_4" placeholder="ED. FÍSICA" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a4a4a] text-sm" oninput="maskNota(this)">
        </div>
        <div>
            <input type="text" name="r9_4" placeholder="RELIGIÃO" class="w-full mt-1 px-2 py-1.5 border border-[--gray-600] rounded-md text-center focus:ring-1 focus:ring-[#4a4a4a] text-sm" oninput="maskNota(this)">
        </div>
    </div>
    <div class="flex justify-center space-x-4 mt-4 pt-3 border-t px-4 pb-4">
        <button type="button" onclick="hideBimestreModal()" 
            class="px-6 py-2.5 border-2 border-[#4a4a4a] rounded-md text-[#4a4a4a] hover:bg-[#4a4a4a]/10 text-base flex items-center font-medium">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
            </svg>
            Voltar
        </button>
        <button type="submit" 
            class="px-6 py-2.5 bg-[#4a4a4a] text-white rounded-md hover:bg-[#4a4a4a]/90 text-base flex items-center font-medium">
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

<form>
`;
}


function closeModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
        modal.style.display = 'none'; // Esconde o modal
    }
}

// Função para fechar o modal e redirecionar
function closeModalAndRedirect(modalId, redirectUrl) {
    closeModal(modalId);
    window.location.href = redirectUrl; // Redireciona para a página inicial
}
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



