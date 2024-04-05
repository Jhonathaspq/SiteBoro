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
                    <legend><b>Cadastro de Carro</b></legend>
                    <br>
                    <div class="inputBox">
                        <input type="text" name="marca" id="marca" class="inputUser" required>
                        <label for="marca" class="labelInput">Marca: </label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="modelo" id="modelo" class="inputUser" required>
                        <label for="modelo" class="labelInput">Modelo: </label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="textano" name="ano" id="ano" class="inputUser" required>
                        <label for="ano" class="labelInput">Ano: </label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="placa" id="placa" class="inputUser" required>
                        <label for="placa" class="labelInput">Placa</label>
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
</body>

</html>