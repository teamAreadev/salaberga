    <!-- //DEV SGTM (SALABERGA TORQUATO GOMES DE MATOS)

        S S S S S S S S
    S S S S S S S S S S
    S S S S S S S S S S S
    S S
    S S S S S S S S S S S
            S S S S S S           
                S S S S S
    S S S S S S S S S S S
    S S S S S S S S S
        S S S S S S S

        T T T T T T T T T
            T T T T
            T T T T
            T T T T
            T T T T
            T T T T
            T T T T

        G G G G G G G G
    G G G G G G G G G
    G G
    G G     G G G G G G
    G G             G G
    G G G G G G G G
        G G G G G G

        M             M
        M M         M M
        M   M     M   M
        M     M M     M
        M       M     M
        M             M
        M             M

        Qual é o seu superpoder? Talvez seja curiosidade já que você está olhando nosso código fonte.
        What’s your superpower? Perhaps it’s curiosity since you are looking at our source code. -->


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="https://i.postimg.cc/8czCMpqx/Design-sem-nome-70-removebg-preview.png" type="image/x-icon">
    <title>FUN</title>
    <style>
        :root {
            --background-color: #f0f7ff;
            --text-color: #333333;
            --header-color: #f0f7ff;
            --icon-bg: #ffffff;
            --icon-shadow: rgba(0, 0, 0, 0.1);
            --accent-color: #2ecc71;
            --grid-color: #e0e0e0;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--background-color);
            color: var(--text-color);
            padding-top: 94px;
            min-height: 100vh;
            background-image:
                radial-gradient(circle at 10% 20%, rgba(52, 152, 219, 0.05) 0%, rgba(52, 152, 219, 0) 20%),
                radial-gradient(circle at 90% 80%, rgba(46, 204, 113, 0.05) 0%, rgba(46, 204, 113, 0) 20%);
        }

        header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            height: 80px;
            background-color: var(--header-color);
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        h1 {
            font-size: 28px;
            font-weight: 600;
            color: #ffffff;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
        }

        .app-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 24px;
            padding: 24px;
            max-width: 600px;
            margin: 0 auto;
            background-image:
                linear-gradient(to right, var(--grid-color) 1px, transparent 1px),
                linear-gradient(to bottom, var(--grid-color) 1px, transparent 1px);
            background-size: 25% 25%;
        }

        .app-icon {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-decoration: none;
            color: var(--text-color);
            transition: transform 0.3s ease;
        }

        .app-icon:hover {
            transform: translateY(-5px);
        }

        .icon {
            width: 80px;
            height: 80px;
            background-color: var(--icon-bg);
            border-radius: 22px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 10px;
            box-shadow: 0 6px 16px var(--icon-shadow);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .icon::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.8) 0%, rgba(255, 255, 255, 0) 70%);
            transform: rotate(45deg);
            transition: all 0.3s ease;
        }

        .app-icon:hover .icon {
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
            transform: scale(1.05);
        }

        .app-icon:hover .icon::before {
            transform: rotate(45deg) translate(20%, 20%);
        }

        .icon img {
            width: 50px;
            height: 50px;
            transition: transform 0.3s ease;
            filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.1));
        }

        .app-icon:hover .icon img {
            transform: scale(1.1);
        }

        .app-name {
            font-size: 14px;
            font-weight: 500;
            text-align: center;
            max-width: 90px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            transition: color 0.3s ease;
        }

        .app-icon:hover .app-name {
            color: var(--accent-color);
        }

        @media (max-width: 500px) {
            .app-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 360px) {
            .app-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
    </style>
</head>

<body>
<header class="bg-[#007A33] text-white py-2 px-4 sm:px-6 shadow-lg fixed top-0 left-0 right-0 z-50">
    <div class="container mx-auto">
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-4">
                <img src="img/Design sem nome.svg" alt="Logo"
                    class="h-10 w-auto">
                <h1 class="text-xl sm:text-2xl font-semibold tracking-tight">
                    <span class="text-[#FFA500]">Fun</span>cionalidades
                </h1>
            </div>
            <div class="flex items-center space-x-4">
                <nav class="hidden md:flex space-x-4">
                    <a href="#" class="text-white hover:text-[#FFA500] transition-colors duration-300">Início</a>
                    <a href="#" class="text-white hover:text-[#FFA500] transition-colors duration-300">Serviços</a>
                    <a href="#" class="text-white hover:text-[#FFA500] transition-colors duration-300">Suporte</a>
                </nav>
                <div class="relative group">
                    <a href="/perfil" class="flex items-center space-x-2 focus:outline-none group">
                        <img src="" alt="Perfil"
                            class="h-8 w-8 rounded-full bg-white p-1 border-2 border-transparent group-hover:border-[#FFA500] transition-colors duration-300">
                        <span class="hidden sm:inline group-hover:text-[#FFA500] transition-colors duration-300">Meu
                            Perfil</span>
                        <svg class="h-4 w-4 fill-current group-hover:text-[#FFA500] transition-colors duration-300"
                            viewBox="0 0 20 20">
                            <path
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                        </svg>
                    </a>
                    <div class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 hidden group-hover:block">
                        <a href="/configuracoes"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#FFA500] hover:text-white">Configurações</a>
                        <a href="/sair"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#FFA500] hover:text-white">Sair</a>
                    </div>
                </div>
                <button
                    class="md:hidden text-white focus:outline-none hover:text-[#FFA500] transition-colors duration-300">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </div>
        <!-- Menu móvel -->
        <nav class="hidden md:hidden mt-4 space-y-2">
            <a href="#" class="block text-white hover:text-[#FFA500] transition-colors duration-300">Início</a>
            <a href="#" class="block text-white hover:text-[#FFA500] transition-colors duration-300">Serviços</a>
            <a href="#" class="block text-white hover:text-[#FFA500] transition-colors duration-300">Suporte</a>
        </nav>
    </div>
</header>
    <main>
        <div class="app-grid">
         <a href="index_aluno.php" class="app-icon">
            <div class="icon"><img src="img\Design sem nome.svg" alt="Salas Virtuais"></div>
        <span class="app-name">Portal Stgm</span>
          </a>
            <a href="/suporte" class="app-icon">
                <div class="icon"><img src="https://i.postimg.cc/cHVHnLbG/apoio-suporte.png" alt="Salas Virtuais"></div>
                <span class="app-name">Suporte tecnico</span>
            </a>
            <a href="/horario" class="app-icon">
                <div class="icon"><img src="https://i.postimg.cc/kGpWtbRV/relogio.png" alt="Horário"></div>
                <span class="app-name">Horário</span>
            </a>
            <a href="/ajuste-matricula" class="app-icon">
                <div class="icon"><img src="https://i.postimg.cc/sf6YLtHV/matricular.png" alt="Matrícula"></div>
                <span class="app-name">Matrícula</span>
            </a>
            <a href="/aproveitamento" class="app-icon">
                <div class="icon"><img src="https://i.postimg.cc/9FDdHJsy/vitoria.png" alt="Aproveitamento"></div>
                <span class="app-name">Aproveitamento</span>
            </a>
            <a href="/notas" class="app-icon">
                <div class="icon"><img src="https://i.postimg.cc/jSNyLCx5/nota.png" alt="Notas"></div>
                <span class="app-name">Notas</span>
            </a>
            <a href="/faltas" class="app-icon">
                <div class="icon"><img src="https://i.postimg.cc/LX4PCTzY/desqualificado.png" alt="Faltas"></div>
                <span class="app-name">Faltas</span>
            </a>
            <a href="/historico" class="app-icon">
                <div class="icon"><img src="https://i.postimg.cc/d3HjmfpV/conto-1.png" alt="Histórico"></div>
                <span class="app-name">Histórico</span>
            </a>
            <a href="/fluxograma" class="app-icon">
                <div class="icon"><img src="https://i.postimg.cc/3rcG12WN/fluxograma.png" alt="Fluxograma"></div>
                <span class="app-name">Fluxograma</span>
            </a>
            <a href="/plano-estudos" class="app-icon">
                <div class="icon"><img src="https://i.postimg.cc/tgkZxxLX/tarefa.png" alt="Plano de Estudos"></div>
                <span class="app-name">Plano de Estudos</span>
            </a>
            <a href="/mural-avisos" class="app-icon">
                <div class="icon"><img src="https://i.postimg.cc/CMX7vRKh/aviso-1.png" alt="Mural de Avisos"></div>
                <span class="app-name">Mural de Avisos</span>
            </a>
            <a href="/vida-academica" class="app-icon">
                <div class="icon"><img src="https://i.postimg.cc/fLFcgPD2/video-tutorial.png" alt="Vida Acadêmica">
                </div>
                <span class="app-name">Vida Acadêmica</span>
            </a>
            <a href="/diarios" class="app-icon">
                <div class="icon"><img src="https://i.postimg.cc/yN806KNp/escola.png" alt="Diários"></div>
                <span class="app-name">Diários</span>
            </a>
            <a href="/ajuste-turmas" class="app-icon">
                <div class="icon"><img src="https://i.postimg.cc/V63tFbW2/gerenciamento-de-equipe.png"
                        alt="Ajuste de Turmas">
                </div>
                <span class="app-name">Ajuste de Turmas</span>
            </a>
            <a href="/permissoes" class="app-icon">
                <div class="icon"><img src="https://i.postimg.cc/sfh7gwVz/permissoes.png" alt="Permissões"></div>
                <span class="app-name">Permissões</span>
            </a>
        </div>
    </main>
    <footer class="bg-gradient-to-b from-black via-[#000] to-black text-white py-20">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-8">
                <div class="md:col-span-4 space-y-6">
                    <img src="https://i.postimg.cc/yx26GhLv/lavosier-nas-3.png" alt="stgm Logo"
                        class="h-12 transition-all duration-300 hover:grayscale-0" style="background-color: #000000;">
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                        ut
                        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur.
                    </p>
                </div>
                <div class="md:col-span-4 flex flex-col items-center justify-center space-y-4 md:col-start-10">
                    <img src="https://i.postimg.cc/SsTx6bC0/Dev-2.jpg" alt="DevStgm Logo"
                        class="h-16 w-16 transition-all duration-300 filter grayscale hover:grayscale-0">
                    <p class="text-xs text-gray-400 text-center">Desenvolvido por Dev.Stgm</p>
                </div>
            </div>
            <div class="mt-12 pt-8 border-t border-gray-800 text-center">
                <p class="text-gray-400 text-sm">&copy; 2024 DevStgm. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const mobileMenuButton = document.querySelector('.md\\:hidden');
            const mobileMenu = document.querySelector('.md\\:flex');

            mobileMenuButton.addEventListener('click', function () {
                mobileMenu.classList.toggle('hidden');
                mobileMenu.classList.toggle('flex');
                mobileMenu.classList.toggle('flex-col');
                mobileMenu.classList.toggle('absolute');
                mobileMenu.classList.toggle('top-16');
                mobileMenu.classList.toggle('left-0');
                mobileMenu.classList.toggle('right-0');
                mobileMenu.classList.toggle('bg-[#007A33]');
                mobileMenu.classList.toggle('p-4');
            });
        });
    </script>
</body>

</html>