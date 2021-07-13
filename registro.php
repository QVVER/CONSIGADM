<?php include_once "autenticacao.php";   
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registro</title>
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





        <div class="container row">
            <br><p>
            
            <a href="menu.php" class="btn red">Voltar</a>
            <br>
            <h1> Registro de cessão </h1>
            <br><br>
            <form action="gravar-registro.php" method="POST">


          
                <div class="row">
                    <div class="col s2 input-field">
                        <input type="text" name="nomecliente" required>
                        <label for="nomecliente"> Nome do cliente </label>
                    </div>
                    <div class="col s2 input-field">
                        <input type="text" id="cpf" name="cpf" maxlength="17" required>
                        <label for="cpf"> CPF </label>
                    </div>
                    <div class="col s2 input-field">
                        <input type="text" id="telefone" name="telefone" maxlength="13" required>
                        <label for="telefone"> Fone </label>
                    </div>
                    <div class="col s2 input-field">
                        <input type="text" id="celular" name="celular" maxlength="14" required>
                        <label for="celular"> Celular </label>
                    </div>
        </div>
        <div class="row">
                    <div class="col s1 input-field">
                        <input type="text" name="ag" required>
                        <label for="ag"> Agência </label>
                    </div>
                    <div class="col s1 input-field">
                        <input type="text" name="conta" required>
                        <label for="conta"> Conta </label>
                    </div>
                    <div class="col s2 input-field">
                        <input type="text" name="orgao" required>
                        <label for="orgao"> Orgão </label>
                    </div>
                    <div class="col s2 input-field">
                        <input type="text" name="banco" required>
                        <label for="banco"> Banco </label>
                    </div>
                </div>

                <div class="row">
                
                   
                        <div class="col s2 input-field">
                            <input type="text" name="dataparcela" id="dataparcela"  class="required dateBR">
                            <label for="dataparcela"> Data da 1ª parcela </label>
                        </div>

                        <div class="col s2 input-field">
                            <input type="text" name="valorcessao" required>
                            <label for="valorcessao"> Valor da cessão </label>

                        </div>
                        <div class="col s2 input-field">
                            <input type="text" name="bancoproposta" required>
                            <label for="bancoproposta"> Banco proposta </label>

                        </div>
                        </div>
                        <div class="row">

                        <div class="col s2 input-field">
                            <input type="text" name="datacessao" id="datacessao" class="required dateBR">
                            <label for="datacessao"> Data da cessão </label>

                        </div>

                        <div class="col s2 input-field">
                            <input type="text" name="prazocessao" required>
                            <label for="prazocessao"> Prazo da cessão </label>

                        </div>
                   </div>
                            <div class="row">
                                <div class="col s6">
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
                                <div class="col s6">
                                    <select class="browser-default " name="funcionario">
                                                <option value="" disabled selected>Responsável</option>
                                                <?php
                                                include 'conexao.php';
                                                if($_SESSION["perfil"] == "gestor"){
                                                    $sql1 = "SELECT * FROM funcionarios WHERE equipe LIKE '".$_SESSION['equipe']."'";
                                                
                                                }elseif($_SESSION["perfil"] == "adm"){
                                                    $sql1 = "select * from funcionarios";
                                                }
                                                                                        
                                                $result1 = mysqli_query($con,$sql1);

                                                while($row1 = mysqli_fetch_array($result1)){
                                                    ?>
                                                    
                                                    <option value="<?php echo $row1["nome"] ?>"><?php echo $row1["nome"] ?></option>

                                                    <?php
                                                }
                                                mysqli_close($con); ?>
                                     </select>

                                     </div>        
                                     
                                     <input type="submit" value="Avançar" class="btn">



                        </div> 
                        </div>
                        <br><br>
                        
                                  



            </form>
                
                
        
        
        </div> 

        <script src="materialize/js/materialize.min.js">   </script>     
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="materialize/js/materialize.min.js"></script> 
        <script src="js/maskedinput-1.4.1.js"></script> 
        <script src="js/jquery.validate.js"></script> 
        
        <script>
            $(document).ready(function(){

                $('#datacessao').mask("99/99/9999");
                $('#dataparcela').mask("99/99/9999");

                $('#celular').mask("(99)99999-9999");

                $('#telefone').mask("(99)9999-9999");

                $('#cpf').mask("999.999.999-99");

                $('form').validate();

            });
        </script>


    </body>
</html>