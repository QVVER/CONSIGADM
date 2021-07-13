<?php

include 'conexao.php';

$id =$_POST['id'];
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



$sql = "UPDATE operacional SET nome='".$nome."', cpf='".$cpf."', rg='".$rg."', emissor='".$emissor."', expedicao='".$expedicao."', nascimento='".$nascimento."', civil='".$civil."', profissao='".$profissao."', orgao='".$orgao."', upag='".$upag."', situacao='".$situacao."', equipe='".$equipe."', endereco='".$endereco."',bairro='".$bairro."', cidade='".$cidade."', uf='".$uf."', cep='".$cep."', email='".$email."', fone1='".$fone1."', fone2='".$fone2."', fixo='".$fixo."', mae='".$mae."', pai='".$pai."', naturalidade='".$natural."', nacionalidade='".$nacionalidade."', matricula='".$matricula."', operacao='".$operacao."', margem='".$margem."', parcela='".$parcela."', fator='".$fator."', liquido='".$liquido."', banco='".$banco."', prazo='".$prazo."', data='".$hoje."' where id ='".$id."'";



if(!mysqli_query($con, $sql)){

	$msg = "Erro! Por favor, revise os dados aqui digitados."; 



?>

	<script>
		alert('<?php echo $msg; ?>');

    location.href="acompanhar-proposta.php"; //redirecionamento em JS
</script>


<?php
}else{
		$msg = "Dados atualizados com sucesso. Favor, retirar pendencia."; 

	?>
	<script>
alert('<?php echo $msg; ?>');
    location.href="acompanhar-proposta.php"; //redirecionamento em JS
</script>


<?php
}


?>