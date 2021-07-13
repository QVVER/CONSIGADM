<?php include_once "autenticacao.php";   
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Consultor</title>
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
            #black{
                margin-left: 0px;


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
                <h1>Visitas</h1>

                <div class="row">
                    <div class="col s2">
                                <a href="menu.php" class="btn red">Voltar</a>
                                <br><br>
                    </div>
                </div>
                <form action="gravar-visita.php" method="POST">
                <div class="row">
                    <div class="col s4">
                    <input type="text" name="cliente" placeholder="Nome do cliente">

                    </div>
                    <div class="col s4">
                    <input type="text" name="endereco" placeholder="Endereço completo">

                    </div>
                    <div class="col s2">
                    <input type="text" name="margem" placeholder="Margem">

                    </div>
                    <div class="col s2">
                    <select class="browser-default " name="tipo">
                                                    <option value="" disabled selected>Forma</option>
                                                    <option value="1" name="externo">Externo</option>
                                                    <option value="2" name="interno">Interno</option>
                                                   
                                                </select>
                    </div>
                    </div>
                    <div class="row">
                    
                                            <div class="col s3">
                                                <select class="browser-default " name="funcionario">
                                                            <option value="" disabled selected>Consultor</option>
                                                            <?php
                                                            include_once 'conexao.php';
                                                            if($_SESSION["perfil"] == "gestor"){
                                                                $sql = "SELECT * FROM funcionarios WHERE equipe LIKE '".$_SESSION['equipe']."'";
                                                            
                                                            }elseif($_SESSION["perfil"] == "adm"){
                                                                $sql = "select * from funcionarios";
                                                            }     
                                                            $result = mysqli_query($con,$sql);

                                                            while($row = mysqli_fetch_array($result)){
                                                                ?>
                                                                
                                                                <option value="<?php echo $row["nome"] ?>"><?php echo $row["nome"] ?></option>

                                                                <?php
                                                            }
                                                            mysqli_close($con); ?>
                                                </select>

                                            </div>  
                                            

                                            <div class="col s3">
                                            
                                                <select class="browser-default " name="semana">
                                                    <option value="" disabled selected>Semana do mês</option>
                                                    <option value="1" name="semana">1ª semana</option>
                                                    <option value="2" name="semana">2ª semana</option>
                                                    <option value="3" name="semana">3ª semana</option>
                                                    <option value="4" name="semana">4ª semana</option>
                                                </select>
                                            
                                            
                                            </div>

                                                <div class="col s2">
                                                <input type="text" name="data" id="data"  class="required dateBR">
                                                <label for="data"> Data da visita </label>
                                            </div>

                                            <div class="col s2">
                                                <input type="number" name="qtd" placeholder="Qtd visitas">
                                            </div>
                                            <div class="col s2">
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
                                            </div>
                       
                    </div>
                            <div class="row">
                                <div class="col s6">
                                        <input type="submit" class="btn black" >
                                        <a href="ver-visitas.php" class="btn black" id="black"> Ver visitas</a> <!-- Ok -->


                            </div>
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
                $('#data').mask("99/99/9999");

                $('#cpf').mask("999.999.999-99");

                $('form').validate();

            });
        </script>
    </body>
</html>