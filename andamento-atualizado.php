<?php include_once "autenticacao.php";  

include_once "conexao.php";

$id = $_GET["id"];
$nome = $_GET["nome"];
?>
<!DOCTYPE html>
<html>
<head>
	<title> Pendências</title>


 <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        .box{
            margin-top: 100px;
            width:800px;
            height:920px;
            border:solid 1px;

            box-shadow: 5px 6px 3px 1px black;
                        
        }
        .rodape{
                margin-top: 100px;
                margin-left: 300px;
                

            }
   		.teste{
                margin-top: 100px;
                margin-left: 300px;
                

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
<br><br><br><br><br><br>
                <form action="gravar-andamento.php" METHOD="GET">
                    <div class="row">
                    <input name="id" value="<?php echo $id; ?>" hidden>
                    <input name="nome" value="<?php echo $nome; ?>" hidden>

                    <p class="col s3">
                      <label>
                        <input name="status" type="radio" value="Em andamento" checked />
                        <span>Em andamento</span>
                      </label>
                    </p>
                    <p class="col s3">
                      <label>
                        <input name="status" type="radio" value="Pendencia" checked/>
                        <span>Pendência</span>
                      </label>
                    </p>
                    
                

                    <br>

                    <textarea placeholder="Digite aqui os detalhes do andamento" name='texto'></textarea>
                    <input type="submit"  value="Salvar" class="btn black">
                  </form>
                 </div>
             </div>
	
<br>


</body>
</html>
