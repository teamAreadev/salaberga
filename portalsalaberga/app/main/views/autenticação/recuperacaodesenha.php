<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperação de Senha | EEEP Salaberga</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="shortcut icon" href="img\Design sem nome.svg" type="image/x-icon">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');

        :root {
            --primary-color: #4CAF50;
            --secondary-color: #FFB74D;
            --text-color: #333333;
            --bg-color: #F0F2F5;
            --input-bg: #FFFFFF;
            --shadow-color: rgba(0, 0, 0, 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: var(--text-color);
        }

        .main-container {
            display: flex;
            width: 100%;
            max-width: 900px;
            height: 550px;
            background-color: var(--bg-color);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 40px var(--shadow-color);
        }

        .image-container {
            flex: 1;
            background: linear-gradient(40deg, #007A33, #FF8C00);
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .image-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(0, 0, 0, 0.366), rgba(0, 0, 0, 0.355));
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 2rem;
            text-align: center;
            color: #FFFFFF;
        }

        .image-overlay h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .image-overlay p {
            font-size: 1rem;
            max-width: 80%;
        }

        .form-container {
            flex: 1;
            padding: 2.5rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background-color: #FFFFFF;
        }

        .logo-container {
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .logo {
            width: 150px;
            height: auto;
        }

        h2 {
            text-align: center;
            color: var(--primary-color);
            margin-bottom: 1.5rem;
            font-weight: 700;
            font-size: 2rem;
            letter-spacing: 1px;
        }

        .input-group {
            position: relative;
            margin-bottom: 1.5rem;
        }

        .input-group input {
            width: 100%;
            padding: 12px 20px;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background-color: var(--input-bg);
            color: var(--text-color);
        }

        .input-group input:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 4px rgba(76, 175, 80, 0.1);
        }

        .input-group label {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
            font-size: 1rem;
            transition: all 0.3s ease;
            pointer-events: none;
            padding: 0 5px;
            background-color: var(--input-bg);
        }

        .input-group input:focus+label,
        .input-group input:not(:placeholder-shown)+label {
            top: 0;
            font-size: 0.8rem;
            color: var(--primary-color);
        }

        .input-group i {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--primary-color);
            font-size: 1.2rem;
            cursor: pointer;
        }

        .btn-confirmar {
            width: 100%;
            padding: 12px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: #FFFFFF;
            border: none;
            border-radius: 10px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 4px 6px var(--shadow-color);
        }

        .btn-confirmar:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px var(--shadow-color);
        }

        .back-to-login {
            text-align: center;
            margin-top: 1rem;
        }

        .back-to-login a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 600;
        }

        .back-to-login a:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .main-container {
                flex-direction: column;
                height: auto;
                max-width: calc(100% - 2rem);
                /* Add margin on both sides */
                margin: 1rem;
                /* Add margin around the container */
                border-radius: 20px;
                /* Maintain border radius on mobile */
            }

            .image-container {
                height: 200px;
            }

            .form-container {
                padding: 2rem;
            }

            .image-container,
            .logo-container {
                display: none;
            }
        }
    </style>
</head>

<body>
    <div class="main-container">
        <div class="image-container">
            <div class="image-overlay">
                <h1>EEEP Salaberga</h1>
                <p>Transformando o futuro através da educação e inovação</p>
            </div>
        </div>
        <div class="form-container">
            <div class="logo-container">
                <img src="https://i.postimg.cc/ryxHRNkj/lavosier-nas-2.png" alt="Logo EEEP Salaberga" class="logo">
            </div>
            <h2>Recuperação de Senha</h2>
            <form id="recuperacaoForm" action="../../controllers/controller_recsenha/controller_recSenha.php" method="post">
                <div class="input-group">
                    <input type="email" name="Email" id="email" placeholder=" " required>
                    <label for="email">Email institucional</label>
                    <i class="fas fa-envelope"></i>
                </div>

                <?php
                if (isset($_GET['login']) && $_GET['login'] == 'erro' ) {
                ?>

                    <div class="texto">
                        Você já recuperou a senha recentemente. </br>
                        Tente novamente mais tarde.
                    </div>
                    <style>
                        .texto {
                            color: red;
                        }
                    </style>

                <?php
                }
                ?>

                <button type="submit" class="btn-confirmar" name="recsenha">Enviar link de recuperação</button>
            </form>
            <div class="back-to-login">
                <a href="recusenha.html">Voltar para o login</a>
            </div>
        </div>
    </div>
</body>

</html>