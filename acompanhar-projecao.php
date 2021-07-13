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
  <br>
  <div class="container">

  <a href="menu.php" class="btn red">Voltar</a>
  <BR><BR><BR>
  <h1> Projeção </h1>
  <BR><BR><BR>

<?php

  include 'conexao.php';              



                          
  if($_SESSION["perfil"] == "gestor"){
    $sql = "SELECT * FROM projecao WHERE equipe like '".$_SESSION['equipe']."'";

}elseif($_SESSION["perfil"] == "adm"){
    $sql = "SELECT * FROM projecao";
}

        $result1 = mysqli_query($con, $sql);


        if($result1){
            $row1 = mysqli_num_rows($result1);

            if($row1 > 0){


                ?>
                    <div class="col s2">
                        
                        <table>
                            <tr>                           
                                <th>Cliente</th>
                                <th>Valor</th>
                                <th>Banco</th>                                             
                                <th>Responsável</th>
                                <th>Data</th>
                                <th>Equipe</th> 
                                   
                            </tr>
                                    <?php               

                                while($total1 = mysqli_fetch_array($result1)){
                                            //var_dump($row);
                                    $cliente = $total1['nomecliente'];            
                                    $valor = 'R$'.number_format($total1['valor'], 2, ',', '.');
                                    $equipe = $total1['equipe'];                                
                                    $hoje = $total1['data'];
                                    $banco = $total1['banco'];
                                    $responsavel = $total1['consultor'];

                                    $hoje = explode("-",$hoje); //[dd][mm][aaaa]
                                    $hoje = array_reverse($hoje); //[aaaa][mm][dd]
                                    $hoje = implode("/",$hoje); //aaaa-mm-dd

                                    ?>
                                    <tr>                            
                                        <td><?php echo $cliente;?></td>
                                        <td><?php echo $valor;?></td>
                                        <td><?php echo $banco;?></td>
                                        <td><?php echo $responsavel;?></td>
                                        <td><?php echo $hoje;?></td>
                                        <td><?php echo $equipe;?></td>

                                        <!-- <td><?php //echo $nome;?></td> -->
                                        
                                    </tr>
                                        
                                <?php } //fim do loop ?>

                        </table>
                                </div>
                    <!-- col s2 -->
                        <?php

            }}

?>

    </div>
</body>
</html>