
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualização de Notas</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .loading {
            opacity: 0.7;
            pointer-events: none;
        }

        .success {
            border-color: #4CAF50 !important;
        }

        .error {
            border-color: #DC2626 !important;
        }

        .invalid {
            background-color: #ffebee !important;
        }

        .tooltip {
            position: relative;
            display: inline-block;
        }

        .tooltip .tooltiptext {
            visibility: hidden;
            background-color: black;
            color: white;
            text-align: center;
            padding: 5px;
            border-radius: 6px;
            position: absolute;
            z-index: 1;
            bottom: 125%;
            left: 50%;
            transform: translateX(-50%);
            font-size: 0.875rem;
        }

        .tooltip:hover .tooltiptext {
            visibility: visible;
        }

        .toast {
            position: fixed;
            bottom: 1rem;
            right: 1rem;
            padding: 1rem;
            border-radius: 0.5rem;
            color: white;
            z-index: 50;
            animation: fadeIn 0.3s ease-in;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @media (max-width: 768px) {
            .container {
                padding: 1rem;
            }
            
            .grid-cols-1 {
                gap: 1rem;
            }
        }
    </style>
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
        };

        <?php if(isset($_GET['nome'])){?>

            <?php 
            $fecth = $_GET['nome']
            foreach($fetch as $candi)

        const studentsData = [
    {
        name: "<?php echo $fetch?>",
        nasc: "01/01/2005",
        curso: "Enfermagem",
        publica: "Pública",
        bairro: "Outra Banda",
        grades: {
            "6-PORTUGUÊS": 8.5,
            "6-MATEMÁTICA": 9.0,
            "6-HISTÓRIA": 7.0,
            "6-GEOGRAFIA": 8.0,
            "6-CIÊNCIAS": 9.0,
            "6-INGLÊS": 7.5,
            "6-ARTES": 8.5,
            "6-ED. FÍSICA": 9.0,
            "6-RELIGIÃO": 8.0,
            "7-PORTUGUÊS": 7.5,
            "7-MATEMÁTICA": 8.0,
            "7-HISTÓRIA": 7.5,
            "7-GEOGRAFIA": 8.5,
            "7-CIÊNCIAS": 9.0,
            "7-INGLÊS": 8.0,
            "7-ARTES": 8.5,
            "7-ED. FÍSICA": 9.5,
            "7-RELIGIÃO": 8.0,
            "8-PORTUGUÊS": 7.5,
            "8-MATEMÁTICA": 8.0,
            "8-HISTÓRIA": 7.5,
            "8-GEOGRAFIA": 8.5,
            "8-CIÊNCIAS": 9.0,
            "8-INGLÊS": 8.0,
            "8-ARTES": 8.5,
            "8-ED. FÍSICA": 9.5,
            "8-RELIGIÃO": 8.0
        }
    },
    {
        name: "Maria Oliveira",
        nasc: "02/02/2006",
        curso: "Educação Física",
        publica: "Privada",
        bairro: "Outros Bairros",
        grades: {
            "6-PORTUGUÊS": 9.5,
            "6-MATEMÁTICA": 10.0,
            "6-HISTÓRIA": 8.5,
            "6-GEOGRAFIA": 9.0,
            "6-CIÊNCIAS": 9.5,
            "6-INGLÊS": 8.5,
            "6-ARTES": 9.0,
            "6-ED. FÍSICA": 10.0,
            "6-RELIGIÃO": 9.0,
            "7-PORTUGUÊS": 8.0,
            "7-MATEMÁTICA": 9.0,
            "7-HISTÓRIA": 8.0,
            "7-GEOGRAFIA": 9.0,
            "7-CIÊNCIAS": 9.5,
            "7-INGLÊS": 8.5,
            "7-ARTES": 9.0,
            "7-ED. FÍSICA": 10.0,
            "7-RELIGIÃO": 9.0
        }
    }
];
        <?php }?>

