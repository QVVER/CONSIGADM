<?php include 'conexao.php';
include 'autenticacao.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<style>

.teste1{
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

        
<script>

function confirmaExclusao(id,cliente){            
    
    if(confirm('Deseja realmente excluir a visita do cliente '+cliente+' ?')){

        location.href="excluir-visita.php?id="+id;

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
    
        <br><br>
        <a href="menu.php" class="btn red">Voltar</a>
        <br><br>
        <h1>Relatório de Visitas</h1>

</div>
            <?php 
            include 'conexao.php';
            if($_SESSION["perfil"] == "gestor"){
                $sql = "SELECT * FROM relvisitas WHERE equipe like '".$_SESSION['equipe']."'";
            
            }elseif($_SESSION["perfil"] == "adm"){
                $sql = "SELECT * FROM relvisitas";
            }
            

            $result = mysqli_query($con, $sql);
            

            if($result){

                $total = mysqli_num_rows($result);
                if($total > 0){
               //nome, cpf, ag, conta, orgao, datacessao, equipe, consultor ?>
                
                <table>
                        <tr>
                            <th>Nome</th>
                            <th>Endereço</th>
                            <th>Margem</th>
                            <th>Visita</th>
                            <th>Consultor</th>
                            <th>Equipe</th>
                            <th>Data</th>
                            <th>Deletar</th>


                        </tr>
            
                        <tr>
                            <?php while($row = mysqli_fetch_array($result)){             
                                     
                                 
                                 ?>

                            <td><?php echo $row['cliente']; ?></td>
                            <td><?php echo $row['endereco']; ?></td>
                            <td><?php echo $row['margem']; ?></td>
                            <td><?php echo $row['tipo']; ?></td>
                            <td><?php echo $row['consultor']; ?></td>
                            <td><?php echo $row['equipe']; ?></td>
                            <td><?php echo $row['data']; ?></td>
                            
                        

                            <td class="center-align"><a href="#" onclick="confirmaExclusao(<?php echo $row['id']; ?>,'<?php echo $row["cliente"];?>')"><i class="material-icons red-text">delete_forever</i></a></td>
                      

                        </tr>
            
            <?php } ?>
                </table>
            <?php 
            }} ?>
            
            
            
            
            
            
            
            




    
</body>
</html>