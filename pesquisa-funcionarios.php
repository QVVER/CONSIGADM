<?php include_once "autenticacao.php";   
?>
<?php 
include 'conexao.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisar Funcionários</title>
</head>
<body>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script>

        function confirmaExclusao(cod,nome){            
            
            if(confirm('Deseja realmente excluir o(a) cliente '+nome+' ?')){

                location.href="excluir-funcionario.php?cod="+cod;

            }

        }

    </script>
    <style> .teste1{
                margin-left: 1200px;

                color: black;

            }.ca{
                margin-right: 100px;
                margin-left: 10px;
                width: 80px;
                height: 65px;

                color: white;

            }


</style>



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

        <h3>Consulta de funcionários</h3>
        
       
        <form action="pesquisa-funcionarios.php" method="get">

            <input type="text" name="nome" placeholder="Digite um nome para pesquisar">
            <a href="menu.php" class="btn red">Voltar</a>

            <input type="submit" value="Pesquisar" class="btn">

        </form>

        <?php
        
            //isset() -> Verifica se a variável é diferente de NULL
            if(isset($_GET["nome"])){
                $nome = $_GET["nome"];  
                 
                

                //Abrir conexão com o mysql

                //Montar a instrução sql de consulta

                if($_SESSION["perfil"] == "gestor"){
                    $sql = "select * from funcionarios where nome like '".$nome."%' and equipe like '".$_SESSION["equipe"]."'";
                
                }elseif($_SESSION["perfil"] == "adm"){
                    $sql = "select * from funcionarios where nome like '".$nome."%' and quadro like '".$_SESSION["quadro"]."'";                }
                   
               
                //echo $sql;

                //Executando a pesquisa
                $result = mysqli_query($con,$sql);
                //var_dump($result);

                //se o número de linha do resultado é maior que zero
                if(mysqli_num_rows($result) > 0){ 
                    //echo "ok";
                    ?>
                    
                    <table>
                        <tr>                           
                            <th>Nome</th>
                            <th>Equipe</th>
                            <th>cargo</th>
                            <th  class="center-align">Editar</th>
                            <th  class="center-align">Excluir</th>
                            
                            <?php } ?>
                        </tr>

                        <?php               

                         while($row = mysqli_fetch_array($result)){
                            //var_dump($row);
                        ?>

                        <tr>                            
                            <td><?php echo $row["nome"];?></td>
                            <td><?php echo $row["equipe"];?></td>
                            <td><?php echo $row["cargo"];?></td>
                            <td class="center-align"><a href="editar-funcionario.php?cod=<?php echo $row["id"]; ?>"><i class="material-icons orange-text">edit</i></a></td>
                            
                            <?php /* if($_SESSION["perfil"] == "adm")*///{ ?>
                                <td class="center-align"><a href="#" onclick="confirmaExclusao(<?php echo $row['id']; ?>,'<?php echo $row["nome"];?>')"><i class="material-icons red-text">delete_forever</i></a></td>
                            <?php  //} ?>
                            
                        </tr>
                        
                         <?php } //fim do loop ?>

                    </table>
                        
                    <?php
                }else{
                    echo "<p>Nenhum cliente encontrado</p>";
                }

                mysqli_close($con);

            
            
        ?>
        
    </div>
</body>
</html>
    
</body>
</html>