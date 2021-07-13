<?php

    $cod = $_GET["cod"];

include 'conexao.php';
    $sql = "DELETE FROM funcionarios WHERE id = '".$cod."'";

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
    location.href="pesquisa-funcionarios.php"; //redirecionamento em JS
</script>