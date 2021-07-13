<?php include_once "autenticacao.php";   
?>

<?php
$consultor = $_GET["consultor"];


include 'conexao.php';



  $sql1 = "SELECT SUM(valorcessao) FROM registro WHERE consultor='".$consultor."'";
                        $result1 = mysqli_query($con, $sql1);
                        $row1 = mysqli_num_rows($result1);

                        if($row1 > 0){
                        $total1 = mysqli_fetch_array($result1);

                        $result = $total1[0];
                        
###############################
    $sql2 = "SELECT * FROM registro WHERE consultor ='".$consultor."'";
    $result2 = mysqli_query($con, $sql2);
    $row2 = mysqli_num_rows($result2);

    if($row2 > 0){
    $total2 = mysqli_fetch_array($result2);
    
    $equip = $total2['equipe'];}

    ##########################################

$sql3 = "SELECT SUM(valorcessao) FROM registro WHERE equipe='".$equip."'";
    $result3 = mysqli_query($con, $sql3);
    $row3 = mysqli_num_rows($result3);

    if($row3 > 0){
    $total3 = mysqli_fetch_array($result3);
    $prodequip = $total3[0];
   
    }   



################################

$sql4 = "SELECT SUM(qtd) FROM visitas WHERE consultor='".$consultor."'";
    $result4 = mysqli_query($con, $sql4);
    $row4 = mysqli_num_rows($result4);

    if($row4 > 0){
    $total4 = mysqli_fetch_array($result4);
    $qtd = $total4[0];
   
        
    }   
                     


###############################

$sql5 = "SELECT SUM(qtd) FROM visitas WHERE consultor='".$consultor."' AND semana='1'";
    $result5 = mysqli_query($con, $sql5);
    $row5 = mysqli_num_rows($result5);

    if($row5 > 0){
    $total5 = mysqli_fetch_array($result5);
    $semana1 = $total5[0];
   
        
    }   

    ##########################
    $sql6 = "SELECT SUM(qtd) FROM visitas WHERE consultor='".$consultor."' AND semana='2'";
    $result6 = mysqli_query($con, $sql6);
    $row6 = mysqli_num_rows($result6);

    if($row6 > 0){
    $total6 = mysqli_fetch_array($result6);
    $semana2 = $total6[0];
   
        
    }   

    ##########################
    $sql7 = "SELECT SUM(qtd) FROM visitas WHERE consultor='".$consultor."' AND semana='3'";
    $result7 = mysqli_query($con, $sql7);
    $row7 = mysqli_num_rows($result7);

    if($row7 > 0){
    $total7 = mysqli_fetch_array($result7);
    $semana3 = $total7[0];
   
        
    }   

    ##########################
    $sql8 = "SELECT SUM(qtd) FROM visitas WHERE consultor='".$consultor."' AND semana='4'";
    $result8 = mysqli_query($con, $sql8);
    $row8 = mysqli_num_rows($result8);

    if($row8 > 0){
    $total8 = mysqli_fetch_array($result8);
    $semana4 = $total8[0];
   
        
    }   

    ##########################



                        

                        $sqlmeta ="SELECT * FROM metas
                        WHERE id = (select max(id) from metas)";
                        $resultmeta = mysqli_query($con, $sqlmeta);
                        $rowmeta = mysqli_num_rows($resultmeta);
                        
                        if($rowmeta > 0){
                        $totalmeta = mysqli_fetch_array($resultmeta);
                        
                        $meta= $totalmeta['meta'];
                        $metaequipe = $totalmeta['metaporequipe'];
                        $metaconsultor = $totalmeta['metaporconsultor'];

                    }



                      
                        ?>
                       


                        <?php
                       // echo number_format($result, 2, ',', '.');
                            }else{
                                ?>   
                                <script>
                                    location.href="acompanhar-consultor.php"; //redirecionamento em JS
                                </script>
                            <?php
                            // $result = "R$ 0,00";
                                //echo number_format($result, 2, ',', '.'); 
                                
                            }  









                            function porcentagem_nx ( $parcial, $total ) {
                                return ( $parcial * 100 ) / $total;
                            }

                            $meta1 = porcentagem_nx($result, $meta);

                            function porcentagem2_nx ( $parcial, $total ) {
                                return ( $parcial * 100 ) / $total;
                            }

                            $meta2 = porcentagem2_nx($result, $metaequipe);

                            function porcentagem3_nx ( $parcial, $total ) {
                                return ( $parcial * 100 ) / $total;
                            }

                            $meta3 = porcentagem3_nx($result, $metaconsultor);




                            function porcentagem4_nx ( $parcial, $total ) {
                                return ( $parcial * 100 ) / $total;
                            }

                            $meta4 = porcentagem4_nx($result, $prodequip);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
<style> 

.financ{
                    margin-left:100px;


            }

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

    <br>
    <a href="acompanhar-consultor.php" class="btn red">Voltar</a>

        <h2>FICHARIO</h2>
        
   


    <h5 style="color: red"><?php echo $consultor; ?> </h5>
    <br>

    <h5> Produção até agora:  <?php echo 'R$ '. number_format($result, 2, ',', '.');?></h5><br>
    <div class="row">
        <div class="col s6">
    <input type="text" value="Meta Por Consultor: <?php  echo number_format($meta3, 1). '% de R$ '. number_format($metaconsultor, 2, ',', '.'); ?>"><br>    
    </div>
    </div>

    <div class="row">        
    <div class="col s6">
    <input type="text" value="Meta Por Equipe: <?php  echo number_format($meta2, 1). '% de R$ '. number_format($metaequipe, 2, ',', '.'); ?>" ><br>
    </div>    
</div>

    <div class="row">        
    <div class="col s6">
    <input type="text" value="Meta da Empresa: <?php  echo number_format($meta1, 1). '% de R$ '. number_format($meta, 2, ',', '.'); ?>"><br>
    </div>
    </div>
    <h5> Participação na meta da equipe <?php echo $equip; ?> : <?php echo number_format($meta4, 1). '% de R$ '. number_format($prodequip, 2, ',', '.'); ?> </h5><br>
    
    <h5>Visitas mensais: <?php echo $qtd ?> </h5>


    <div class="row">
        <div class="col s3">
    <input type="text" value="1ª semana: <?php echo $semana1 ?>">
    </div>
    </div>
    <div class="row">
        <div class="col s3">
    <input type="text" value="2ª semana: <?php echo $semana2 ?> ">
    </div>
    </div>
    <div class="row">
        <div class="col s3">
    <input type="text" value="3ª semana: <?php echo $semana3?> ">
    </div>
    </div>
    <div class="row">
        <div class="col s3">
    <input type="text" value="4ª semana: <?php echo $semana4 ?> ">
    </div>
    </div>

    

 

    </div>
</body>
</html>