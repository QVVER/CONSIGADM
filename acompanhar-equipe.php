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


        <form action="back-equipe.php" method="GET">
        <select class="browser-default " name="equipe">

                                <option value="" disabled selected>Equipe</option>
                                <?php
                                include 'conexao.php';
                          
if($_SESSION["perfil"] == "gestor"){
    $sql = "SELECT * FROM equipes WHERE perfil like '".$_SESSION['equipe']."'";

}elseif($_SESSION["perfil"] == "adm"){
    $sql = "SELECT * FROM equipes";
}
                                
                                $result = mysqli_query($con,$sql);

                                    while($row = mysqli_fetch_array($result)){
                                        ?>
                                        
                                        <option value="<?php echo $row['perfil'] ?>"><?php echo $row['perfil'] ?></option>

                                        <?php
                                    }
                                    mysqli_close($con); ?>
                                    </select>

<input type="submit" class="btn black" value="Ver equipe">
        </form>


       
                
         

                   </div>
                                                             


    </body>
</html>













