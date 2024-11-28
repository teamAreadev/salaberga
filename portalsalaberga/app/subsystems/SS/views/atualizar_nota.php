<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Informações Pessoais</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap');
        
        body {
            font-family: 'Inter', sans-serif;
        }

        .input-transition {
            transition: all 0.3s ease;
        }

        .input-transition:focus {
            transform: translateY(-1px);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .form-section {
            animation: fadeIn 0.5s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        input:disabled {
            background-color: #f3f4f6;
            cursor: not-allowed;
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
        }
    </script>
</head>
<body class="bg-gradient-to-br from-gray-50 to-gray-100 min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-4xl">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-gray-900">Informações Do Aluno</h2>
                <p class="mt-2 text-gray-600">Atualize as Informações com atenção!</p>
            </div>
        
            <div class="bg-white shadow-lg rounded-xl p-8">
                <form class="space-y-6" action="../controllers/atualizar.php" method="post">
                    <div class="form-section">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">Dados Pessoais</h3>
                        <div class="grid grid-cols-1 md:grid-cols-6 gap-6">
                            <div class="md:col-span-6">
                                <input type="text"
                                       name="nome"
                                       class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-lg text-gray-600 text-center"
                                       placeholder="Nome Completo"
                                       value="<?php echo $_SESSION['nome']; ?>"
                                       disabled>
                            </div>
        
                            <div class="md:col-span-2">
                                <input type="text"
                                       name="nasc"
                                       class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-lg text-gray-600 text-center"
                                       placeholder="Data de Nascimento"
                                       value="<?php echo $_SESSION['nasc']; ?>"
                                       disabled>
                            </div>
        
                            <div class="md:col-span-2">
                                <input type="text"
                                       value="<?php echo $_SESSION['curso']; ?>"
                                       class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-lg text-gray-600 text-center"
                                       disabled>
                            </div>
        
                            <div class="md:col-span-2">
                                <input type="text"
                                       value="<?php echo $_SESSION['publica'] . $_SESSION['bairro'] . $_SESSION['pcd'];  ?>"
                                       class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-lg text-gray-600 text-center"
                                       disabled>
                            </div>
                        </div>
                    </div>
                    <div class="form-section mt-8">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">Notas Alunos</h3>
                        <div class="grid grid-cols-3 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-3 gap-4">
                            <div class="input-group">
                                <input type="text"
                                       name="lp"
                                       class="input-transition w-full px-3 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent text-center"
                                       placeholder="PORTUGUÊS"
                                       value="<?php echo $_SESSION['lp']; ?>"
                                       required>
                            </div>
                            <div class="input-group">
                                <input type="text"
                                       name="ma"
                                       class="input-transition w-full px-3 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent text-center"
                                       placeholder="MATEMÁTICA"
                                       value="<?php echo $_SESSION['ma']; ?>"
                                       required>
                            </div>
                            <div class="input-group">
                                <input type="text"
                                       name="hi"
                                       class="input-transition w-full px-3 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent text-center"
                                       placeholder="HISTÓRIA"
                                       value="<?php echo $_SESSION['hi']; ?>"
                                       required>
                            </div>
                            <div class="input-group">
                                <input type="text"
                                       name="ge"
                                       class="input-transition w-full px-3 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent text-center"
                                       placeholder="GEOGRAFIA"
                                       value="<?php echo $_SESSION['ge']; ?>"
                                       required>
                            </div>
                            <div class="input-group">
                                <input type="text"
                                       name="ci"
                                       class="input-transition w-full px-3 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent text-center"
                                       placeholder="CIÊNCIAS"
                                       value="<?php echo $_SESSION['ci']; ?>"
                                       required>
                            </div>
                            <div class="input-group">
                                <input type="text"
                                       name="li"
                                       class="input-transition w-full px-3 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent text-center"
                                       placeholder="INGLÊS"
                                       value="<?php echo $_SESSION['li']; ?>"
                                       required>
                            </div>
                            <div class="input-group">
                                <input type="text"
                                       name="ar"
                                       class="input-transition w-full px-3 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent text-center"
                                       placeholder="ARTES"
                                       value="<?php echo $_SESSION['ar']; ?>"
                                       required>
                            </div>
                            <div class="input-group">
                                <input type="text"
                                       name="ef"
                                       class="input-transition w-full px-3 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent text-center"
                                       placeholder="ED. FÍSICA"
                                       value="<?php echo $_SESSION['ef']; ?>"
                                       required>
                            </div>
                            <div class="input-group">
                                <input type="text"
                                       name="re"
                                       class="input-transition w-full px-3 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent text-center"
                                       placeholder="RELIGIÃO"
                                       value="<?php echo $_SESSION['re']; ?>"
                                       required>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center space-x-4 mt-8 pt-6 border-t border-gray-200">
                        <button type="button"
                                class="px-6 py-3 border-2 border-gray-500 rounded-lg text-gray-500 hover:bg-gray-50 transition-colors duration-300 flex items-center font-medium">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                            Cancelar
                        </button>
        
                        <button type="button"
                                id="editButton"
                                class="px-6 py-3 bg-[#008C45] text-white rounded-lg transition-colors duration-300 flex items-center font-medium">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                            </svg>
                            Editar
                        </button>
                        <button type="submit"
                                id="updateButton"
                                name="atualizar_nota"
                                class="hidden px-6 py-3 bg-[#008C45] text-white rounded-lg transition-colors duration-300 flex items-center font-medium">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                            </svg>
                            Atualizar
                        </button>
                    </div>
                </form>
            </div>
        </div>

    <script>
        function disableAllInputs() {
            const inputs = document.querySelectorAll('input:not([disabled])');
            inputs.forEach(input => {
                input.disabled = true;
            });
        }

        function enableAllInputs() {
            const inputs = document.querySelectorAll('input:not([name="nome"]):not([name="nasc"]):not([value="Enfermagem"]):not([value="Pública"])');
            inputs.forEach(input => {
                input.disabled = false;
            });
        }

        document.addEventListener('DOMContentLoaded', disableAllInputs);

        document.getElementById('editButton').addEventListener('click', function() {
            enableAllInputs();
            
            this.classList.add('hidden');
            document.getElementById('updateButton').classList.remove('hidden');
        });

        document.querySelector('button[type="button"]').addEventListener('click', function() {
            disableAllInputs();
            
            document.getElementById('editButton').classList.remove('hidden');
            document.getElementById('updateButton').classList.add('hidden');
        });
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
    </script>
</body>
</html>