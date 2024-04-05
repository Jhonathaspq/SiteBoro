<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="cliente.css">

</head>

<body>
    <div class="container">
    <div class="navbar-container">
            <nav>
                <a href="../site/index.php">
                    <img src="../img/IMG_1155.JPG" alt="logo garagem33" class="logo">
                </a>
                <ul class="navbar-itens">
                    <li>
                        <a href="../site/index.php">Home</a>
                    </li>
                    <li>
                        <a href="../site/cliente.php">Cadastro de Clientes</a>
                    </li>
                    <li>
                        <a href="../site/contatos.php">Contatos</a>
                    </li>
                    <li>
                        <a href="../site/login.php" class="default-btn">Entrar</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="box">
            <form action="">
                <fieldset>
                    <legend><b>Login</b></legend>
                    <br>
                    <div class="inputBox">
                        <input type="text" name="cod" id="cod" class="inputUser" required>
                        <label for="nome" class="labelInput">ID: </label>
                    </div>
                    <br><br>
                    <!-- <div class="inputBox">
                        <input type="text" name="email" id="email" class="inputUser" required>
                        <label for="email" class="labelInput">Email</label>
                    </div> -->
                    <!-- <br><br> -->
                    <!-- <div class="inputBox">
                        <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                        <label for="telefone" class="labelInput">Telefone</label>
                    </div><br><br> -->
                    <!-- <p>Sexo:</p>
                    <input type="radio" id="feminino" name="genero" value="feminino" required>
                    <label for="feminino">Feminino</label>
                    <br>
                    <input type="radio" id="masculino" name="genero" value="masculino" required>
                    <label for="masculino">Masculino</label>
                    <br>
                    <input type="radio" id="outro" name="genero" value="outro" required>
                    <label for="outro">Outro</label>
                    <br><br>
                    <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" required>
                    <br><br><br> -->
                    <!-- <div class="inputBox">
                        <input type="text" name="cidade" id="cidade" class="inputUser" required>
                        <label for="cidade" class="labelInput">Cidade</label>
                    </div>
                    <br><br><br>
                    <div class="inputBox">
                        <input type="text" name="estado" id="estado" class="inputUser" required>
                        <label for="estado" class="labelInput">Estado</label>
                    </div>
                    <br><br> -->
                    <div class="inputBox">
                        <input type="password" name="senha" id="senha" class="inputUser" required>
                        <label for="endereco" class="labelInput">Senha: </label>
                    </div>
                    <br><br>                    
                    <input type="submit" name="submit" id="submit">
                </fieldset>
            </form>
        </div>
    </div>
    <div>
      <footer class="fixarRodape">@Garagem33</footer>
  </div>
  <div>
    <footer class="fixarRodape">@Garagem33</footer>
</div>
</body>
</html>