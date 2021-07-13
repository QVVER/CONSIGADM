<?php include 'conexao.php';
include 'autenticacao.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selecionar Mês</title>
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
<style>

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
	  		<div class="row">
	  			<br><br><br>
                                <div class="col s6">
                                	<form action="menu.php" METHOD="GET">
                                <select class="browser-default " name="data">

                                    <option value="" disabled selected>Selecionar Mês</option>
                                    <option value="01" disabled selected>1</option>
                                    <option value="02" disabled selected>2</option>
                                    <option value="03" disabled selected>3</option>
                                    <option value="04" disabled selected>4</option>
                                    <option value="05" disabled selected>5</option>
                                    <option value="06" disabled selected>6</option>
                                    <option value="07" disabled selected>7</option>
                                    <option value="08" disabled selected>8</option>
                                    <option value="09" disabled selected>9</option>
                                    <option value="10" disabled selected>10</option>
                                    <option value="11" disabled selected>11</option>
                                    <option value="12" disabled selected>12</option>

                                    
                                        </select>
                                    </form>
                                </div>



	  </div>

</body>
</html>
