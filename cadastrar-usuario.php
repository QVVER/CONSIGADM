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
    <title>Cadastro de usuários</title>
    <link rel="stylesheet" href="materialize/css/materialize.min.css">

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








    
    <div class="container">

        <h3>Cadastro de usuário</h3>
        
        <form action="gravar-usuario.php" method="POST">

         

            <div class="input-field">
                <input type="text" name="nome" required id="nome">
                <label for="nome">Nome</label>
            </div>
            
        
            <div class="input-field">
                <input type="text" maxlength="20" name="login" required id="login">
                <label for="login">Usuário</label>
            </div>
            <div class="input-field">
                <input type="password" maxlength="32" name="senha" required id="senha">
                <label for="senha">Senha</label>
            </div>
            

           
            <p>
                <label>
                    <input type="radio" name="perfil" required value="gestor">
                    <span>GERENTE</span>
                </label>
            </p>
            
            <p>
                <label>
                    <input type="radio" name="perfil" required value="adm">
                    <span>ADMINISTRADOR</span>
                </label>
            </p>
            <p>
                <label>
                    <input type="radio" name="perfil" required value="operacional">
                    <span>OPERACIONAL</span>
                </label>
            </p>
  <br>
<div class="row">
    <div class="col s3">
    <select class="browser-default " name="equipe">

        <option value="" disabled selected>Equipe</option>
        <?php
        include 'conexao.php';
        $sql = "SELECT * FROM equipes";

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

            <select class="browser-default" name="quadro">
                        <option value="" disabled selected>Quadro</option>
                        <option value="Geral">Geral</option>
                        
            </select>
    </div>
    </div>

            <input type="submit" value="Cadastrar" class="btn black">
            <a href="menu.php" class="btn red">Voltar</a>
        </form>

    </div>
    <script src="materialize/js/materialize.min.js"></script>
</body>
</html>
    
</body>
</html>