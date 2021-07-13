<?php 
    include_once 'conexao.php';
?>
<?php include_once "autenticacao.php";   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar</title>

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










    
    <?php 
        
        $cod = $_GET["cod"];


                                  
if($_SESSION["perfil"] == "gestor"){
    $sql = "select * from funcionarios where id like '".$cod."' and equipe like '".$_SESSION['equipe']."'";

}elseif($_SESSION["perfil"] == "adm"){
    $sql = "select * from funcionarios where id = ".$cod;
}

        $result = mysqli_query($con,$sql);

        $row = mysqli_fetch_array($result);
    ?>
    <div class="container">
        <h3>Alteração de funcionário</h3>        
        <form action="atualizar-funcionario.php" method="POST">

            <!-- Nome:<br>
            <input type="text" name="nome" required> -->

            
            <input type="hidden" readonly name="id" required value="<?php echo $row["id"];?>">

            <div class="input-field">
                <input type="text" name="nome" required id="nome" >
                <label for="nome">Nome</label>
            </div>
            
            <div class="input-field">
            <select class="browser-default col s3" name="cargo">
                        <option value="" disabled selected>Cargo</option>
                        <option value="consultor">Consultor</option>
                        <option value="gerente">Gerente</option>
                    </select>
            </div>
            <input type="text" name="quadro" required id="nome" value="geral" hidden >

            <div>
            <select class="browser-default " name="equipe">

                <option value="" disabled selected>Equipe</option>
                <?php
                include 'conexao.php';
                $sql1 = "SELECT * FROM equipes";

                $result1 = mysqli_query($con,$sql1);

                    while($row1 = mysqli_fetch_array($result1)){
                        ?>
                        
                        <option value="<?php echo $row1['perfil'] ?>"><?php echo $row1['perfil'] ?></option>

                        <?php
                    }
                    mysqli_close($con); ?>
                </select>
            </div>


            <input type="submit" value="Atualizar" class="btn">

        </form>

    </div>
    <script src="materialize/js/materialize.min.js"></script>
</body>
</html>