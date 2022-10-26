<?php

require ("conexao.php");

if (isset($_POST["email"]) && isset($_POST["senha"]) && $conexao != null){
    $query = $conexao->prepare("SELECT users WHERE email = ? AND senha = ?");
    $conexao->execute(array($_POST))
}else {

}