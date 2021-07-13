<?php include "autenticacao.php";   
?>
<?php 
include 'back-producao.php';


?>
<?php

ini_set('default_charset','UTF-8');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produção</title>

    <link rel="stylesheet" href="materialize/css/materialize.min.css">
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
        <br>
        <a href="menu.php" class="btn red">Voltar</a>


        <h1> Análise de produção</h1>

    <!-- DATA, VALOR, CONSULTOR, EQUIPE, SOMA POR EQUIPE, SOMA POR EMPRESA -->
        <div class="row">
            <div class="col s4">
                <label>Último cliente</label>
                <input type="text" value="<?php echo $ultimocliente ?>" >
            </div>
            <div class="col s3">
             <label>Último valor a entrar</label>
             <input type="text" value="<?php echo $ultimovalor?>" >
            </div>
            <div class="col s3">
             <label> Equipe Responsável</label>
             <input type="text" value="<?php echo $ultimaequipe ?>" >
            </div>       
        
        </div>
        
        <div class="row">
            <h4>Produção por equipe</h4>
            
            <div class="col s1">
            
            <!-- FAVOR, ALTERAR NOME DA EQUIPE NO H6 E NA QUERY PARA ACESSO DO BANCO DE DADOS -->
            
            <h6>Equipe1</h6>
            </div>




            <div class="col s3">
            <h6>R$ <?php  $sql1 = "SELECT SUM(valorcessao) FROM registro WHERE equipe='Equipe1'";
                        $result1 = mysqli_query($con, $sql1);
                        $row1 = mysqli_num_rows($result1);

                        if($row1 > 0){
                        $total1 = mysqli_fetch_array($result1);

                        $equipe1 = $total1[0];
                        echo number_format($equipe1, 2, ',', '.');
                        }else{
                            ?>  <?php
                            $equipe1 = "R$ 0,00";
                            echo number_format($equipe1, 2, ',', '.'); 
                            
                        }   ?>
            </h6>
            </div>


        
        </div>

        <div class="row">
            


                    <!-- FAVOR, ALTERAR NOME DA EQUIPE NO H6 E NA QUERY PARA ACESSO DO BANCO DE DADOS -->




            <div class="col s1">
            <h6>Equipe2</h6>
            </div>
            <div class="col s3">
            <h6> <?php  $sql2 = "SELECT SUM(valorcessao) FROM registro WHERE equipe='Equipe2'";
                        $result2 = mysqli_query($con, $sql2);
                        $row2 = mysqli_num_rows($result2);

                        if($row2 > 0){
                        $total2 = mysqli_fetch_array($result2);

                        $equipe2 = $total2[0];
                        echo 'R$ '.number_format($equipe2, 2, ',', '.'); 
                        }else{
                            $equipe2 = "0,00";
                            echo number_format($equipe2, 2, ',', '.'); 
                        }   ?></h6>
            </div>


        
        </div>

        <div class="row">
            

                    <!-- FAVOR, ALTERAR NOME DA EQUIPE NO H6 E NA QUERY PARA ACESSO DO BANCO DE DADOS -->




            <div class="col s1">
            <h6>Equipe3</h6>
            </div>
            <div class="col s3">
            <h6> R$ <?php  $sql3 = "SELECT SUM(valorcessao) FROM registro WHERE equipe='Equipe3'";
                        $result3 = mysqli_query($con, $sql3);
                        $row3 = mysqli_num_rows($result3);

                        if($row3 > 0){
                        $total3 = mysqli_fetch_array($result3);

                        $equipe3 =  $total3[0];
                        echo number_format($equipe3, 2, ',', '.');
                        }else{
                            $equipe3 = " 0,00";
                            echo number_format($equipe3, 2, ',', '.');
                        }   ?>
            </h6>
            </div>


        
        </div>
        <div class="row">
            
            <!-- FAVOR, ALTERAR NOME DA EQUIPE NO H6 E NA QUERY PARA ACESSO DO BANCO DE DADOS -->


            <div class="col s1">
            <h5>TOTAL</h5>
            </div>
            <div class="col s3">
            <h5> R$ <?php  $sql4 = "SELECT SUM(valorcessao) FROM registro";
                        $result4 = mysqli_query($con, $sql4);
                        $row4 = mysqli_num_rows($result4);

                        if($row4 > 0){
                        $total4 = mysqli_fetch_array($result4);

                        $equipe4 =  $total4[0];
                        echo number_format($equipe4, 2, ',', '.');
                        }else{
                            $equipe4 = " 0,00";
                            echo number_format($equipe4, 2, ',', '.');
                        }   ?>
            </h5>
            </div>


        
        </div>


        </div>
        
</body>
</html>    
