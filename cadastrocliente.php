<?php
$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$endereco = $_POST["endereco"];

echo "Nome: $nome" . '<br>';
echo "Telefone: $telefone" . '<br>';
echo "Cidade: $cidade" . '<br>';
echo "Estado: $estado" . '<br>';
echo "Endereço: $endereco";
