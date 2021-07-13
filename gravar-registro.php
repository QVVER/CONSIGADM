<?php

//recebe

$nome = ucwords($_POST["nomecliente"]);
$cpf = $_POST["cpf"];
$telefone = $_POST["telefone"];
$celular = $_POST["celular"];
$ag = $_POST["ag"];
$conta = $_POST["conta"];
$orgao = ucwords($_POST["orgao"]);
$banco = $_POST["banco"];
$dataparcela = $_POST["dataparcela"];
$valorcessao = $_POST["valorcessao"];
$bancoproposta = $_POST["bancoproposta"];
$datacessao = $_POST["datacessao"];
$prazocessao = $_POST["prazocessao"];
$equipe = $_POST["equipe"];
$consultor = $_POST["funcionario"];

$dataparcela = explode("/",$dataparcela); //[dd][mm][aaaa]
$dataparcela = array_reverse($dataparcela); //[aaaa][mm][dd]
$dataparcela = implode("-",$dataparcela); //aaaa-mm-dd

$datacessao = explode("/",$datacessao); //[dd][mm][aaaa]
$datacessao = array_reverse($datacessao); //[aaaa][mm][dd]
$datacessao = implode("-",$datacessao); //aaaa-mm-dd



include 'conexao.php';

$sql = "insert into registro values(null, '".$nome."', '".$cpf."', '".$telefone."', '".$celular."', '".$ag."', '".$conta."' ,'".$orgao."', '".$banco."', '".$dataparcela."', '".$valorcessao."', '".$bancoproposta."','".$datacessao."','".$prazocessao."', '".$equipe."', '".$consultor."');";



 
$sql2 = "insert into registronaohigienizado values(null, '".$nome."', '".$cpf."', '".$telefone."', '".$celular."', '".$ag."', '".$conta."' ,'".$orgao."', '".$banco."',
'".$dataparcela."', '".$valorcessao."', '".$bancoproposta."','".$datacessao."','".$prazocessao."', '".$equipe."', '".$consultor."');";



$result2 = mysqli_query($con, $sql2); // transportando dado de registro para outra tabela(tabela não higienizada)



if(mysqli_query($con,$sql)){
        $msg = "Salvo! Prossiga."; 
        ?>

        <script>
        alert('<?php echo $msg; ?>');
        location.href="visita.php"; //redirecionamento em JS
    </script>

    <?php               

}else{
    $msg = "Erro! Insira os dados novamente, antes de entrar em contato com o desenvolvedor.";
    ?>
    <script>
    alert('<?php echo $msg; ?>');
    location.href="registro.php"; //redirecionamento em JS
    </script>

    <?php

}

?>