const subjectsByYear = {
    '6': ['PORTUGUÊS', 'MATEMÁTICA', 'HISTÓRIA', 'GEOGRAFIA', 'CIÊNCIAS', 'INGLÊS', 'ARTES', 'ED. FÍSICA', 'RELIGIÃO'],
    '7': ['PORTUGUÊS', 'MATEMÁTICA', 'HISTÓRIA', 'GEOGRAFIA', 'CIÊNCIAS', 'INGLÊS', 'ARTES', 'ED. FÍSICA', 'RELIGIÃO'],
    '8': ['PORTUGUÊS', 'MATEMÁTICA', 'HISTÓRIA', 'GEOGRAFIA', 'CIÊNCIAS', 'INGLÊS', 'ARTES', 'ED. FÍSICA', 'RELIGIÃO'],
    '9': ['PORTUGUÊS', 'MATEMÁTICA', 'HISTÓRIA', 'GEOGRAFIA', 'CIÊNCIAS', 'INGLÊS', 'ARTES', 'ED. FÍSICA', 'RELIGIÃO']
};
        function showToast(message, type = 'success') {
            const toast = document.createElement('div');
            toast.className = `toast ${type === 'success' ? 'bg-green-500' : 'bg-red-500'}`;
            toast.textContent = message;
            document.body.appendChild(toast);
            
            setTimeout(() => {
                toast.remove();
            }, 3000);
        }

        function generateGradeSections(student) {
    const container = document.getElementById('gradesContainer');
    container.innerHTML = '';

    for (const [year, subjects] of Object.entries(subjectsByYear)) {
        const yearSection = document.createElement('div');
        yearSection.classList.add('mb-8', 'p-4', 'bg-gray-50', 'border', 'border-gray-200', 'rounded-lg', 'shadow-sm');

        yearSection.innerHTML = `
            <h2 class="text-xl font-bold text-gray-700 mb-4">${year}º Ano</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                ${subjects.map(subject => {
                    const gradeKey = `${year}-${subject}`;
                    const gradeValue = student ? student.grades[gradeKey] || '' : '';
                    
                    return `
                        <div class="relative mb-4 tooltip">
                            <label for="${gradeKey}" class="block text-gray-700 text-sm font-bold mb-2">
                                ${subject}
                                <span class="tooltiptext">Nota de 0 a 10</span>
                            </label>
                            <input type="text" 
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg text-center 
                                focus:ring-2 focus:ring-ceara-green focus:border-ceara-green"
                                placeholder="0.0"
                                id="${gradeKey}"
                                name="${gradeKey}"
                                aria-label="Nota de ${subject} do ${year}º ano"
                                oninput="maskNota(this)"
                                value="${gradeValue}"
                                ${student ? '' : 'disabled'}>
                        </div>
                    `;
                }).join('')}
            </div>
        `;

        container.appendChild(yearSection);
    }
}

        function maskNota(input) {
            let value = input.value.replace(/[^0-9.]/g, '');
            
            if (value !== '') {
                const numericValue = parseFloat(value);
                if (!isNaN(numericValue)) {
                    if (numericValue > 10) {
                        input.classList.add('invalid');
                        value = '10.0';
                    } else {
                        input.classList.remove('invalid');
                        value = numericValue.toFixed(1);
                    }
                }
            }
            
            input.value = value;
        }

        function toggleEdit() {
            const inputs = document.querySelectorAll('#gradesContainer input');
            const editButton = document.querySelector('#editButton');
            const saveButton = document.getElementById('saveButton');
            
            inputs.forEach(input => {
                input.disabled = !input.disabled;
            });

            editButton.textContent = editButton.textContent === 'Editar Notas' ? 'Cancelar Edição' : 'Editar Notas';
            saveButton.style.display = saveButton.style.display === 'none' ? 'block' : 'none';
        }

        function saveNotes() {
            if (confirm('Deseja salvar as alterações?')) {
                const saveButton = document.getElementById('saveButton');
                saveButton.disabled = true;
                saveButton.innerHTML = '<span class="loading">Salvando...</span>';
                
                setTimeout(() => {
                    saveButton.disabled = false;
                    saveButton.innerHTML = 'Salvar Notas';
                    showToast('Notas salvas com sucesso!');
                    toggleEdit();
                }, 1000);
            }
        }

        function fetchStudentData() {
            const nameInput = document.querySelector('input[name="nome"]');
            const name = nameInput.value.trim();
            
            if (!name) {
                showToast('Por favor, digite o nome do aluno.', 'error');
                return;
            }

            nameInput.classList.add('loading');
            
            setTimeout(() => {
                const student = studentsData.find(s => s.name.toLowerCase() === name.toLowerCase());
                
                nameInput.classList.remove('loading');
                
                if (student) {
                    nameInput.classList.add('success');
                    document.querySelector('input[name="nasc"]').value = student.nasc;
                    document.querySelector('input[name="curso"]').value = student.curso;
                    document.querySelector('input[name="publica"]').value = student.publica;
                    document.querySelector('select[name="bairro"]').value = student.bairro;
                    generateGradeSections(student);
                    showToast('Aluno encontrado com sucesso!');
                } else {
                    nameInput.classList.add('error');
                    generateGradeSections(null);
                    showToast('Aluno não encontrado. Verifique o nome e tente novamente.', 'error');
                }
            }, 500);
        }

        document.addEventListener('DOMContentLoaded', () => {
            const searchButton = document.createElement('button');
            searchButton.innerText = 'Buscar';
            searchButton.className = 'px-6 py-2 bg-ceara-green text-white rounded-lg hover:bg-ceara-green-dark transition-colors';
            searchButton.type = 'button';
            searchButton.onclick = fetchStudentData;

            document.querySelector('.flex.flex-col.md\\:col-span-6').appendChild(searchButton);
            generateGradeSections(null);
        });
    </script>
