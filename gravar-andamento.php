<?php 
 include_once "autenticacao.php";  

include_once "conexao.php";

$id = $_GET["id"];
$nome = $_GET["nome"];
$status = $_GET["status"];
$texto = $_GET["texto"];


$sql = "UPDATE pendencias set  nome='".$nome."', status='".$status."', texto='".$texto."' where id_contrato ='".$id."'";



if(!mysqli_query($con, $sql)){

	$msg = "Erro! Entre em contato com a equipe de suporte."; 



?>

	<script>
		alert('<?php echo $msg; ?>');

    location.href="andamento.php?id=<?php echo $id; ?>&nome=<?php echo $nome; ?>"; //redirecionamento em JS
</script>


<?php
}else{
	$msg = "Status declarado com sucesso!"; 

	?>
	<script>
		alert('<?php echo $msg; ?>');

    location.href="operacional.php"; //redirecionamento em JS
</script>


<?php
}


?>



