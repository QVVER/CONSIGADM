<?php
    include 'conexao.php'; 
    include 'autenticacao.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeção</title>
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


        <h1> Projeção </h1>
        <!-- if($_SESSION["perfil"] == "gestor"){
                            $sql = "select * from funcionarios where nome like '".$nome."%' and equipe like '".$_SESSION["equipe"]."'"; -->
            <form action="verificar-projecao.php" method="POST">
                                        <div class="row">

                                            <div class="col s3">

                                            <input type="text" placeholder="Nome do cliente" name="cliente">
                                            </div>
                                            <div class="col s2">
                                            <input type="text" placeholder="Valor" name="valor">
                                            </div>
                                            <div class="col s2">


                                            <input type="text" placeholder="Banco" name="banco">
                                            </div>
                                            <div class="col s3">


                                            <select class="browser-default " name="responsavel">

                                            <option value="" disabled selected>Responsável</option>
                                                <?php
                                                include 'conexao.php';
                                                if($_SESSION["perfil"] == "gestor"){
                                                    $sql = "SELECT * FROM funcionarios WHERE equipe like '".$_SESSION['equipe']."'";
                                                
                                                }elseif($_SESSION["perfil"] == "adm"){
                                                    $sql = "SELECT * FROM funcionarios";
                                                }
                                                            
                                                
                                                $result = mysqli_query($con,$sql);

                                                    while($row = mysqli_fetch_array($result)){
                                                        ?>
                                                        
                                                        <option value="<?php echo $row['nome'] ?>"><?php echo $row['nome'] ?></option>

                                                        <?php
                                                    }
                                                    mysqli_close($con); ?>

                                            </select>

                                            </div>
                                                </div>
                                            
                                            <div class="row">
                                
                                            <div class="col s3">


                                            <input type="text" placeholder="data" name="data" id="data" class="required dateBR">
                                            </div>

                                            <div class="col s3">
                                            <select class="browser-default " name="equipe">

                                                    <option value="" disabled selected>Equipe</option>
                                                    <?php
                                                                include 'conexao.php';

                                                        if($_SESSION["perfil"] == "gestor"){
                                                            $sql1 = "SELECT * FROM equipes WHERE perfil like '".$_SESSION['equipe']."'";
                                                        
                                                        }elseif($_SESSION["perfil"] == "adm"){
                                                            $sql1 = "SELECT * FROM equipes";
                                                        }
                                                                                            
                                                    
                                                    $result1 = mysqli_query($con,$sql1);

                                                        while($row1 = mysqli_fetch_array($result1)){
                                                            ?>
                                                            
                                                            <option value="<?php echo $row1['perfil'] ?>"><?php echo $row1['perfil'] ?></option>

                                                            <?php
                                                        }
                                                        mysqli_close($con); ?>
                                                </select>
                                            </div>
                                                        
                                            
                                            </div>

                                            <input type="submit" value="Gravar" class="btn black"></div>

                                        </div>
                        
                </form>
    </div>




    <script src="materialize/js/materialize.min.js">   </script>     
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="materialize/js/materialize.min.js"></script> 
        <script src="js/maskedinput-1.4.1.js"></script> 
        <script src="js/jquery.validate.js"></script> 
        
        <script>
            $(document).ready(function(){

                $('#data').mask("99/99/9999");

                $('#cpf').mask("999.999.999-99");

                $('form').validate();

            });
        </script>
</body>
</html>