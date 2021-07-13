<?php 

    //Processo de gravação em banco de dados
    //1- Resgatar os dados do form

    //ucwords() -> converte a primeira letra de cada palavra para maiúsculo
    //strtolower() -> converte para caixa baixa
    //strotoupper() -> converte para caixa alta

    $nome = ucwords($_POST["nome"]);
    $senha = md5($_POST["senha"]);
    $perfil = $_POST["perfil"];
    $login = $_POST["login"];
    $equipe = $_POST["equipe"];
    $quadro = $_POST["quadro"];



    //2- Conectar o PHP ao MYSQL
    //endereço, usuario, senha, nome da base
    include 'conexao.php';

    
    //3- Montar a instrução sql de inserção
    //insert into cliente values(null,'David','david@gmail.com','12345678910','M');
    $select = "select * from conta";
    $result = mysqli_query($con, $select);
    $total = mysqli_num_rows($result);


        
    

    $sql = "insert into conta values(null,'".$nome."','".$login."','".$senha."','".$perfil."', '".$equipe."','".$quadro."')";

    //echo $sql;
   

    //echo $sql;
    //4- Executar a instrução sql
    
    if(mysqli_query($con,$sql)){
        $msg = "Gravado com sucesso!";                
    }else{
        $msg = "Erro ao gravar!";
    }

    //5- Fechar a conexao
    mysqli_close($con);
    
?>

    
<script>
    alert('<?php echo $msg; ?>');
    location.href="menu.php"; //redirecionamento em JS
</script>
