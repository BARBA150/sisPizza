<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <title>Banco de dados</title>
    <script src="dados.js"></script>
    <link rel="stylesheet" href="./cadastro.css">


 
</head>

<body>

    <b>
        <h1>Cadastro</h1>
    </b>
    <form action="dados.php" method="post" name="form1">



        <table align="right" class="piz">
            <tr>
                <td>


                    <legend style="text-align: center;"><b>Cadastre-se</b></legend>

                    <label for="nome" class="labelet"><b>Nome:</b></label><br>
                    <input type="text" placeholder="Nome" required id="nome" name="nome" class="cont"><br><br>

                    <label for="endereco" class="labelet"><b>Endereço:</b></label><br>
                    <input type="text" placeholder="Informe o Endereço" required id="endereco" name="endereco" class="cont"><br><br>

                    <label for="email" class="labelet"><b>E-mail:</b></label><br>
                    <input type="email" placeholder="exemplo@exemplo.com" name="email" id="email" class="cont"><br><br>

                    <label for="tel" class="labelet"><b>Telefone:</b></label><br>
                    <input type="tel" required size="15" maxlength="15" placeholder="(00) 01234-5678" name="telefone" id="telefone" class="cont"><br><br>

                    <label for="cpf" class="labelet"><b>CPF:</b></label><br>
                    <input type="cpf" name="cpf" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" required size="14" maxlength="14" placeholder="xxx.xxx.xxx-xx" name="cpf" id="cpf" class="cont"><br><br>
                    
                    <label for="rg" class="labelet"><b>RG:</b></label><br>
                    <input type="rg" name="rg" pattern="\d{2}\.\d{3}\.\d{3}-\d{2}" required size="13" maxlength="13" placeholder="xx.xxx.xxx-xx" name="rg" id="rg" class="cont"><br><br>
                    
                    <label for="data_nascimento"><b>Data de Nascimento:</b></label><br>
                    <input type="date" name="data_nascimento" id="data_nascimento"><br><br>
                    
                    <p><b>Sexo:</b></p>
                    <input name="sexo" type="radio" value="M">
                    <label for="sexo"><b>Masculino</b></label><br>
                    <input name="sexo" type="radio" value="F">
                    <label for="sexo"><b>Feminino</b></label><br><br>
                    
                    <label for="password"><b>Senha:</b></label><br>
                    <input type="password" name="password" id="password" class="cont" ><br><br>
                    
                    <input type="submit" onclick="javascript:validar();" value="Salvar" class="btSave" id="submit"><br><br>
                   <div class="btBack" ><a href="./login.php" style="text-decoration: none;">Voltar</a></div>
                
                </td>
            </tr>
        </table>

    </form>
</body>

</html>