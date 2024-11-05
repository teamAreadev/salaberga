<?php
require_once('modals/modalLogin.php');
if(isset($_SESSION['email'])){
    header('location:inicio.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/images/Design sem nome.svg" type="image">
    <title>seesp</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
 <link rel="stylesheet" href="../seeps2024/assets/theme/css/style.css">
 <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

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

<style> /* Variables */
:root {
    --ceara-green: #008C45;
    --ceara-green-dark: #004d00;
    --ceara-orange: '#FFA500';
    --ceara-white: #ffffff;
    --gray-600: #666666;
    --gray-dark: #333333;
    --shadow-sm: 0 4px 8px rgba(0,0,0,0.1);
    --shadow-md: 0 6px 12px rgba(0,0,0,0.2);
    --transition-timing: cubic-bezier(0.4, 0, 0.2, 1);
    --transition-duration: 0.4s;
    --hover-scale: 1.02;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Arial', sans-serif;
    background-color: #f5f5f5;
    line-height: 1.6;
}

* {
  user-select: none;
}

html {
  height: 100%;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
}

/* Header Styles */
.header-main {
  background-color: var(--ceara-white);
  position: fixed;
  width: 100%;
  top: 0;
  left: 0;
  z-index: 50;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.nav-container {
  max-width: 1280px;
  margin: 0 auto;
  padding: 0 1rem;
}

.nav-content {
  display: flex;
  justify-content: space-between;
  align-items: center;
  height: 4rem;
}

/* Logo Styles */
.logo-container {
  display: flex;
  align-items: center;
}

.logo-img {
  height: 2.5rem;
  width: auto;
}

/* Navigation Actions */
.nav-actions {
  display: flex;
  align-items: center;
  gap: 1rem;
}
.mobile-menu-btn {
    display: none;
    padding: 0.5rem;
    color: var(--ceara-green);
    background: transparent;
    border: none;
    cursor: pointer;
    font-size: 1.5rem;
    outline: none; /* Remove o outline padrão */
    -webkit-tap-highlight-color: transparent; /* Remove o highlight em dispositivos móveis */
}

/* Remove o outline azul ao clicar */
.mobile-menu-btn:focus {
    outline: none;
}

/* Opcional: adiciona um efeito visual próprio para feedback */
.mobile-menu-btn:active {
    transform: scale(0.95);
}

.mobile-menu-btn i {
    font-size: 1.8rem;
}

@media (max-width: 768px) {
    .mobile-menu-btn {
        display: block;
        padding: 0.5rem;
    }
}
/* Login Button */
.login-button {
  background-color: var(--ceara-green);
  color: var(--ceara-white);
  padding: 0.75rem 2rem;
  border-radius: 0.375rem;
  font-weight: 600;
  font-size: 0.875rem;
  text-transform: uppercase;
  letter-spacing: 0.05em;
  transition: all 0.3s ease;
  border: none;
  cursor: pointer;
}

.login-button:hover {
  background-color: var(--ceara-green-dark);
  transform: translateY(-1px);
}

.login-button:active {
  transform: translateY(0);
}.main-content {
    padding: 2rem 0;
}

.container {
    max-width: 1100px;
    margin: 0 auto;
    padding: 0 1rem;
}

/* ==========================================
   SEÇÃO DE CURSOS
========================================== */
.courses-section {
    padding: 2rem 0;
}

.courses-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); /* Reduzido */
    gap: 2rem;
    padding: 1rem;
}

/* ==========================================
   CARDS DOS CURSOS
========================================== */
.course-card {
    background-color: var(--ceara-white);
    padding: 3.2rem 1rem; /* Reduzido */
    text-align: center;
    border-radius: 12px;
    box-shadow: var(--shadow-sm);
    min-height: 150px; /* Reduzido */
    display: flex;
    flex-direction: column;
    justify-content: center;
    position: relative;
    transition: all var(--transition-duration) var(--transition-timing);
    overflow: hidden;
}

.card-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 0.4rem; /* Reduzido */
    transition: transform var(--transition-duration) var(--transition-timing);
}

/* Ícones */
.course-card i {
    font-size: 1.3rem; /* Reduzido */
    color: var(--ceara-green);
    margin-bottom: 0.3rem; /* Reduzido */
    transition: transform var(--transition-duration) var(--transition-timing);
}

