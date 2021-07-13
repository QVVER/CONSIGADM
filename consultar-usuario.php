<?php


include_once "autenticacao.php";
?>
<?php
 ini_set('default_charset','UTF-8');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Consulta de usuários</title>
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
     
        .teste1{
                margin-left: 1200px;

                color: black;

            }
            .ca{
                margin-right: 100px;
                margin-left: 10px;
                width: 80px;
                height: 65px;

                color: white;

            }


</style>

        
        <script>

function confirmaExclusao(iduser,nome){            
    
    if(confirm('Deseja realmente excluir o(a) cliente '+nome+' ?')){

        location.href="excluir-usuario.php?iduser="+iduser;

    }

}

</script>




</head>
<body>


<nav>
    <div class="nav-wrapper black">
        <img class="ca" src="logo-consigadm.png">
      <a href="index.php" class="brand-logo">ConsigADM</a>
      <h6 class='teste1'> Comercial: contato@consigadm.com<br> Suporte: suporte@consigadm.com</h6>
     
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="sass.html">Sass</a></li>
    <li><a href="badges.html">Components</a></li>
    <li><a href="collapsible.html">Javascript</a></li>
    <li><a href="mobile.html">Mobile</a></li>
  </ul>













<div class="container">
        <h3> Consulta de usuarios </h3>
        <form action="consultar-usuario.php" method="GET">
            
            <input type="text" name="nome" placeholder="Digite o nome do usuário! (Clique em pesquisar para mostrar todos)">
            <input type="submit" value="Pesquisar" class="btn black">
            <a href="menu.php" class="btn red">Voltar</a>


            
        </form>
        <?php
        if(isset($_GET["nome"])){
            $nome = $_GET["nome"];  

             //Abrir conexão com o mysql
include 'conexao.php';
             //Montar a instrução sql de consulta
             $sql = "select * from conta where nome like '".$nome."%'";
             //echo $sql;

             //Executando a pesquisa
             $result = mysqli_query($con,$sql);
             //var_dump($result);
             if(mysqli_num_rows($result) > 0){
                //echo "ok";
                ?>
                
                <table>
                    <tr>    
                        <th>ID</th>                       
                        <th>Nome</th>
                        <th>Login</th>
                        <th>Senha</th>
                        <th>Perfil</th> 
                        <th>Equipe</th>                        
                       
                        <?php if($_SESSION["perfil"] == "adm"){ ?>
                        <th  class="center-align">Excluir</th>
                        <?php } ?>
                    </tr>

                    <?php               

                     while($row = mysqli_fetch_array($result)){
                        //var_dump($row);
                    ?>

                    <tr>     
                        <td><?php echo $row["iduser"]; ?></td>                       
                        <td><?php echo $row["nome"];?></td>
                        <td><?php echo $row["login"];?></td>
                        <td><?php echo $row["senha"];?></td>
                        <td><?php echo $row["perfil"];?></td>
                        <td><?php echo $row["equipe"];?></td>

                    
                        <?php if($_SESSION["perfil"] == "adm" || "gestao"){
                            if($row["perfil"] != "adm"){
                                 ?>
                            <!-- <td class="center-align"><a href="editar-usuario.php?cod=<?php echo $row["iduser"]; ?>"><i class="material-icons green-text">edit</i></a></td> -->

                            <td class="center-align"><a href="#" onclick="confirmaExclusao(<?php echo $row['iduser']; ?>,'<?php echo $row["nome"];?>')"><i class="material-icons red-text">delete_forever</i></a></td>
                        <?php } }
                            ?>
        </tr>
                        
                        <?php } //fim do loop ?>

                   </table>
                       
                   <?php
               }else{
                   echo "<p>Nenhum cliente encontrado</p>";
               }

               mysqli_close($con);

           }
           
       ?>

</div>

    
</body>

</html>