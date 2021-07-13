<?php 
  include_once "autenticacao.php";   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metas</title>
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


        <h3>Metas</h3>
        <form action="enviar.php" method="POST">
            <div class="row">
                <div class="col s2">
                    <label>Meta empresa</label>    

                    <input type="text" name="metaempresa">
                    </div>


                    <div class="col s2">                  

                    <label>Meta equipe</label>    

                    <input type="text" name="metaequipe">
                    </div>


                    <div class="col s2">
                    <label>Meta consultor</label>    

                    <input type="text" name="metaconsultor">
                    </div>

                

            </div>
            <input type="submit" class="btn black">

        </form>
        





    </div>
</body>
</html>