/* Títulos */
.course-card h3 {
    color: var(--gray-dark);
    font-size: 1rem; /* Reduzido */
    font-weight: 600;
    margin-bottom: 0.4rem; /* Reduzido */
}

/* Detalhes do Card */
.card-details {
    opacity: 0;
    visibility: hidden;
    height: 0;
    transform: translateY(10px);
    transition: all var(--transition-duration) var(--transition-timing);
}

.course-description {
    color: var(--gray-600);
    text-align: center;
    margin-bottom: 0.6rem; /* Reduzido */
    font-size: 0.8rem; /* Reduzido */
    line-height: 1.3;
}

/* Informações do Curso */
.course-info {
    display: flex;
    justify-content: center;
    gap: 0.8rem; /* Reduzido */
    margin-bottom: 0.8rem; /* Reduzido */
}

.course-info span {
    display: flex;
    align-items: center;
    gap: 0.2rem; /* Reduzido */
    color: var(--gray-600);
    font-size: 0.75rem; /* Reduzido */
}

.course-info i {
    font-size: 0.8rem; /* Reduzido */
    margin-bottom: 0;
}

/* Botão */
.course-button {
    display: inline-block;
    padding: 0.4rem 0.8rem; /* Reduzido */
    background-color: var(--ceara-green);
    color: var(--ceara-white);
    border-radius: 16px; /* Reduzido */
    text-decoration: none;
    font-weight: 500;
    font-size: 0.75rem; /* Reduzido */
    transition: all var(--transition-duration) var(--transition-timing);
}

/* Efeitos Hover */
.course-card:hover {
    min-height: 220px; /* Reduzido */
    padding: 1.4rem 1.2rem; /* Reduzido */
    box-shadow: var(--shadow-md);
    transform: scale(var(--hover-scale));
}

.course-card:hover .card-details {
    opacity: 1;
    visibility: visible;
    height: auto;
    transform: translateY(0);
}

.course-card:hover i {
    transform: scale(1.1);
}

.course-button:hover {
    background-color: var(--ceara-green-dark);
    transform: translateY(-2px);
}

/* Modal Styles */
.modal {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  z-index: 1050;
  overflow-y: auto;
  opacity: 0;
  transition: opacity 0.3s ease-in-out;
  font-family: 'Raleway', sans-serif;
}

.modal.show {
  opacity: 1;
  display: block;
  animation: fadeIn 0.3s ease-out;
}

.modal-dialog {
  position: relative;
  width: 400px;
  margin: 10% auto;
  transform: translateY(-50px);
  transition: transform 0.3s ease-out;
}

.modal.show .modal-dialog {
  transform: translateY(0);
  animation: slideDown 0.3s ease-out;
}

.modal-content {
  position: relative;
  background-color: var(--ceara-white);
  width: 400px;
  border-radius: 8px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  padding: 2rem;
}

.modal-header {
  text-align: center;
  border-bottom: none;
  padding-bottom: 1.5rem;
}



.modal-title-container {
  display: flex;
  justify-content: center;
  margin-top: 1rem;
  margin-bottom: 1.5rem;
}

.modal-title {
  font-family: 'Inter', sans-serif;
  font-size: 1.5rem;
  font-weight: 700;
  letter-spacing: -0.025em;
  color: var(--gray-dark);
  text-transform: uppercase;
}

.modal-body {
  padding: 0;
  width: 100%;
}

.form-control {
  width: 100%;
  padding: 0.75rem 1rem;
  font-size: 1rem;
  line-height: 1.5;
  color: var(--gray-dark);
  background-color: var(--gray-light);
  border: 1px solid #e5e5e5;
  border-radius: 4px;
  transition: all 0.3s ease;
  margin-bottom: 1rem;
}

.form-control:focus {
  border-color: var(--ceara-green);
  box-shadow: 0 0 0 2px rgba(0, 140, 69, 0.2);
  outline: none;
  background-color: var(--ceara-white);
}

#separadorBtn {
  margin-top: 1.5rem;
  text-align: center;
}

.btn-success {
  background-color: var(--ceara-green);
  color: var(--ceara-white);
  border: none;
  padding: 0.75rem 2rem;
  font-size: 0.875rem;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.05em;
  border-radius: 4px;
  cursor: pointer;
  transition: all 0.3s ease;
  width: 100%;
}

.btn-success:hover {
  background-color: var(--ceara-green-dark);
  transform: translateY(-1px);
}

.btn-success:active {
  transform: translateY(0);
}

