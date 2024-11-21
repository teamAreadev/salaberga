<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Escolas</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'ceara-green': {
                            DEFAULT: '#008C45',
                            'light': '#00A050',
                            'dark': '#006633'
                        },
                        'ceara-orange': {
                            DEFAULT: '#FFA500',
                            'light': '#FFB733'
                        }
                    },
                    boxShadow: {
                        'card-hover': '0 25px 50px -12px rgba(0, 140, 69, 0.25)',
                        'input': '0 0 0 4px rgba(0, 140, 69, 0.15)'
                    },
                    borderRadius: {
                        'xl': '1rem',
                        '4xl': '2.5rem'
                    }
                }
            }
        }
    </script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
        }

        .school-card {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            transform-origin: center;
            min-width: 300px; /* Defina uma largura mínima para os cartões */
            max-width: 320px; /* Defina uma largura máxima para os cartões */
            flex: 0 0 auto; /* Impede que os cartões encolham */
        }

        .school-card:hover {
            transform: scale(1.035) translateY(-10px);
            box-shadow: theme('boxShadow.card-hover');
        }

        .gradient-bg {
            background: linear-gradient(135deg, #008C45 0%, #006633 100%);
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen">
    <!-- Hero Section -->
    <div class="gradient-bg text-white py-16 mb-10 relative overflow-hidden">
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('path/to/your/background-image.jpg'); opacity: 0.2;"></div>
    <div class="container mx-auto px-4 relative z-10 text-center">
        <h1 class="text-5xl font-bold mb-4" data-aos="fade-down">Portal das Escolas</h1>
        <p class="text-xl opacity-90 max-w-2xl mx-auto mb-6" data-aos="fade-up" data-aos-delay="200">
            Acesse o sistema da sua escola de forma rápida e simples
        </p>
        <div class="mt-8 flex justify-center space-x-4" data-aos="fade-up" data-aos-delay="400">
            <div class="flex items-center bg-white/20 rounded-lg px-6 py-3">
                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                </svg>
                <span>3 Escolas Cadastradas</span>
            </div>
        </div>
      
    </div>
</div>

    <div class="container mx-auto px-4 py-8">
        <!-- Barra de Busca Melhorada -->
        <div class="max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <div class="relative group">
                <input type="text" 
                       id="search-input" 
                       placeholder="Encontre sua escola..." 
                       class="w-full px-10 py-6 rounded-4xl border-2 border-gray-200 focus:border-ceara-green focus:ring-0 outline-none transition-all duration-300 text-lg placeholder:text-gray-500 shadow-lg" 
                       oninput="filterCards()">
                <div class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-ceara-green text-white p-4 rounded-full cursor-pointer hover:bg-ceara-orange transition-colors duration-300">
                    <i class="fas fa-search text-xl"></i>
                </div>
            </div>
        </div>

        <!-- Grade de Cartões das Escolas com Rolagem Horizontal -->
        <div id="card-container" class="flex overflow-x-auto space-x-10 pb-4">
            <div class="flex-none w-[350px]">
                <div class="school-card bg-white rounded-4xl shadow-2xl overflow-hidden transform transition-all hover:shadow-card-hover h-[600px]" data-aos="fade-up" data-name="EEEP Gonzaga Mota">
                    <div class="relative h-48 bg-gradient-to-r from-ceara-green-light to-ceara-orange-light">
                        <div class="absolute inset-0 opacity-80"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <img src="Itaitinga.png" alt="Escola Logo" class="w-32 h-32 object-cover rounded-full border-4 border-white shadow-xl">
                        </div>
                    </div>
                    <div class="p-8 text-center h-[calc(600px-12rem)]">
                        <h2 class="text-xl md:text-2xl font-bold text-gray-800 mb-3">EEEP Gonzaga Mota</h2>
                        <p class="flex items-center justify-center text-gray-600 mb-6">
                            <i class="fas fa-map-marker-alt mr-2 text-ceara-orange"></i>
                            Maracanaú, CE
                        </p>
                        <div class="flex flex-wrap justify-center gap-3 mb-8">
                            <span class="px-4 py-2 rounded-full text-sm font-medium bg-green-100 text-green-800 flex items-center">
                                <i class="fas fa-graduation-cap mr-2"></i>
                                Ensino Médio Profissional
                            </span>
                            <span class="px-4 py-2 rounded-full text-sm font-medium bg-blue-100 text-blue-800 flex items-center">
                                <i class="fas fa-clock mr-2"></i>
                                Período Integral
                            </span>
                        </div>
                        <div class="space-y-4">
                            <a href="#" class="block w-full bg-ceara-green hover:bg-ceara-green-dark text-white font-semibold py-4 rounded-2xl transition-all duration-300 transform hover:-translate-y-1">
                                Acessar Sistema
                            </a>
                            <a href="#" class="block w-full text-ceara-green border-2 border-ceara-green hover:bg-ceara-green/5 font-semibold py-4 rounded-2xl transition-all duration-300">
                                Mais Informações
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="flex-none w-[350px]">
                <div class="school-card bg-white rounded-4xl shadow-2xl overflow-hidden transform transition-all hover:shadow-card-hover h-[600px]" data-aos="fade-up" data-name="EEEP Luiza de Teodoro">
                    <div class="relative h-48 bg-gradient-to-r from-ceara-green-light to-ceara-orange-light">
                        <div class="absolute inset-0 opacity-80"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <img src="Itaitinga.png" alt="Escola Logo" class="w-32 h-32 object-cover rounded-full border-4 border-white shadow-xl">
                        </div>
                    </div>
                    <div class="p-8 text-center h-[calc(600px-12rem)]">
                        <h2 class="text-xl md:text-2xl font-bold text-gray-800 mb-3">EEEP Luiza de Teodoro</h2>
                        <p class="flex items-center justify-center text-gray-600 mb-6">
                            <i class="fas fa-map-marker-alt mr-2 text-ceara-orange"></i>
                            Pacatuba, CE
                        </p>
                        <div class="flex flex-wrap justify-center gap-3 mb-8">
                            <span class="px-4 py-2 rounded-full text-sm font-medium bg-green-100 text-green-800 flex items-center">
                                <i class="fas fa-graduation-cap mr-2"></i>
                                Ensino Médio Profissional
                            </span>
                            <span class="px-4 py-2 rounded-full text-sm font-medium bg-blue-100 text-blue-800 flex items-center">
                                <i class="fas fa-clock mr-2"></i>
                                Período Integral
                            </span>
                        </div>
                        <div class="space-y-4">
                            <a href="#" class="block w-full bg-ceara-green hover:bg-ceara-green-dark text-white font-semibold py-4 rounded-2xl transition-all duration-300 transform hover:-translate-y-1">
                                Acessar Sistema
                            </a>
                            <a href="#" class="block w-full text-ceara-green border-2 border-ceara-green hover:bg-ceara-green/5 font-semibold py-4 rounded-2xl transition-all duration-300">
                                Mais Informações
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="flex-none w-[350px]">
                <div class="school-card bg-white rounded-4xl shadow-2xl overflow-hidden transform transition-all hover:shadow-card-hover h-[600px]" data-aos="fade-up" data-name="EEEP Antônio Valmir">
                    <div class="relative h-48 bg-gradient-to-r from-ceara-green-light to-ceara-orange-light">
                        <div class="absolute inset-0 opacity-80"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <img src="./assets/img/antonio_valmir-removebg-preview.png" alt="Escola Logo" class="w-32 h-32 object-cover rounded-full border-4 border-white shadow-xl">
                        </div>
                    </div>
                    <div class="p-8 text-center h-[calc(600px-12rem)]">
                        <h2 class="text-xl md:text-2xl font-bold text-gray-800 mb-3">EEEP Antônio Valmir</h2>
                        <p class="flex items-center justify-center text-gray-600 mb-6">
                            <i class="fas fa-map-marker-alt mr-2 text-ceara-orange"></i>
                            Caucaia, CE
                        </p>
                        <div class="flex flex-wrap justify-center gap-3 mb-8">
                            <span class="px-4 py-2 rounded-full text-sm font-medium bg-green-100 text-green-800 flex items-center">
                                <i class="fas fa-graduation-cap mr-2"></i>
                                Ensino Médio Profissional
                            </span>
                            <span class="px-4 py-2 rounded-full text-sm font-medium bg-blue-100 text-blue-800 flex items-center">
                                <i class="fas fa-clock mr-2"></i>
                                Período Integral
                            </span>
                        </div>
                        <div class="space-y-4">
                            <a href="#" class="block w-full bg-ceara-green hover:bg-ceara-green-dark text-white font-semibold py-4 rounded-2xl transition-all duration-300 transform hover:-translate-y-1">
                                Acessar Sistema
                            </a>
                            <a href="#" class="block w-full text-ceara-green border-2 border-ceara-green hover:bg-ceara-green/5 font-semibold py-4 rounded-2xl transition-all duration-300">
                                Mais Informações
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <style>
        .school-card {
            min-width: 350px;
            max-width: 350px;
            min-height: 600px;
            max-height: 600px;
        }
        </style>
    <footer class="text-white font-sans w-full mt-auto py-4" style="background-color: #008C45">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
                <!-- Identificação Institucional -->
                <div class="p-2">
                    <h4 class="text-ceara-orange text-lg font-bold mb-3">SEEPS</h4>
                    <p class="text-sm mb-3">Sistema de Ensino e Educação Profissional Salaberga</p>
                    <div class="flex gap-3">
                        <a aria-label="Facebook" target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/groups/salaberga/"
                            class="w-8 h-8 bg-white/10 rounded-full flex items-center justify-center hover:bg-ceara-orange transition-all">
                            <i class="fab fa-facebook text-sm"></i>
                        </a>
                        <a aria-label="Instagram" target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/eeepsalabergampe/"
                            class="w-8 h-8 bg-white/10 rounded-full flex items-center justify-center hover:bg-ceara-orange transition-all">
                            <i class="fab fa-instagram text-sm"></i>
                        </i>
                    </a>
                </div>
            </div>

            <!-- Contato -->
            <div class="p-2">
                <h4 class="text-ceara-orange text-lg font-bold mb-3">CONTATO</h4>
                <div class="space-y-2 text-sm">
                    <a class="flex items-center hover:text-ceara-orange transition-colors">
                        <i class="fas fa-envelope mr-2"></i>
                        eeepsantaritama@gmail.com
                    </a>
                    <a href="tel:+558531012100" class="flex items-center hover:text-ceara-orange transition-colors">
                        <i class="fas fa-phone-alt mr-2"></i>
                        (85) 3101-2100
                    </a>
                </div>
            </div>

            <!-- Desenvolvedores -->
            <div class="p-2">
                <h4 class="text-ceara-orange text-lg font-bold mb-3">DESENVOLVEDORES</h4>
                <div class="flex gap-4">
                    <!-- Primeira coluna (3 desenvolvedores) -->
                    <ul class="space-y-2">
                        <li>
                            <a href="https://www.instagram.com/otavio.ce/" target="_blank" rel="noopener noreferrer"
                                class="flex items-center text-sm hover:text-ceara-orange transition-colors">
                                <i class="fab fa-instagram text-ceara-orange mr-2"></i>
                                Otavio Menezes
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/matheus-felix-74489329a/" target="_blank" rel="noopener noreferrer"
                                class="flex items-center text-sm hover:text-ceara-orange transition-colors">
                                <i class="fab fa-linkedin text-ceara-orange mr-2"></i>
                                Matheus Felix
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/lavosier-nascimento-4b124a2b8/?trk=opento_sprofile_topcard" target="_blank" rel="noopener noreferrer"
                                class="flex items-center text-sm hover:text-ceara-orange transition-colors">
                                <i class="fab fa-linkedin text-ceara-orange mr-2"></i>
                                Lavosier Nascimento
                            </a>
                        </li>
                    </ul>

                    <!-- Segunda coluna (2 desenvolvedores) -->
                    <ul class="space-y-2">
                        <li>
                            <a href="https://www.linkedin.com/in/roger-cavalcante/" target="_blank"
                                rel="noopener noreferrer"
                                class="flex items-center text-sm hover:text-ceara-orange transition-colors">
                                <i class="fab fa-linkedin text-ceara-orange mr-2"></i>
                                Roger Cavalcante
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/pedro-uch%C3%B4a-de-abreu-67723429a/?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank" rel="noopener noreferrer"
                                class="flex items-center text-sm hover:text-ceara-orange transition-colors">
                                <i class="fab fa-linkedin text-ceara-orange mr-2"></i>
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
    AOS.init({
        duration: 800,
        once: true,
        offset: 100,
    });

    function filterCards() {
        const input = document.getElementById("search-input");
        const filter = input.value.toLowerCase();
        const cards = document.querySelectorAll(".school-card");

        cards.forEach(card => {
            const cardName = card.getAttribute("data-name").toLowerCase();
            if (cardName.includes(filter)) {
                card.style.display = ""; // Exibir o cartão
            } else {
                card.style.display = "none"; // Ocultar o cartão
            }
        });
    }
</script>
</body>
</html>

