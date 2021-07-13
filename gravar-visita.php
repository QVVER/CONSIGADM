<?php


#receber dados consultor, equipe e quantidade de visitas
#fazer um insert into

#depois fazer um count
$cliente = $_POST["cliente"];
$endereco = $_POST["endereco"];
$margem = $_POST["margem"];
$tipo = $_POST["tipo"];


$consultor = $_POST["funcionario"];
$semana = $_POST["semana"];
$qtd = $_POST["qtd"];
$equipe = $_POST["equipe"];
$data = $_POST['data'];




include 'conexao.php';
$sql1 = "insert into relvisitas values( null, '".$cliente."', '".$endereco."', '".$margem."', '".$tipo."','".$consultor."','".$equipe."','".$data."')";

$result = mysqli_query($con,$sql1);

$sql = "insert into visitas values( null, '".$consultor."', '".$semana."', '".$qtd."', '".$equipe."', '".$data."')";



if(mysqli_query($con,$sql)){
    $msg = "Salvo! Prossiga."; 
    ?>

    <script>
    alert('<?php echo $msg; ?>');
    location.href="menu.php"; //redirecionamento em JS
</script>

<?php               

}else{
$msg = "Erro! Insira os dados novamente, antes de entrar em contato com o desenvolvedor.";
?>
<script>
alert('<?php echo $msg; ?>');
location.href="visita.php"; //redirecionamento em JS
</script>

<?php

}
?>