<?php include_once "autenticacao.php"; 




include 'conexao.php';
$equipe = $_GET["equipe"];


$sql = "SELECT * FROM funcionarios WHERE equipe like '".$equipe."'";
if($row = mysqli_query($con, $sql)){

    $result = mysqli_num_rows($row);


}



#######################
$sqlx = "SELECT SUM(valorcessao) FROM registro WHERE consultor='".$result."'";
$resultx = mysqli_query($con, $sqlx);
$rowx = mysqli_num_rows($resultx);
$totalx = mysqli_fetch_array($resultx);




#########################
$sql1 = "SELECT SUM(valorcessao) FROM registro WHERE equipe='".$equipe."'";
$result1 = mysqli_query($con, $sql1);
$row1 = mysqli_num_rows($result1);

if($row1 > 0){
$total1 = mysqli_fetch_array($result1);

$result1 = $total1[0];}

##########


$sqlmeta ="SELECT * FROM metas
WHERE id = (select max(id) from metas)";
$resultmeta = mysqli_query($con, $sqlmeta);
$rowmeta = mysqli_num_rows($resultmeta);

if($rowmeta > 0){
$totalmeta = mysqli_fetch_array($resultmeta);


$metaequipe = $totalmeta['metaporequipe'];


}


############



function porcentagem2_nx ( $parcial, $total ) {
    return ( $parcial * 100 ) / $total;
}

$meta2 = porcentagem2_nx($result1, $metaequipe);

?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dados consultor</title>
        <link rel="stylesheet" href="materialize/css/materialize.min.css">
        <style>
                .bot{
                        margin-left: 2px;

                }
                .prod{
                        margin-left: 300px;

                }
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


            <br>
            <a href="acompanhar-equipe.php" class="btn red">Voltar</a>
            
            <div class="row">  
            <h4>Equipe <?php echo $equipe; ?> </h4>
            <h5>Produção total: <?php echo 'R$ '. number_format($result1, 2, ',', '.') ?> </h5>
            <br>      
                <div class="col s6">
                <input type="text" value="Meta Por Equipe: <?php  echo number_format($meta2, 1). '% de R$ '. number_format($metaequipe, 2, ',', '.'); ?>" ><br>
                </div>    




            </div>
                <div class="row">
                <div class="col s6">
                
                <table>
                        <tr>                           
                            <th>Nome</th>
                            <th>Cargo</th>
                            
                            
                            
                        </tr>

                        <?php               

                         while($total = mysqli_fetch_array($row)){

                            
                            //var_dump($row);
                        ?>

                        <tr>                            
                            <td><?php echo $total["nome"];?></td>
                            <td><?php echo $total["cargo"];?></td>
                            
                            
                        </tr>
                        
                         <?php } //fim do loop ?>

                    </table>
            </div>
            </div>

       
                
         

        </div>
                                                             


    </body>
</html>



