<?php include 'conexao.php';



$sql = "SELECT * FROM registro
WHERE id = (select max(id) from registro)";

$result = mysqli_query($con, $sql);
$row = mysqli_num_rows($result);

if($row > 0){
$total = mysqli_fetch_array($result);

$ultimocliente = $total['nome'];
$ultimovalor = 'R$'.number_format($total['valorcessao'], 2, ',', '.');
$ultimaequipe = $total['equipe'];


}else{

    $ultimocliente = "Não possui um último cliente";
    $ultimovalor = "Não possui um último valor";
    $ultimaequipe = "Nenhuma equipe produziu.";
} 




//SELECT SUM(valorcessao) FROM registros WHERE equipe=[insiraequipe];//


?>