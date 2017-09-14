<?php
//BUSCANDO A CLASSE
require_once 'classe/Funcoes.class.php';
//ESTANCIANDO A CLASSE
$objFc = new Funcoes();
if(isset($_POST['btEnviar'])){
	$objFc->enviarEmail($_POST);
}

?>
<!DOCTYPE HTML>
<html lang="pt=br">
<head>
	<meta charset="utf-8">
	<title>Formul�rio de Contato</title>
    <link href="css/estilo.css" rel="stylesheet" type="text/css" media="all">
</head>
<body>
<form action="" method="post">
    <label>Nome:</label><br>
    <input type="text" name="nome" required="required"><br>
    <label>E-mailIdade:</label><br>
    
    <input type="text" name="Idade" required="required"><br>
    <label>Área de Interesse de Atuação:</label><br>
    
    <input type="text" name="Área de Interesse de Atuação" required="required"><br>
    <label>Sexo:</label><br>
    
    <input type="text" name="Sexo" required="required"><br>
    <label>Estado Civil:</label><br>
    
    <input type="text" name="Estado Civil" required="required"><br>
    <label>E-mail:</label><br>
    
    <input type="email" name="email" required="required" pattern="^[a-z0-9._-]{2,}@[a-z0-9-]{2,}.[a-z.]{2,}$"><br>
    <label>Pretensão de Salário:</label><br>
    
    <input type="text" name="Pretensão de Salário" required="required"><br>
    <label>Fumante:</label><br>
    
    <input type="text" name="Fumante" required="required"><br>
    <label>Endereço Completo:</label><br>
    
    <input type="text" name="Endereço Completo" required="required"><br>
    <label>Telefone Celular:</label><br>
    
    <input type="text" name="Telefone Celular" required="required"><br>
    <label>Telefone Residencial:</label><br>
    
    <input type="text" name="Telefone Residencial" required="required"><br>
    <label>Formação:</label><br>
    
    <input type="text" name="Formação" required="required"><br>
    <label>Conhecimentos em Informatica:</label><br>
    
    <input type="text" name="Conhecimentos em Informatica" required="required"><br>
    <label>Experiências Profissionais:</label><br>
    
    <input type="text" name="Experiências Profissionais" required="required"><br>
    <label>Características Pessoais:</label><br>
    
    <input type="text" name="Características Pessoais" required="required"><br>
    <label>Características Profissionais:</label><br>
    
    <input type="text" name="Características Profissionais" required="required"><br>
    <input type="submit" name="btEnviar" value="Enviar">    
</form>
</body>
</html>
