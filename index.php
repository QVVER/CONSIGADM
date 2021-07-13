<?php
 ini_set('default_charset','UTF-8');
?>
<?php
    session_start();

    if(isset($_SESSION["nome"])){
        header("location:menu.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In</title>
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <style>
      
            .container{
                
                    height: 50vh;
                    display: flex;
                    justify-content: center;
                    align-items:center;
            }
            .login{
                    width: 340px;
                    height: 345px;
                    background-color: white;


            }
            .teste{
                    margin-left: 130px;
                    height: 26vh;
                    display: flex;
                    justify-content: center;
                    align-items:center;
            }
            .teste1{
                margin-left: 1200px;

                color: black;

            }
            .img{
                margin-right: 100px;
                width: 400px;
                height: 350px;

                color: white;

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





<br><br>
    <div class="container"> 
        <img class="img" src="ac1.png">

        <div class="login card-panel">        
        <h3>Entrar</h3>
        <form action="verificar-login.php" method="POST">

            <label>Login</label>
            <input type="text" name="login" id="login" required>
            <label>Senha</label>
            <input type="password" name="senha" id="senha" required>
            <input type="submit" value="Logar" class="btn black">
        </form>

            <p> 
                            <?php 
                                if(isset($_GET["msg"])){ 
                                    echo $_GET["msg"];
                                }
                            ?>
                    </p>
</div>
</div>
    
</body>
</html>