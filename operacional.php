<?php include_once "autenticacao.php";  

include_once "conexao.php";

// conexão com o banco de dados 
 
//verifica a página atual caso seja informada na URL, senão atribui como 1ª página 
$pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1; 

//seleciona todos os itens da tabela 
$cmd = "select * from operacional"; 
$produtos = mysqli_query($con, $cmd); 

//conta o total de itens 
$total = mysqli_num_rows($produtos); 

//seta a quantidade de itens por página, neste caso, 2 itens 
$registros = 10; 

//calcula o número de páginas arredondando o resultado para cima 
$numPaginas = ceil($total/$registros); 

//variavel para calcular o início da visualização com base na página atual 
$inicio = ($registros*$pagina)-$registros; 

//seleciona os itens por página 
$cmd = "select * from operacional limit $inicio,$registros"; 
$produtos = mysqli_query($con, $cmd); 
$total = mysqli_num_rows($produtos); 
//exibe os produtos selecionados 




?>

<!DOCTYPE html>
<html lang="en">
    <head>
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
        .boxx{

            width:800px;
            height:120px;
            border:solid 1px;

            box-shadow: 5px 6px 8px 1px black;
                        
        }
        .rodape{
                margin-top: 100px;
                margin-left: 300px;
                

            }
             .data{
                margin-top: 100px;
                margin-left: 3000px;
                

            }

 
</style>

                            <script>

function confirmaExclusao(id,nome){            
    
    if(confirm('Deseja realmente excluir a proposta do cliente '+nome+' ?')){

        location.href="excluir-proposta.php?id="+id;

    }

}

</script>

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

                <h3> Propostas e andamentos</h3>

                <br><br>
                
                <?php 
                    
                while($produto = mysqli_fetch_array($produtos)){

                    $sql3 = "select status from pendencias where id_contrato = '".$produto['id']."'";
                    $result1 = mysqli_query($con, $sql3);
                    $status = mysqli_fetch_array($result1);


                   if($status['0'] == "Em andamento"){
                    $cor = "style='color:limeGreen;'";

                    }elseif($status['0'] == "Pendencia"){
                     $cor = "style='color:Gold;'";

                     }elseif($status['0']  == "Pago!"){
                     $cor = "style='color:blue;'";

                }elseif($status['0']  == "Cancelado"){
                     $cor = "style='color:red;'";}

                    ?>
                    <form action="prop.php" METHOD="GET">
            <div class="row">
                <div class="col s2">
                    <p id='data'><font size="1" > <?php echo $produto['data']; ?></font></p>
                </div>
                    <div class="col s2">

                    <p id='status' <?php echo $cor; ?>><font size="1"  > <?php echo $status['0']; ?></font></p>
                </div>
            </div>

                    <div class="boxx" id="ir">

                    <div class="row">
                        <div class="col s2" hidden>                    
                        <input type="text" name= 'id' value="<?php echo $produto['id']; ?>" hidden>
                        </div>

                        
                    </div>


                    <div class="row">

                    <br><div class=" col s4">
                    <?php echo "<b>Nome: </b>". $produto['nome'];  ?> 
                    </div>

                    <div class=" col s3">
                    <?php echo "<b>Banco: </b>".$produto['banco'];  ?> 
                    </div>

                    <div class="margem col s3">
                    <?php echo "<b>Margem: </b>".$produto['margem']."<br />";?>
                     </div>

                    <div class="col s2">
                    <?php echo "<b>Equipe: </b>".$produto['equipe']."<br />";?>
                     </div>

                    <br><br>


                    <div class="row" style="margin-left: 590px; margin-top: -5px;">

                        <div class=" col s6" >
                         <input type="submit" value="Verificar" class="btn black">    
                        </div>
                        <div class="center-align col s2"><a href="#" 
                            onclick="confirmaExclusao(<?php echo $produto['id']; ?>,'<?php echo $produto["nome"];?>')" class="btn red">
                            Excluir</a></div>


                    </div>



                      </div>
                      <br>
                    </div>
                     </form>
                     <br><br><br><br>

                     <?php
                } 
                                //exibe a paginação 

                 ?>

             
                </div>
                <br>
                <div class="rodape">
                <ul class="pagination">
                <?php
                        for($i = 1; $i < $numPaginas + 1; $i++) { ?>
                                <?php echo "<a href='operacional.php?pagina=$i' class='btn black'>".$i."</a> "; 
                        }  
                ?>  
                  </ul>

                              </div>

            </div>

                       
    </body>
</html>