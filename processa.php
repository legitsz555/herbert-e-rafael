<?php

session_start();
$nome=filter_input (input-post,'campo_nome',Filter_santize_string);
$email=filter_input(input-post,'campo_nome',Filter_santize_string);
$telefone=filter_input(input_post,'campo_fone',Filter_santize_string);

$result="insert into cadastro (nome,email,telefone)values('$nome','$email','telefone')";
$resultado=mysql_query($con,$result);
?><form action="processa.php" method="post">
<input type="submit" values="cadastrar">


</form>