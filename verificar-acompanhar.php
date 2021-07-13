
<?php
$nome = $_POST["consultor"];

include 'conexao.php';
$sql = "SELECT (id) FROM visitas WHERE consultor='".$nome."'";
//$sql = "SELECT COUNT(consultor) AS qtdvisitas FROM visitas WHERE consultor='".$nome."'";

if($result = mysqli_query($con,$sql)){
$row = mysqli_num_rows($result);
echo $row;

}else{

}
 
?>
