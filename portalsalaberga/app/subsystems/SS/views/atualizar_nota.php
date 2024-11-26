<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualização de Notas</title>
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
        };

        let isEditing = false;

        function showSubjects() {
            const grade = document.getElementById('grade').value;
            const subjectsContainer = document.getElementById('subjectsContainer');
            const bimestreSection = document.getElementById('bimestreSection');

            subjectsContainer.innerHTML = '';

            let subjects = [];
            if (grade === '6' || grade === '7' || grade === '8' || grade === '9') {
                subjects = ['PORTUGUÊS', 'MATEMÁTICA', 'HISTÓRIA', 'GEOGRAFIA', 'CIÊNCIAS', 'INGLÊS', 'ARTES', 'ED. FÍSICA', 'RELIGIÃO'];
            }

            subjects.forEach(subject => {
                subjectsContainer.innerHTML += `
                    <div class="relative mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">${subject}</label>
                        <input type="text" 
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg text-center 
                            focus:ring-2 focus:ring-ceara-green focus:border-ceara-green"
                            placeholder="0.00"
                            disabled
                            oninput="maskNota(this)">
                    </div>
                `;
            });

            // Exibir ou ocultar a seção de bimestres
            bimestreSection.style.display = grade === '9' ? 'block' : 'none';
        }

        function maskNota(input) {
    // Remove tudo exceto números e ponto
    let value = input.value.replace(/[^0-9.]/g, '');
    
    // Remove pontos extras (mantém apenas o primeiro)
    const parts = value.split('.');
    if (parts.length > 2) {
        value = parts[0] + '.' + parts.slice(1).join('');
    }

    // Caso especial para 100
    if (value === '100' || value === '1.00') {
        value = '10.0';
        input.value = value;
        return;
    }

    // Se não tiver ponto e tiver 2 ou mais dígitos, insere o ponto após o primeiro dígito
    if (!value.includes('.') && value.length >= 2) {
        value = value.slice(0, 1) + '.' + value.slice(1);
    }

    // Garante que temos no máximo 2 casas decimais
    if (value.includes('.')) {
        const decimals = value.split('.')[1];
        if (decimals.length > 2) {
            value = value.slice(0, value.indexOf('.') + 3);
        }
    }

    // Converte para número e verifica se é maior que 10
    const numericValue = parseFloat(value);
    if (numericValue > 10) {
        // Pega apenas o primeiro dígito e adiciona .0
        value = value[0] + '.0';
    }

    // Atualiza o valor no input
    input.value = value;
}

        function toggleEdit() {
            isEditing = !isEditing;
            const inputs = document.querySelectorAll('#subjectsContainer input');
            inputs.forEach(input => {
                input.disabled = !isEditing;
            });

            // Mostrar ou ocultar o botão de salvar
            const saveButton = document.getElementById('saveButton');
            saveButton.style.display = isEditing ? 'block' : 'none';
        }

        function selectBimestre(bimestre) {
            const bimestreButtons = document.querySelectorAll('.bimestre-button');
            bimestreButtons.forEach(button => {
                button.classList.remove('bg-ceara-green', 'text-white');
                button.classList.add('bg-gray-200', 'text-gray-700');
            });
            const selectedButton = document.getElementById(bimestre);
            selectedButton.classList.add('bg-ceara-green', 'text-white');
            selectedButton.classList.remove('bg-gray-200', 'text-gray-700');
        }

        function saveNotes() {
            // Aqui você pode adicionar a lógica para salvar as notas
            alert('Notas salvas com sucesso!');
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
        }
    </style>
</head>
<body class="bg-gray-100 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <!-- Header -->
        <header class="bg-ceara-green rounded-lg shadow-lg p-6 mb-8">
            <h1 class="text-ceara-white text-3xl font-bold text-center">Sistema de Atualização de Notas</h1>
        </header>

        <!-- Main Content -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <div class="grid grid-cols-1 md:grid-cols-6 gap-4 p-4 mb-8">
                <div class="flex flex-col md:col-span-6">
                    <input type="text" name="nome" class="px-3 py-1.5 border border-[--gray-600] rounded-md focus:ring-1 focus:ring-[#DC2626] w-full text-center" oninput="removeAccents(this)" placeholder="Nome Completo" required>
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
                    <input type="text" name="publica" value="Pública" class="px-3 py-1.5 bg-gray-50 border border-[--gray-600] rounded-md w-full" disabled>
                    <input type="hidden" name="publica" value="Pública">
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

            <!-- Student Info -->
            <div class="mb-8">
                <div class="flex flex-col md:flex-row md:items-center md:space-x-4">
                    <div class="flex-1 mb-4 md:mb-0">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="studentName">
                            Nome do Aluno
                        </label>
                        <input type="text" id="studentName" 
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-ceara-green focus:border-ceara-green">
                    </div>
                    <div class="w-full md:w-1/4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="grade">
                            Série
                        </label>
                        <select id="grade" onchange="showSubjects()" 
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-ceara-green focus:border-ceara-green">
                            <option value="">Selecione uma série</option>
                            <option value="6">6º Ano</option>
                            <option value="7">7º Ano</option>
                            <option value="8">8º Ano</option>
                            <option value="9">9º Ano</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Grades Section -->
            <div class="space-y-6">
                <!-- Bimestre Section -->
                <div id="bimestreSection" style="display: none;">
                    <div class="flex space-x-2 mb-6">
                        <button id="bimestre1" class="bimestre-button px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition-colors" onclick="selectBimestre('bimestre1')">1º Bimestre</button>
                        <button id="bimestre2" class="bimestre-button px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition-colors" onclick="selectBimestre('bimestre2')">2º Bimestre</button>
                        <button id="bimestre3" class="bimestre-button px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition-colors" onclick="selectBimestre('bimestre3')">3º Bimestre</button>
                        <button id="bimestre4" class="bimestre-button px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition-colors" onclick="selectBimestre('bimestre4')">4º Bimestre</button>
                    </div>
                </div>

                <!-- Grades Grid -->
                <div id="subjectsContainer" class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <!-- As notas das disciplinas serão geradas aqui -->
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex justify-end space-x-4 mt-8">
                <button class="px-6 py-2 bg-ceara-green text-white rounded-lg hover:bg-ceara-green-dark transition-colors" onclick="toggleEdit()">
                    Editar Notas
                </button>
                <button id="saveButton" class="px-6 py-2 bg-primary text-white rounded-lg hover:bg-secondary transition-colors" onclick="saveNotes()" style="display: none;">
                    Salvar Notas
                </button>
            </div>
        </div>
    </div>
</body>
</html>
