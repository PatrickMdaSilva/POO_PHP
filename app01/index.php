<?php
require_once ("classes/atividade.php");
require_once ("classes/pessoa.php");
require_once ("classes/uploadFoto.php");

$pessoa = new Pessoa;

$pessoa->idade = 35;
$pessoa->nome = "Patrick";
$pessoa->email = "patrick15k@hotmail.com";
echo $pessoa->dados();
echo "<br>";


$pessoa->idade = 30;
$pessoa->nome = "Julia";
$pessoa->email = "juliadesfernandes@hotmail.com";
echo $pessoa->dados();
echo "<br>";

$atividadePessoa = new AtividadePessoa;

echo $atividadePessoa->pular();
echo "<br>";
echo $atividadePessoa->andar();
echo "<br>";

$upload = new UploadFoto;
$upload->file('foto.png');
$upload->extension();
$upload->rename();
echo $upload->upload();