<?php

include 'conexao.php';


$nome =$_POST['nome'];
$cpf =$_POST['cpf'];
$rg =$_POST["rg"];
$emissor =$_POST["emissor"];
$expedicao =$_POST["expedicao"];
$nascimento   	=   $_POST["nascimento"];

$civil   		=   $_POST["civil"];
$profissao   	=   $_POST["profissao"];
$orgao   		=   $_POST["orgao"];
$upag   		=   $_POST["upag"];
$situacao   	=   $_POST["situacao"];

$equipe   		=   $_POST["equipe"];
$endereco   	=   $_POST["endereco"];
$bairro   		=   $_POST["bairro"];
$cidade   		=   $_POST["cidade"];
$uf   			=   $_POST["uf"];
$cep   			=   $_POST["cep"];


$email   		=   $_POST["email"];
$fone1   		=   $_POST["fone1"];
$fone2   		=   $_POST["fone2"];
$fixo   		=   $_POST["fixo"];

$mae   			=   $_POST["mae"];
$pai   			=   $_POST["pai"];
$natural   		=   $_POST["natural"];
$nacionalidade  =   $_POST["nacionalidade"];

$matricula   	=   $_POST["matricula"];
$operacao   	=   $_POST["operacao"];
$margem   		=   $_POST["margem"];
$parcela   		=   $_POST["parcela"];
$fator   		=   $_POST["fator"];
$liquido   		=   $_POST["liquido"];
$banco   		=   $_POST["banco"];
$prazo   		=   $_POST["prazo"];

date_default_timezone_set('America/Sao_Paulo');

$hoje = date("H:i:s ... d/m/y");               



$sql = "INSERT INTO operacional VALUES(NULL,'".$nome."', '".$cpf."','".$rg."','".$emissor."',
'".$expedicao."','".$nascimento."','".$civil."','".$profissao."','".$orgao."','".$upag."','".$situacao."',
'".$equipe."','".$endereco."','".$bairro."','".$cidade."','".$uf."','".$cep."','".$email."','".$fone1."',
'".$fone2."','".$fixo."','".$mae."','".$pai."','".$nacionalidade."','".$natural."','".$matricula."',
'".$operacao."','".$margem."','".$parcela."','".$fator."','".$liquido."','".$banco."','".$prazo."','".$hoje."')";



if(!mysqli_query($con, $sql)){

	$msg = "Erro! Por favor, revise os dados aqui digitados."; 



?>

	<script>
		alert('<?php echo $msg; ?>');

    location.href="digitar.php"; //redirecionamento em JS
</script>


<?php
}else{
	$sql2 = "SELECT MAX(id) FROM operacional";
	$aa = mysqli_query($con, $sql2);
	$row = mysqli_fetch_array($aa);

	$sql1 = "INSERT INTO pendencias VALUES(null, '".$row['0']."', '".$nome."','Em andamento',' ')";

		mysqli_query($con, $sql1);


	?>
	<script>

    location.href="maisdocs.php"; //redirecionamento em JS
</script>


<?php
}


?>