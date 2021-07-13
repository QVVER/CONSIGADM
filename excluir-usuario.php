<?php
$iduser = $_GET['iduser'];
include 'conexao.php';
$sql = "Delete from conta where iduser = '".$iduser."'";

if(mysqli_query($con,$sql)){
    $msg = "Excluído com sucesso!";
}else{
    $msg = "Erro ao excluir!";
}

//5- Fechar a conexao
mysqli_close($con);
?>


<script>
alert('<?php echo $msg; ?>');
location.href="consultar-usuario.php"; //redirecionamento em JS
</script>
