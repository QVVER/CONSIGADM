<?php

include 'conexao.php';

$sql= "DELETE FROM  visitas";
$sql1= "DELETE FROM  registro";

$sql2= "DELETE FROM  metas";
$sql3= "DELETE FROM  projecao";


if(mysqli_query($con,$sql)){
    mysqli_query($con,$sql1);
    mysqli_query($con,$sql2);
    mysqli_query($con,$sql3);

    $msg = "Dados de visitas e produçao higienizado com sucesso!";
    ?>
    <script>
    alert('<?php echo $msg; ?>');
    location.href="menu-acompanhar.php"; //redirecionamento em JS
</script>
<?php

}else{ 
    $msg = "Erro ao higienizar!"
    ?>
    <script>
    alert('<?php echo $msg; ?>');
    location.href="menu-acompanhar.php"; //redirecionamento em JS
</script>
<?php

}




?>