<?php

include 'conexao.php';

$cliente = $_POST["cliente"];

$valor = $_POST["valor"];

$banco = $_POST["banco"];

$responsavel = $_POST["responsavel"];

$data = $_POST["data"];

$equipe = $_POST["equipe"];





$data = explode("/",$data); //[dd][mm][aaaa]
$data = array_reverse($data); //[aaaa][mm][dd]
$data = implode("-",$data); //aaaa-mm-dd








$sql = "INSERT INTO projecao VALUES(NULL, '".$cliente."','".$valor."','".$data."','".$responsavel."','".$equipe."', '".$banco."')";



$result = mysqli_query($con,$sql);

if($result){
        $msg =  "Projeção enviada com sucesso."; ?>
        <script>
        alert('<?php echo $msg; ?>');
        location.href="projecao.php"; //redirecionamento em JS
    </script>

    <?php
    }else{
        $msg =  "Erro! Revise seus dados.";?>
        <script>
        alert('<?php echo $msg; ?>');
        location.href="projecao.php"; //redirecionamento em JS
    </script>

 <?php

        
    }
    
?>



