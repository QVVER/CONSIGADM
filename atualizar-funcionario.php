<?php 

    //Processo de atualização em banco de dados
    //1- Resgatar os dados do form

    $cod = $_POST["id"]; //veio pelo input hidden
    $nome = $_POST["nome"];
    $equipe = $_POST["equipe"];
    $cargo = $_POST["cargo"];

    $quadro = $_POST["quadro"];

    //2- Conectar o PHP ao MYSQL
    //endereço, usuario, senha, nome da base
    include 'conexao.php';

    
    //3- Montar a instrução sql de atualização
    
    $sql = "UPDATE funcionarios set nome='".$nome."', equipe='".$equipe."', cargo='".$cargo."', quadro='".$quadro."'  
    where id='".$cod."'";

    //echo $sql;
   

    //echo $sql;
    //4- Executar a instrução sql
    if(mysqli_query($con,$sql)){
        $msg = "Atualizado com sucesso!";
    }else{
        $msg = "Erro ao atualizar!";
    }

    //5- Fechar a conexao
    mysqli_close($con);
?>

    
<script>
    alert('<?php echo $msg; ?>');
    location.href="pesquisa-funcionarios.php"; //redirecionamento em JS
</script>