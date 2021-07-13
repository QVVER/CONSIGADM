<?php include_once "autenticacao.php";   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Funcionarios</title>

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

        <h3>Cadastro de Funcionário</h3>
        
        
        <form action="gravar-funcionario.php" method="POST">
            <div class="row">
                <div class="col s3">
                    <input type="text" name="nomefuncionario" placeholder="Nome" class="required ">
                </div>
                    <select class="browser-default col s3" name="cargo">
                        <option value="" disabled selected>Cargo</option>
                        <option value="consultor">Consultor</option>
                        <option value="gerente">Gerente</option>
                    </select>

            <div class="col s3">
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
                <div class="col s3">

                    <select class="browser-default " name="quadro">
                        <option value="" disabled selected>Quadro</option>
                        <option value="Geral">Geral</option>
                        
                    </select>
                        </div>       
        <br>
            

                   
            </div>
            <a href="funcionarios.php" class="btn red">Voltar</a>

            <input type="submit" value="Cadastrar" class="btn">
        </div>
         
        </form>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="materialize/js/materialize.min.js"></script> 
    <script src="js/maskedinput-1.4.1.js"></script> 
    <script src="js/jquery.validate.js"></script> 


</body>
</html>