<?php


 

    $nomefuncionario = $_POST["nomefuncionario"];
    $equipe = $_POST["equipe"];
    $cargo = $_POST["cargo"]; //idcargo
    $quadro = $_POST["quadro"];


    include 'conexao.php';

    $sql = "insert into funcionarios values(null,
    '".$nomefuncionario."','".$equipe."','".$cargo."', '".$quadro."')";

    if(mysqli_query($con,$sql)){
        $msg =  "Gravado com sucesso!"; ?>

        <script>
            alert('<?php echo $msg; ?>');
            location.href="funcionarios.php"; //redirecionamento em JS
        </script> 

<?php
    }else{
        $msg =  "Erro! Insira os dados novamente, antes de entrar em contato com o desenvolvedor.";
        ?>

        <script>
            alert('<?php echo $msg; ?>');
            location.href="cadastro-funcionarios.php"; //redirecionamento em JS
        </script> 

<?php
        
    }
    
    mysqli_close($con);
?>