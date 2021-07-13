<?php include_once "autenticacao.php";  

include_once "conexao.php";

$id = $_GET["id"];


$sql = "SELECT * FROM operacional WHERE id LIKE $id";

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
	<h3>Editar proposta</h3>

	            	<input type="text" name="id" value="<?php echo $id; ?>" hidden>
	            	<input type="text" name="nome" value="<?php echo $row["nome"]; ?>" hidden>
				<div class="row">
					<div class="col s2">
						<a href="operacional.php" class="btn red">Voltar</a>
	           		 </div>
	            	 <div class="col s2">

							<form action="atualizar-docs.php" METHOD="GET">
								<input type="text" name="id" value="<?php echo $id; ?>" hidden>
								<?php 
								$a = "select status from pendencias where id_contrato = '".$id."'";
									$result = mysqli_query($con, $a);
									if($result == "Pendencia"){

									
								 ?>
								<input type="submit" style="margin-left:385px;" class="btn black" value="Re-enviar documentos">
							<?php }?>
							</form>
					</div>	    
				</div>       



					<div class="row">
					<div class="col s2"> 

							<form action="andamento-atualizado.php" METHOD="GET">
								<input type="text" name="id" value="<?php echo $id; ?>" hidden>
								<input type="text" name="nome" value="<?php echo $row["nome"]; ?>" hidden>
								<?php 
								
									if($result == "Pendencia"){

									
								 ?>
								<input type="submit" style="margin-left:612px;" class="btn black" value="Tirar pendencia">
							<?php }
								?>
							</form>

					</div>
					</div>




	<form action="atualizar-proposta.php" METHOD="POST">


	<div class="box">
		<div class="row">		
			<input type="text" name="id" value="<?php echo $id; ?>" hidden>

			<div class="col s4">
				<label>Nome: </label><textarea type="text"  id="msg" name="nome" ><?php echo $row['nome']; ?></textarea>

			</div>
			<div class="col s4">
				<label>CPF: </label><textarea id="msg" name="cpf"/> <?php echo $row["cpf"]; ?></textarea>

			</div>
			<div class="col s2">
				<label>RG: </label><textarea id="msg" name="rg"/> <?php echo $row["rg"]; ?></textarea>

			</div>
		</div>


		<div class="row">		
			<div class="col s4">
				<label>Emissor: </label><textarea id="msg" name="emissor"/> <?php echo $row["emissor"]; ?></textarea>

			</div>
			<div class="col s4">
				<label>Dt Expedição: </label><textarea id="msg" name="expedicao"/> <?php echo $row["expedicao"]; ?></textarea>

			</div>
			<div class="col s2">
				<label>Dt Nascimento: </label><textarea id="msg" name="nascimento"/> <?php echo $row["nascimento"]; ?></textarea>

			</div>

		</div>

<div class="row">		
			<div class="col s4">
				  <select class="browser-default " name="civil">

                <option value="" disabled selected>Estado Civil</option>
                              
                <option value="Solteiro(a)">Solteiro(a)</option>
                <option value="Casado(a)">Casado(a)</option>
                <option value="Divorciado(a)">Divorciado(a)</option>
                <option value="Viúvo(a)">Viúvo(a)</option>




            </select>

			</div>
			<div class="col s4">
				<label>Profissão: </label><textarea id="msg" name="profissao"/> <?php echo $row["profissao"]; ?></textarea>

			</div>
			<div class="col s2">
				<label>Orgão: </label><textarea id="msg" name="orgao"/> <?php echo $row["orgao"]; ?></textarea>

			</div>

	</div>



	<div class="row">		
			<div class="col s4">
				<label>UPAG: </label><textarea id="msg" name="upag"/> <?php echo $row["upag"]; ?></textarea>

			</div>
			<div class="col s4">
			  <select class="browser-default " name="situacao">

                <option value="" disabled selected>Situação Servidor/militar</option>
                              
                <option value="Ativo">Ativo</option>
                <option value="Inativo">Inativo</option>
                <option value="Aposentado">Aposentado</option>




            </select>
			</div>
			<div class="col s2">
				<label>Matricula: </label><textarea id="msg" name="matricula"/> <?php echo $row["matricula"]; ?></textarea>

			</div>

	</div>


	<div class="row">		
			<div class="col s4">
				<label>Endereço: </label><textarea id="msg" name="endereco"/> <?php echo $row["endereco"]; ?></textarea>

			</div>
			<div class="col s4">
				<label>Bairro: </label><textarea id="msg" name="bairro"/> <?php echo $row["bairro"]; ?></textarea>

			</div>
			<div class="col s2">
				<label>Municipio: </label><textarea id="msg" name="cidade"/> <?php echo $row["cidade"]; ?></textarea>

			</div>

	</div>

		<div class="row">		
			<div class="col s4">
				<label>UP: </label><textarea id="msg" name="uf"/> <?php echo $row["uf"]; ?></textarea>

			</div>
			<div class="col s4">
				<label>CEP: </label><textarea id="msg" name="cep"/> <?php echo $row["cep"]; ?></textarea>

			</div>
			<div class="col s2">
				<label>Email: </label><textarea id="msg" name="email"/> <?php echo $row["email"]; ?></textarea>

			</div>

	</div>

