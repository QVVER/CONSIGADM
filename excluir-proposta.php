<?php
$id = $_GET['id'];
include 'conexao.php';
$sql = "Delete from operacional where id = '".$id."'";
$sql1 = "Delete from arquivosoperacional where id = '".$id."'";
$sql2 = "Delete from pendencias where id = '".$id."'";

if(mysqli_query($con,$sql)){
    $msg = "Dados excluídos com sucesso!";
}else{
    $msg = "Erro ao excluir dados!";
}

if(mysqli_query($con,$sql1)){
    $msg1 = "Arquivos excluídos com sucesso!";
}else{
    $msg1 = "Erro ao excluir arquivos!";
}

if(mysqli_query($con,$sql2)){
    $msg2 = "Pendencias excluídos com sucesso!";
}else{
    $msg2 = "Erro ao excluir arquivos!";
}

//5- Fechar a conexao
mysqli_close($con);
?>


<script>
alert('<?php echo $msg  ; echo $msg1   ; echo $msg2; ?>');
location.href="operacional.php"; //redirecionamento em JS
</script>