.additional-links {
  margin-top: 1.5rem;
  text-align: center;
}

.additional-links a {
  color: var(--ceara-green);
  text-decoration: none;
  font-size: 0.875rem;
  transition: color 0.3s ease;
}

.additional-links a:hover {
  color: var(--primary);
  text-decoration: underline;
}

.divider {
  color: var(--gray-dark);
  margin: 0 0.5rem;
  opacity: 0.5;
}

.modal .logo-container {
  margin-bottom: 1.5rem;
  justify-content: center;
}

.modal .logo-img {
  height: 60px;
  width: auto;
}

/* Screen Reader Only */
.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  border: 0;
}

/* Animations */
@keyframes fadeIn {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

@keyframes slideDown {
  from {
    transform: translateY(-10px);
    opacity: 0;
  }
  to {
    transform: translateY(0);
    opacity: 1;
  }
}

/* Responsive Design */
@media (max-width: 768px) {
  .mobile-menu-btn {
    display: block;
  }

  .nav-links {
    position: absolute;
    top: 4rem;
    right: 0;
    background-color: var(--ceara-white);
    width: 100%;
    padding: 1rem;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    display: none;
  }

  .nav-links.active {
    display: block;
  }

  .login-button {
    width: 100%;
    text-align: center;
  }

  .courses-grid {
    grid-template-columns: 1fr;
    padding: 1rem;
  }

  .footer-grid {
    grid-template-columns: 1fr;
    text-align: center;
  }

  .contact-info p {
    justify-content: center;
  }

  .modal-dialog,
  .modal-content {
    width: 95%;
    margin: 20px auto;
  }

  .modal-body {
    padding: 1rem;
  }

  .btn-success {
    padding: 0.75rem 1rem;
  }
  
  .modal-title {
    font-size: 1.5rem;
  }

  .modal .logo-img {
    height: 50px;
  }
}

/* Utility Classes */
.text-center { text-align: center; }
.mt-1 { margin-top: 0.25rem; }
.mt-2 { margin-top: 0.5rem; }
.mt-3 { margin-top: 1rem; }
.mt-4 { margin-top: 1.5rem; }
.mt-5 { margin-top: 2rem; }
.mb-1 { margin-bottom: 0.25rem; }
.mb-2 { margin-bottom: 0.5rem; }
.mb-3 { margin-bottom: 1rem; }
.mb-4 { margin-bottom: 1.5rem; }
.mb-5 { margin-bottom: 2rem; }

.input-group {
  position: relative;
  display: flex;
  width: 100%;
  margin-bottom: 1rem;
}

.input-group-addon {
  display: flex;
  align-items: center;
  padding: 0.75rem 1rem;
  font-size: 1rem;
  color: var(--gray-dark);
  background-color: var(--gray-light);
  border: 1px solid #e5e5e5;
  border-right: none;
  border-radius: 4px 0 0 4px;
  transition: all 0.3s ease;
}

.input-group .form-control {
  border-left: none;
  border-radius: 0 4px 4px 0;
  margin-bottom: 0;
  transition: all 0.3s ease;
}

/* Ícone normal */
.input-group-addon i {
  width: 16px;
  text-align: center;
  color: var(--ceara-green);
  transition: all 0.3s ease;
}

/* Estado de foco */


/* Mudança do addon quando o input está em foco */
.input-group .form-control:focus ~ .input-group-addon,
.input-group .form-control:focus + .input-group-addon {
  background-color: var(--ceara-white);
  border-color: var(--ceara-green);
}

/* Mudança do ícone quando o input está em foco */
.input-group .form-control:focus ~ .input-group-addon i,
.input-group .form-control:focus + .input-group-addon i {
  color: var(--ceara-green);
}

/* Estado hover */
.input-group:hover .input-group-addon,
.input-group:hover .form-control {
  border-color: var(--ceara-green);
}

/* Correção para garantir que não haja dupla borda */
.input-group .form-control:focus {
  border-left: none;
}

.input-group-addon:first-child {
  border-right: 0;
}


.footer-link {
    position: relative;
}

.footer-link::after {
    content: '';
    position: absolute;
    width: 0;
    height: 2px;
    bottom: -2px;
    left: 0;
    background-color: rgb(249, 115, 22); /* tailwind: orange-500 */
    transition: width 0.3s ease;
}

.footer-link:hover::after {
    width: 100%;
}

/* Media Queries - apenas se precisar de algo muito específico que o Tailwind não cubra */
@media (max-width: 640px) {
    .footer-title::after {
        left: 50%;
        transform: translateX(-50%);
    }
}


</style>
<body class="min-h-screen flex flex-col">
    <!-- Header/Navbar -->
    <header class="header-main">
        <nav class="nav-container">
            <div class="nav-content">
                <div class="logo-container">
                    <img src="assets/images/logosgtmPRETO.png" alt="Logo EEEP" class="logo-img">
                </div>
                
                <div class="nav-actions">
                    <button id="mobile-menu" class="mobile-menu-btn">
                        <span class="sr-only">Abrir menu</span>
                        <i class="fas fa-bars"></i>
                    </button>

                    <div class="nav-links">
                        <button 
                            id="modal-743975" 
                            href="#modal-container-743975" 
                            
                            class="login-button"
                            data-toggle="modal">
                            
                            ENTRAR
                        </button>
                    </div>
                </div>
            </div>
        </nav>
    </header>
<main class="flex-grow py-16 px-4 mt-20">
    <section class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            
            <!-- Enfermagem -->
            <div class="course-card h-[300px] relative overflow-hidden bg-white rounded-lg shadow-lg cursor-pointer group md:hover:cursor-pointer" onclick="toggleCard(this)">
                <div class="p-6 text-center front">
                    <i class="fas fa-user-nurse text-4xl text-ceara-green mb-4"></i>
                    <h3 class="text-4xl font-bold" style="font-size: 22px">ENFERMAGEM</h3>
                </div>
                <div class="absolute inset-0 bg-white p-6 transform translate-y-full md:group-hover:translate-y-0 transition-transform duration-300 ease-in-out back">
                    <div class="text-center">
                        <i class="fas fa-user-nurse text-4xl text-ceara-green mb-4"></i>
                        <h3 class="text-4xl font-bold mb-4" style="font-size: 22px">ENFERMAGEM</h3>
                        
                        <div class="flex flex-col items-center text-sm text-gray-500 mb-4" >
                            <span ><i style = "margin-left: -25px; position:relative; margin-top:10px;" class="fas fa-users mr-2"></i>Total Inscritos: 120</span>
                            <span ><i style = "margin-left: 1px; position:relative;margin-top:10px;" class="fas fa-home mr-2"></i>Cota Bairro Pública: 30</span>
                            <span><i style = "margin-left: 1px; position:relative;margin-top:10px;" class="fas fa-home mr-2"></i>Cota Bairro Privada: 20</span>
                            <span><i  style = "margin-left: 4px; position:relative;margin-top:10px;" class="fas fa-book mr-2"></i>Cota Escola Pública: 50</span>
                            <span><i  style = "margin-left: -97px; position:relative;margin-top:10px ; margin-right: 5px mr-2 " class="fas fa-wheelchair mr-2" ></i>PCD: 5</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Informática -->
            <div class="course-card h-[300px] relative overflow-hidden bg-white rounded-lg shadow-lg cursor-pointer group md:hover:cursor-pointer" onclick="toggleCard(this)">
                <div class="p-6 text-center front">
                    <i class="fas fa-laptop-code text-4xl text-ceara-green mb-4"></i>
                    <h3 class="text-4xl font-bold" style="font-size: 22px">INFORMÁTICA</h3>
                </div>
                <div class="absolute inset-0 bg-white p-6 transform translate-y-full md:group-hover:translate-y-0 transition-transform duration-300 ease-in-out back">
                    <div class="text-center">
                        <i class="fas fa-laptop-code text-4xl text-ceara-green mb-4"></i>
                        <h3 class="text-4xl font-bold mb-4" style="font-size: 22px">INFORMÁTICA</h3>
                    
                        <div class="flex flex-col items-center text-sm text-gray-500 mb-4" >
                            <span ><i style = "margin-left: -25px; position:relative; margin-top:10px;" class="fas fa-users mr-2"></i>Total Inscritos: 120</span>
                            <span ><i style = "margin-left: 1px; position:relative;margin-top:10px;" class="fas fa-home mr-2"></i>Cota Bairro Pública: 30</span>
                            <span><i style = "margin-left: 1px; position:relative;margin-top:10px;" class="fas fa-home mr-2"></i>Cota Bairro Privada: 20</span>
                            <span><i  style = "margin-left: 4px; position:relative;margin-top:10px;" class="fas fa-book mr-2"></i>Cota Escola Pública: 50</span>
                            <span><i  style = "margin-left: -95px; position:relative;margin-top:10px ;margin-right: 5px mr-2 " class="fas fa-wheelchair mr-2" ></i>PCD: 5</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Administração -->
            <div class="course-card h-[300px] relative overflow-hidden bg-white rounded-lg shadow-lg cursor-pointer group md:hover:cursor-pointer" onclick="toggleCard(this)">
                <div class="p-6 text-center front">
                    <i class="fas fa-briefcase text-4xl text-ceara-green mb-4"></i>
                    <h3 class="text-4xl font-bold" style="font-size: 22px">ADMINISTRAÇÃO</h3>
                </div>
                <div class="absolute inset-0 bg-white p-6 transform translate-y-full md:group-hover:translate-y-0 transition-transform duration-300 ease-in-out back">
                    <div class="text-center">
                        <i class="fas fa-briefcase text-4xl text-ceara-green mb-4"></i>
                        <h3 class="text-4xl font-bold mb-4" style="font-size: 22px">ADMINISTRAÇÃO</h3>
                      
                        <div class="flex flex-col items-center text-sm text-gray-500 mb-4" >
                            <span ><i style = "margin-left: -25px; position:relative; margin-top:10px;" class="fas fa-users mr-2"></i>Total Inscritos: 120</span>
                            <span ><i style = "margin-left: 1px; position:relative;margin-top:10px;" class="fas fa-home mr-2"></i>Cota Bairro Pública: 30</span>
                            <span><i style = "margin-left: 1px; position:relative;margin-top:10px;" class="fas fa-home mr-2"></i>Cota Bairro Privada: 20</span>
                            <span><i  style = "margin-left: 4px; position:relative;margin-top:10px;" class="fas fa-book mr-2"></i>Cota Escola Pública: 50</span>
                            <span><i  style = "margin-left: -95px; position:relative;margin-top:10px ;margin-right: 5px mr-2  " class="fas fa-wheelchair mr-2" ></i>PCD: 5</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Edificações -->
            <div class="course-card h-[300px] relative overflow-hidden bg-white rounded-lg shadow-lg cursor-pointer group md:hover:cursor-pointer" onclick="toggleCard(this)">
                <div class="p-6 text-center front">
                    <i class="fas fa-building text-4xl text-ceara-green mb-4"></i>
                    <h3 class="text-4xl font-bold" style="font-size: 22px">EDIFICAÇÕES</h3>
                </div>
                <div class="absolute inset-0 bg-white p-6 transform translate-y-full md:group-hover:translate-y-0 transition-transform duration-300 ease-in-out back">
                    <div class="text-center">
                        <i class="fas fa-building text-4xl text-ceara-green mb-4"></i>
                        <h3 class="text-4xl font-bold mb-4" style="font-size: 22px">EDIFICAÇÕES</h3>
                    
                        <div class="flex flex-col items-center text-sm text-gray-500 mb-4" >
                            <span ><i style = "margin-left: -25px; position:relative; margin-top:10px;" class="fas fa-users mr-2"></i>Total Inscritos: 120</span>
                            <span ><i style = "margin-left: 1px; position:relative;margin-top:10px;" class="fas fa-home mr-2"></i>Cota Bairro Pública: 30</span>
                            <span><i style = "margin-left: 1px; position:relative;margin-top:10px;" class="fas fa-home mr-2"></i>Cota Bairro Privada: 20</span>
                            <span><i  style = "margin-left: 4px; position:relative;margin-top:10px;" class="fas fa-book mr-2"></i>Cota Escola Pública: 50</span>
                            <span><i  style = "margin-left: -95px; position:relative;margin-top:10px ;margin-right: 5px mr-2  " class="fas fa-wheelchair mr-2" ></i>PCD: 5</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</main>
<script>
function toggleCard(card) {
    // Verifica se está em um dispositivo móvel
    if (window.innerWidth < 768) {
        // Fecha todos os outros cards
        document.querySelectorAll('.course-card .back').forEach(back => {
            if (back.parentElement !== card) {
                back.style.transform = 'translateY(100%)';
            }
        });

        // Toggle do card clicado
        const backContent = card.querySelector('.back');
        const currentTransform = backContent.style.transform;
        
        if (currentTransform === 'translateY(0%)') {
            backContent.style.transform = 'translateY(100%)';
        } else {
            backContent.style.transform = 'translateY(0%)';
        }
    }
}

// Fecha o card quando clicar fora dele (apenas mobile)
document.addEventListener('click', (e) => {
    if (window.innerWidth < 768 && !e.target.closest('.course-card')) {
        document.querySelectorAll('.course-card .back').forEach(back => {
            back.style.transform = 'translateY(100%)';
        });
    }
});

// Previne que o clique nos links propague para o card
document.querySelectorAll('.course-card a').forEach(link => {
    link.addEventListener('click', (e) => {
        e.stopPropagation();
    }); 
});
</script>
<footer class=" text-white font-sans w-full mt-auto py-6" style="background-color: #008C45">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-8">
            <!-- Identificação Institucional -->
            <div class="p-2">
                <h4 class="text-orange-400 text-xl font-bold mb-4 relative after:content-[''] after:absolute after:left-0 after:bottom-[-8px] after:w-8 after:h-0.5 after:bg-orange-400 hover:after:w-10 after:transition-all">
                    SEEPS
                </h4>
                <p class="text-sm leading-relaxed mb-4">
                    Sistema de Ensino e Educação Profissional Salaberga
                </p>
                <div class="flex gap-4">
                    <a href="#" class="w-9 h-9 bg-white/10 rounded-full flex items-center justify-center transition-all hover:bg-orange-400 hover:-translate-y-1 hover:shadow-lg hover:shadow-orange-400/30">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="#" class="w-9 h-9 bg-white/10 rounded-full flex items-center justify-center transition-all hover:bg-orange-400 hover:-translate-y-1 hover:shadow-lg hover:shadow-orange-400/30">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="w-9 h-9 bg-white/10 rounded-full flex items-center justify-center transition-all hover:bg-orange-400 hover:-translate-y-1 hover:shadow-lg hover:shadow-orange-400/30">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </div>
            </div>

            <!-- Informações do Sistema -->
            <div class="p-2">
                <h4 class="text-orange-400 text-xl font-bold mb-4 relative after:content-[''] after:absolute after:left-0 after:bottom-[-8px] after:w-8 after:h-0.5 after:bg-orange-400 hover:after:w-10 after:transition-all">
                    SISTEMA
                </h4>
                <ul class="space-y-3">
                    <li>
                        <a href="#" class="text-sm relative inline-block transition-all hover:text-orange-400 hover:pl-3 before:content-[''] before:absolute before:left-0 before:bottom-[-2px] before:w-0 before:h-0.5 before:bg-orange-400 hover:before:w-full before:transition-all">
                            Sobre
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-sm relative inline-block transition-all hover:text-orange-400 hover:pl-3 before:content-[''] before:absolute before:left-0 before:bottom-[-2px] before:w-0 before:h-0.5 before:bg-orange-400 hover:before:w-full before:transition-all">
                            Documentação
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-sm relative inline-block transition-all hover:text-orange-400 hover:pl-3 before:content-[''] before:absolute before:left-0 before:bottom-[-2px] before:w-0 before:h-0.5 before:bg-orange-400 hover:before:w-full before:transition-all">
                            Requisitos
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Contato -->
            <div class="p-2">
                <h4 class="text-orange-400 text-xl font-bold mb-4 relative after:content-[''] after:absolute after:left-0 after:bottom-[-8px] after:w-8 after:h-0.5 after:bg-orange-400 hover:after:w-10 after:transition-all">
                    CONTATO
                </h4>
                <div class="space-y-3">
                    <p class="flex items-center text-sm transition-all hover:translate-x-1 group">
                        <i class="fas fa-envelope text-orange-400 mr-3 transition-all group-hover:scale-110 group-hover:text-orange-400"></i>
                        otavio.filho@aluno.uece.br
                    </p>
                    <p class="flex items-center text-sm transition-all hover:translate-x-1 group">
                        <i class="fas fa-map-marker-alt text-orange-400 mr-3 transition-all group-hover:scale-110 group-hover:text-orange-400"></i>
                        Rua Tenente Roma, 300
                    </p>
                </div>
            </div>
        </div>
        
        <!-- Copyright -->
        <div class="border-t border-white/10 pt-4 text-center text-sm">
            <p>&copy; 2024 SEEPS - Todos os direitos reservados</p>
        </div>
    </div>
</footer>
    <!-- Scripts -->
    <script src="../seeps2024/assets/theme/js/main.js"></script>
</body>
</html>