<div class="row">		
			<div class="col s4">
				<label>Celular: </label><textarea id="msg" name="fone1"/> <?php echo $row["fone1"]; ?></textarea>

			</div>
			<div class="col s4">
				<label>Fone: </label><textarea id="msg" name="fone2"/> <?php echo $row["fone2"]; ?></textarea>

			</div>
			<div class="col s2">
				<label>Fixo: </label><textarea id="msg" name="fixo"/> <?php echo $row["fixo"]; ?></textarea>

			</div>

	</div>

 
<div class="row">		
			<div class="col s4">
				<label>Mãe: </label><textarea id="msg" name="mae"/> <?php echo $row["mae"]; ?></textarea>

			</div>
			<div class="col s4">
				<label>Pai: </label><textarea id="msg" name="pai"/> <?php echo $row["pai"]; ?></textarea>

			</div>
			<div class="col s2">
				<label>Naturalidade: </label><textarea id="msg" name="natural"/> <?php echo $row["naturalidade"]; ?></textarea>

			</div>

	</div>
	<div class="row">		
			<div class="col s4">
				<label>Nacionalidade: </label><textarea id="msg" name="nacionalidade"/> <?php echo $row["nacionalidade"]; ?></textarea>

			</div>

	</div>


	<div class="row">		
			<div class="col s4">
				<label>Operação: </label><textarea id="msg" name="operacao"/> <?php echo $row["operacao"]; ?></textarea>

			</div>
			<div class="col s4">
				<label>Margem: </label><textarea id="msg" name="margem"/> <?php echo $row["margem"]; ?></textarea>

			</div>
			<div class="col s2">
				<label>Parcela: </label><textarea id="msg" name="parcela"/> <?php echo $row["parcela"]; ?></textarea>

			</div>

	</div>


		<div class="row">		
			<div class="col s4">
				<label>Fator: </label><textarea id="msg" name="fator"/> <?php echo $row["fator"]; ?></textarea>

			</div>
			<div class="col s4">
				<label>Liquido: </label><textarea id="msg" name="liquido"/> <?php echo $row["liquido"]; ?></textarea>

			</div>
			<div class="col s2">
				<label>Banco: </label><textarea id="msg" name="banco"/> <?php echo $row["banco"]; ?></textarea>

			</div>

		</div>
			<div class="row">		
			<div class="col s4">
				<label>Prazo: </label>
				<textarea id="msg" name="prazo"/> <?php echo $row["prazo"]; ?></textarea>
			</div>
			<div class="col s4" hidden>
				<label>Equipe: </label>
				<textarea id="msg" name="equipe"/> <?php echo $row["equipe"]; ?></textarea>
			</div>
		</div>
		
	

				<?php 
								
									if($result == "Pendencia"){

									
								 ?>
	<input type="submit" style="margin-left:450px;" class="btn black" value="Re-enviar para o operacional">
        	<?php } ?>
        	</form>

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