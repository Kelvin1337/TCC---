<?php 

    if(isset($_POST['submit']))
    {
        print_r ($_POST['nome']);
        print_r ($_POST['email']);
        print_r ($_POST['telefone']);
        print_r ($_POST['password']);
        print_r ($_POST['cor']);
        print_r ($_POST['modelo']);
        print_r ($_POST['placa']);
    }

    if (isset($_GET['erro'])) {
        echo "<p style='color:red;'>RA ou senha inválidos</p>";
    }

?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do(a) Aluno(a) - Login</title>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="form-box login">
            <form action="login.php" method="POST">
               
               <!-- Titulo -->
                <h1>Área do(a) Aluno(a)</h1>
                <div class="input-box">
                    <input type="text" name = "RA" placeholder="RA (número de matrícula)" required>
                    <i class="bx bxs-user"></i>
                </div>

                <!-- Campo de dados -->
                <div class="input-box">
                    <input type="password" name = "password" placeholder="Senha" required>
                    <i class="bx bxs-lock-alt"></i>
                </div>
                <div class="forgot-link">
                    <a href="/Esqueceu a senha/forgotpassword.html">Esqueceu a senha?</a>
                </div>
                <button type="submit" class="btn">Login</button>
            </form>
        </div>

        <div class="form-box register">
            <form action="cadastro.php" method="POST">
                <!-- Titulo -->
                <h1>Registre-se</h1>
                
                <!-- Campos -->
                <div class="input-box">
                    <input type="text" name = "nome" placeholder="Nome" required>
                    <i class='bx bx-user' ></i>
                </div>
                
                <div class="input-box">
                    <input type="text" name = "RA" placeholder="RA (número de matrícula)" required>
                    <i class='bx bxs-user-badge'></i>
                </div>

                <div class="input-box">
                    <input type="email"  name = "email" placeholder="Email" required>
                    <i class="bx bxs-envelope"></i>
                </div>
                
                <div class="input-box">
                    <input type="password" name = "password" placeholder="Senha" required>
                    <i class="bx bxs-lock-alt"></i>
                </div>

                <!-- <div class="input-box">
                    <input type="text" name = "cor" placeholder="Cor do carro" required>
                    <i class='bx bx-car'></i>
                </div>
                
                <div class="input-box">
                    <input type="text" name = "modelo" placeholder="Modelo do carro" required>
                    <i class="fal fa-car-alt"></i>
                </div>

                <div class="input-box">
                    <input type="text" name = "placa" placeholder="Placa do carro" required>
                </div>
                 -->
                <div class="input-box checkbox-box">
                    <input type="checkbox" id="terms" required>
                    <label for="terms">Li e concordo com os <a href="termos/termos.html" target="_blank">termos de uso</a>
                    </label>
                </div>
               <!--  Esqueceu a senha
                <div class="forgot-link">
                    <a href="/Esqueceu a senha/forgotpassword.html">Esqueceu a senha?</a>
                </div> -->
                 <button type="submit" class="btn">Registrar</button>
            </form>
        </div>  

        <div class="toggle-box">
            <div class="toggle-panel toggle-left">
                <h1>Olá, seja bem-vindo!</h1>
                <p>Não tem uma conta?</p>
                <button class="btn register-btn">Registre-se</button>
            </div>

            <div class="toggle-panel toggle-right">
                <h1>Bem-vindo de volta!</h1>
                <p>Já tem uma conta?</p>
                <button class="btn login-btn">Logue-se</button>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