</head>
<body class="bg-gray-100 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <header class="bg-ceara-green rounded-lg shadow-lg p-6 mb-8">
            <h1 class="text-ceara-white text-3xl font-bold text-center">Sistema de Atualização de Notas</h1>
        </header>

        <form id="gradesForm" action="../controllers/atualizar.php" method="POST" class="space-y-8">
            <div class="bg-white rounded-lg shadow-lg p-6">
                <div class="grid grid-cols-1 md:grid-cols-6 gap-4 p-4 mb-8">
                    <div class="flex flex-col md:col-span-6">
                        <label for="nome" class="sr-only">Nome Completo</label>
                        <input type="text" 
                               id="nome"
                               name="nome" 
                               class="px-3 py-1.5 border border-gray-600 rounded-md focus:ring-1 focus:ring-ceara-green w-full text-center" 
                               placeholder="Nome Completo" 
                               required
                               aria-label="Nome Completo do Aluno">
                    </div>

                    <div class="flex flex-col md:col-span-1">
                        <label for="nasc" class="text-sm text-gray-600">Data de Nascimento</label>
                        <input type="text" 
                               id="nasc"
                               name="nasc" 
                               maxlength="10" 
                               placeholder="DD/MM/AAAA" 
                               class="px-6 py-1.5 border border-gray-600 rounded-md bg-gray-50 w-full" 
                               disabled>
                    </div>
                        
                    <div class="flex flex-col md:col-span-1">
                        <label for="curso" class="text-sm text-gray-600">Curso</label>
                        <input type="text" 
                               id="curso"
                               name="curso" 
                               class="px-3 py-1.5 bg-gray-50 border border-gray-600 rounded-md w-full" 
                               disabled>
                    </div>

                    <div class="flex flex-col md:col-span-1">
                        <label for="publica" class="text-sm text-gray-600">Tipo de Escola</label>
                        <input type="text" 
                               id="publica"
                               name="publica" 
                               class="px-3 py-1.5 bg-gray-50 border border-gray-600 rounded-md w-full" 
                               disabled>
                    </div>

                    <div class="flex flex-col md:col-span-2">
                        <label for="bairro" class="text-sm text-gray-600">Bairro</label>
                        <select id="bairro"
                                name="bairro" 
                                class="px-3 py-1.5 border border-gray-600 rounded-md bg-gray-50 w-full" 
                                disabled>
                            <option value="">Selecione um bairro</option>
                            <option value="Outra Banda">Outra Banda</option>
                            <option value="Outros Bairros">Outros Bairros</option>
                        </select>
                    </div>
                </div>

                <div id="gradesContainer"></div>

                <div class="flex justify-end space-x-4 mt-8">
                    <button type="button" 
                            id="editButton"
                            class="px-6 py-2 bg-ceara-green text-white rounded-lg hover:bg-green-700 transition-colors" 
                            onclick="toggleEdit()">
                        Editar Notas
                    </button>
                    <button id="saveButton" 
                            type="button" 
                            class="px-6 py-2 bg-primary text-white rounded-lg hover:bg-secondary transition-colors" 
                            onclick="saveNotes()" 
                            style="display: none;">
                        Salvar Notas
                    </button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>