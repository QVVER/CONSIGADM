<?php include 'conexao.php';
include 'autenticacao.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
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

        <h1> Clientes da Base</h1>
            <?php 
              if($_SESSION["perfil"] == "gestor"){
                $sql = "SELECT * FROM registronaohigienizado WHERE equipe LIKE '".$_SESSION['equipe']."'";
            
            }elseif($_SESSION["perfil"] == "adm"){
                $sql = "SELECT * FROM registronaohigienizado";
            }


            $result = mysqli_query($con, $sql);
            

            if($result){

                $total = mysqli_num_rows($result);
                if($total > 0){
               //nome, cpf, ag, conta, orgao, datacessao, equipe, consultor ?>
                  </div>
                <table>
                        <tr>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>Telefone</th>
                            <th>Celular</th>
                            <th>AG</th>
                            <th>Conta</th>
                            <th>Banco</th>
                            <th>Orgão</th>
                            <th>Valor</th>
                            <th>Banco proposta</th>
                            <th>Data da Cessão</th>
                            <th>Data da 1ª parcela</th>
                            <th>Equipe</th>
                            <th>Consultor</th>

                        </tr>
            
                        <tr>
                            <?php while($row = mysqli_fetch_array($result)){             
                                 
                                 
                                            $row['datacessao'] = explode("-",$row['datacessao']); //[dd][mm][aaaa]
                                            $row['datacessao'] = array_reverse($row['datacessao']); //[aaaa][mm][dd]
                                            $row['datacessao'] = implode("/",$row['datacessao']); //aaaa-mm-dd
                                 
                                            $row['dataparcela'] = explode("-",$row['dataparcela']); //[dd][mm][aaaa]
                                            $row['dataparcela'] = array_reverse($row['dataparcela']); //[aaaa][mm][dd]
                                            $row['dataparcela'] = implode("/",$row['dataparcela']); //aaaa-mm-dd
                                 
                                 ?>

                            <td><?php echo $row['nome']; ?></td>
                            <td><?php echo $row['cpf']; ?></td>
                            <td><?php echo $row['telefone']; ?></td>
                            <td><?php echo $row['celular']; ?></td>
                            <td><?php echo $row['ag']; ?></td>
                            <td><?php echo $row['conta']; ?></td>
                            <td><?php echo $row['banco']; ?></td>
                            <td><?php echo $row['orgao']; ?></td>
                            <td><?php echo number_format($row['valorcessao'], 2, ',', '.'); ?></td>
                            <td><?php echo $row['bancoproposta']; ?></td>
                            <td><?php echo $row['datacessao']; ?></td>
                            <td><?php echo $row['dataparcela']; ?></td>
                            <td><?php echo $row['equipe']; ?></td>
                            <td><?php echo $row['consultor']; ?></td>

                        </tr>
            
            <?php } ?>
                </table>
            <?php 
            }} ?>
            
            
            
            
            
            
            
            




  
    
</body>
</html>