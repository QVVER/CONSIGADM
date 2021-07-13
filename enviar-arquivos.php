<?php include_once "autenticacao.php";   
include_once "conexao.php";   
$sql = "SELECT MAX(id) FROM operacional";
$result1 = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result1);


$sql1 = "SELECT nome FROM operacional WHERE id like '".$row['0']."'";
$result2 = mysqli_query($con, $sql1);
$row1 = mysqli_fetch_array($result2);
?> 


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Enviar arquivos</title>
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
<body>

 <div class="container"> 
 <br>
    <br>
        <a href="propostas.php" class="btn red">Voltar</a>

        <h1>Digitação</h1>
<br><br><br>

		<form action="arquivos.php" METHOD="POST" enctype="multipart/form-data">
				<div class="row">
				<div class="col s4">
					<input type="TEXT" name="nome" value="<?php echo $row1['0'];  ?>" hidden ><br>
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
				            <input type="submit" class="btn black" value="Upload">
<br><br>
		</form> 
</div>

</body>
        </html>