<?php
$id = $_GET['id'];
include 'conexao.php';
$sql = "Delete from relvisitas where id = '".$id."'";

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
location.href="visita.php"; //redirecionamento em JS
</script>

?>