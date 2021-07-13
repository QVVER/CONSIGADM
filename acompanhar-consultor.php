<?php include_once "autenticacao.php";   
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

            <h4> Indice </h4><br><br>
            <form action="acompanhar-consultor.php" METHOD="POST">
                
            
                    <input type="submit" value="analisar" class="btn bot">
            
</form>






<h3>FICHARIO</h3>
<?php 



include 'conexao.php';              




if($_SESSION["perfil"] == "gestor"){
    $sql1 = "SELECT * FROM registro WHERE perfil like '".$_SESSION['equipe']."'";

}elseif($_SESSION["perfil"] == "adm"){
    $sql1 = "SELECT * FROM registro";
}

                $result1 = mysqli_query($con, $sql1);


                if($result1){
                    $row1 = mysqli_num_rows($result1);

                    if($row1 > 0){


                        ?>
                            <div class="col s2">
                                
                                <table>
                                    <tr>                           
                                        <th>Consultor</th>
                                        <th>Produção</th>
                                                    
                                        <th>Equipe</th>
                                        <th>Data</th>

                                        <!--<th>Porcentagem meta</th> -->
                                            
                                    </tr>

                                            <?php               

                                        while($total1 = mysqli_fetch_array($result1)){
                                                    //var_dump($row);


                                            $nome1 = $total1['consultor'];
                                        
                                            
                                            $valor = 'R$'.number_format($total1['valorcessao'], 2, ',', '.');
                                            //$meta = $total1['consultor'];
                                            $equipe = $total1['equipe'];
                                        
                                            $hoje = $total1['datacessao'];

                                            
                                            $hoje = explode("-",$hoje); //[dd][mm][aaaa]
                                            $hoje = array_reverse($hoje); //[aaaa][mm][dd]
                                            $hoje = implode("/",$hoje); //aaaa-mm-dd

                                            ?>

                                            <tr>                            
                                                <td><?php echo $nome1;?></td>
                                                <td><?php echo $valor;?></td>
                                                
                                                <td><?php echo $equipe;?></td>
                                                <td><?php echo $hoje;?></td>

                                                <!-- <td><?php //echo $nome;?></td> -->
                                                
                                            </tr>
                                                
                                        <?php } //fim do loop ?>

                                </table>
                                        </div>
                            <!-- col s2 -->
                                <?php

                    }else{ ?>
                                                    <div class="row">
                            <div class="col s2">
                                                    <table>
                                                            <tr>                           
                                                                <th>Aviso</th>
                                                            </tr>
                                                            <tr>
                                                                <td>Sem produção</td>
                                                                        
                                                            </tr>
                                                    
                                                    </table> 
                    </div></div>
                                                    <?php
                    }
                }

                        ?>
                                                                





    <div class="row">
        <div class="col s2">

        
            <label>Ir para soma individual</label>
            <form action="soma.php" method="GET">
                <select class="browser-default " name="consultor">
                                <option value="" disabled selected>Consultor</option>
                                <?php
                                include_once 'conexao.php';
                                                                        
                                $sql = "SELECT consultor FROM registro GROUP BY consultor";
                                
                                $result = mysqli_query($con,$sql);

                                    while($row = mysqli_fetch_array($result)){
                                        ?>
                                        
                                        <option value="<?php echo $row["consultor"] ?>"><?php echo $row["consultor"] ?></option>

                                        <?php
                                    }
                                    mysqli_close($con); ?>
</select>
                <input type="submit" value="SOMAR" class="btn black">

            </form>
            <br>

        </div>
    </div>                                    

            



</div>



    </body>
</html>