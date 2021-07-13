<?php 
include_once "autenticacao.php";  

include_once "conexao.php";

$id = $_GET["id"];

$sql = "SELECT * FROM arquivosoperacional WHERE id LIKE '".$id."'";

$result = mysqli_query($con, $sql);

if($result){
$row1 = mysqli_fetch_array($result);
}

?>


<!DOCTYPE html>
<html>
<head>
	<title> Atualizar Documentos	</title>


 <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar proposta</title>
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
                

            }
   #msg{ width: 250px; height: 25px; resize: none;}


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
	
	<h3>Atualizar documentos</h3>

	<form action="docs-atualizados.php" METHOD="POST" enctype="multipart/form-data">
				<div class="row">
				<div class="col s4">
					<input type="TEXT" name="nome" value="<?php echo $row1['nome'];  ?>" hidden  ><br>
				<input type="TEXT" name="id" value="<?php echo $row1['id'];  ?>" hidden ><br>

				</div>
				</div>

				<div>
				<h5>RG</h5>
				<input type="file" name="fotorg" accept=".png, .jpeg, .jpg, .pdf" ><br>
				<label>.png, .jpeg, .jpg, .pdf </label>
				</div>
<br>
				<div>

				<h5>CPF</h5><br>
				<input type="file" name="fotocpf" accept=".png, .jpeg, .jpg, .pdf" ><br>
				<label>.png, .jpeg, .jpg, .pdf </label>

				</div>
				<br>
				<div>
				<div>

				<h5>Comprovante de residência</h5><br>
				<input type="file" name="res" accept=".png, .jpeg, .jpg, .pdf"><br>
				<label>.png, .jpeg, .jpg, .pdf </label>

				</div><br>

				<h5>Contrato</h5><br>
				<input type="file" name="contrato" accept=".zip, .rar, .pdf" ><br>
				<label>.zip, .rar, .pdf </label>

				</div>
				<br>
				<div>

				<h5>Contra Cheques</h5><br>
				<input type="file" name="cc" accept=".png, .jpeg, .jpg, .pdf" ><br>
				<label>.png, .jpeg, .jpg, .pdf </label>

				</div>
				<br>
				
				
				<div>

				<h5>Outras opções(intencionamento, foto do cliente e etc)</h5><br>
				<input type="file" name="intencionamento" accept=".png, .jpeg, .jpg, .zip, .rar, .pdf" ><br>
				<label>.png, .jpeg, .jpg, .zip, .rar, .pdf </label>

				</div>
				<br>
				<br>
				            <input type="submit" class="btn black" value="Atualizar documentos">
<br><br><br><br>

		</form> 

</body>
</html>