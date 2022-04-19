<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Banco de dados</title>
    <link rel="stylesheet" href="./login.css">

    
</head>
<body>
    <div class="box">
        <form action="" method="POST" name="login">
             <fieldset>
                <legend><b>Login</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">E-mail</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="password" id="password" class="inputUser" required>
                    <label for="password" class="labelInput">Senha</label>
                </div>
                <br><br>                
            
                <p class="text-center">Ao se inscrever você aceita nosso <a href="#">Termos de uso</a></p>
                <input type="submit" name="submit" id="submit" value="Entrar">

                <p class="text-center">Não tem conta?<a href="./cadastro.php" id="signup" target="_blank">Clique aqui</a></p>
                
            </fieldset>
        </form>
    </div>
</body>
</html>