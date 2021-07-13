<?php include_once "autenticacao.php";  

include_once "conexao.php";

$id = $_GET["id"];


$sql = "SELECT * FROM operacional WHERE id LIKE '".$id."'";

$result = mysqli_query($con, $sql);

if($result){
$row = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html>
<head>
	<title> <?php echo $row["banco"]; echo " - "; echo $row["nome"]; ?>	</title>


 <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Propostas</title>
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
            height:930px;
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
	            <form action="andamento.php" METHOD="GET">

	            	<input type="text" name="id" value="<?php echo $id; ?>" hidden>
	            	<input type="text" name="nome" value="<?php echo $row["nome"]; ?>" hidden>

	            	<a href="operacional.php" class="btn red">Voltar</a>


	            	<input type="submit" style="margin-left:610px;" class="btn black" value="Atualizar">
	        	</form>

	<div class="box">
		<div class="row">		
			<div class="col s4">
				<label>Nome: </label><textarea id="msg" name="msg"/> <?php echo $row["nome"]; ?></textarea>

			</div>
			<div class="col s4">
				<label>CPF: </label><textarea id="msg" name="msg"/> <?php echo $row["cpf"]; ?></textarea>

			</div>
			<div class="col s2">
				<label>RG: </label><textarea id="msg" name="msg"/> <?php echo $row["rg"]; ?></textarea>

			</div>
		</div>


		<div class="row">		
			<div class="col s4">
				<label>Emissor: </label><textarea id="msg" name="msg"/> <?php echo $row["emissor"]; ?></textarea>

			</div>
			<div class="col s4">
				<label>Dt Expedição: </label><textarea id="msg" name="msg"/> <?php echo $row["expedicao"]; ?></textarea>

			</div>
			<div class="col s2">
				<label>Dt Nascimento: </label><textarea id="msg" name="msg"/> <?php echo $row["nascimento"]; ?></textarea>

			</div>

		</div>

<div class="row">		
			<div class="col s4">
				<label>Est. Civil: </label><textarea id="msg" name="msg"/> <?php echo $row["civil"]; ?></textarea>

			</div>
			<div class="col s4">
				<label>Profissão: </label><textarea id="msg" name="msg"/> <?php echo $row["profissao"]; ?></textarea>

			</div>
			<div class="col s2">
				<label>Orgão: </label><textarea id="msg" name="msg"/> <?php echo $row["orgao"]; ?></textarea>

			</div>

	</div>



	<div class="row">		
			<div class="col s4">
				<label>UPAG: </label><textarea id="msg" name="msg"/> <?php echo $row["upag"]; ?></textarea>

			</div>
			<div class="col s4">
				<label>Situação servidor/militar: </label><textarea id="msg" name="msg"/> <?php echo $row["situacao"]; ?></textarea>

			</div>
			<div class="col s2">
				<label>Matricula: </label><textarea id="msg" name="msg"/> <?php echo $row["matricula"]; ?></textarea>

			</div>

	</div>


	<div class="row">		
			<div class="col s4">
				<label>Endereço: </label><textarea id="msg" name="msg"/> <?php echo $row["endereco"]; ?></textarea>

			</div>
			<div class="col s4">
				<label>Bairro: </label><textarea id="msg" name="msg"/> <?php echo $row["bairro"]; ?></textarea>

			</div>
			<div class="col s2">
				<label>Municipio: </label><textarea id="msg" name="msg"/> <?php echo $row["cidade"]; ?></textarea>

			</div>

	</div>

		<div class="row">		
			<div class="col s4">
				<label>UP: </label><textarea id="msg" name="msg"/> <?php echo $row["uf"]; ?></textarea>

			</div>
			<div class="col s4">
				<label>CEP: </label><textarea id="msg" name="msg"/> <?php echo $row["cep"]; ?></textarea>

			</div>
			<div class="col s2">
				<label>Email: </label><textarea id="msg" name="msg"/> <?php echo $row["email"]; ?></textarea>

			</div>

	</div>

<div class="row">		
			<div class="col s4">
				<label>Celular: </label><textarea id="msg" name="msg"/> <?php echo $row["fone1"]; ?></textarea>

			</div>
			<div class="col s4">
				<label>Fone: </label><textarea id="msg" name="msg"/> <?php echo $row["fone1"]; ?></textarea>

			</div>
			<div class="col s2">
				<label>Fixo: </label><textarea id="msg" name="msg"/> <?php echo $row["fixo"]; ?></textarea>

			</div>

	</div>

 
<div class="row">		
			<div class="col s4">
				<label>Mãe: </label><textarea id="msg" name="msg"/> <?php echo $row["mae"]; ?></textarea>

			</div>
			<div class="col s4">
				<label>Pai: </label><textarea id="msg" name="msg"/> <?php echo $row["pai"]; ?></textarea>

			</div>
			<div class="col s2">
				<label>Naturalidade: </label><textarea id="msg" name="msg"/> <?php echo $row["naturalidade"]; ?></textarea>

			</div>

	</div>
	<div class="row">		
			<div class="col s4">
				<label>Nacionalidade: </label><textarea id="msg" name="msg"/> <?php echo $row["nacionalidade"]; ?></textarea>

			</div>

	</div>


	<div class="row">		
			<div class="col s4">
				<label>Operação: </label><textarea id="msg" name="msg"/> <?php echo $row["operacao"]; ?></textarea>

			</div>
			<div class="col s4">
				<label>Margem: </label><textarea id="msg" name="msg"/> <?php echo $row["margem"]; ?></textarea>

			</div>
			<div class="col s2">
				<label>Parcela: </label><textarea id="msg" name="msg"/> <?php echo $row["parcela"]; ?></textarea>

			</div>

	</div>


		<div class="row">		
			<div class="col s4">
				<label>Fator: </label><textarea id="msg" name="msg"/> <?php echo $row["fator"]; ?></textarea>

			</div>
			<div class="col s4">
				<label>Liquido: </label><textarea id="msg" name="msg"/> <?php echo $row["liquido"]; ?></textarea>

			</div>
			<div class="col s2">
				<label>Banco: </label><textarea id="msg" name="msg"/> <?php echo $row["banco"]; ?></textarea>

			</div>

		</div>
			<div class="row">		
			<div class="col s4">
				<label>Prazo: </label>
				<textarea id="msg" name="msg"/> <?php echo $row["prazo"]; ?></textarea>
			</div>
			
	<?php


	$sql2 = "select * from arquivosoperacional where nome like '".$row['nome']."'";

	$result2 = mysqli_query($con, $sql2);

	$row1 = mysqli_fetch_array($result2);
	

	?>
		<div class="col s3" >

			<a href="docs-clientes/<?php echo $row1['nome']; ?>/<?php echo $row1['arquivorg']; ?>" download class="btn black" >IDENTIDADE</a>
				</div>


				<div class="col s2">

			<a href="docs-clientes/<?php echo $row1['nome']; ?>/<?php echo $row1['arquivocpf']; ?>" download class="btn black" >C P F</a>
				</div>
				<div class="col s2">

			<a href="docs-clientes/<?php echo $row1['nome']; ?>/<?php echo $row1['res']; ?>" download class="btn black" >Comp. Res.</a>
				</div>
		</div>


		<div class="row">		
			<div class="col s4" >
				<label>Equipe: </label>
				<textarea id="msg" name="msg"/> <?php echo $row["equipe"]; ?></textarea>
			</div>


			<div class="col s3">

				<a href="docs-clientes/<?php echo $row1['nome']; ?>/<?php echo $row1['cc']; ?>" download class="btn black" >Contracheque</a>
			</div>
			<div class="col s2">

				<a href="docs-clientes/<?php echo $row1['nome']; ?>/<?php echo $row1['contrato']; ?>" download class="btn black" >Contrato</a>
			</div>
			<div class="col s2">

				<a href="docs-clientes/<?php echo $row1['nome']; ?>/<?php echo $row1['intecionamento']; ?>" download class="btn black" >Outros</a>
			</div>
		</div>


	</div>


</div>


</div>
	<br><br>
<br>


</body>
</html>

<?php
}
else
{

header('Location: operacional.php');

}



?>