
<?php include_once "autenticacao.php";   
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Envio de proposta</title>
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
<br><br><br>

        <form action="digitado.php" method="POST">
        <div class="row">
            <div class="col s2">
                <label>Nome</label>
                <input type="text" name="nome" id="nome" required>
            </div>

            <div class="col s2">
                <label>cpf</label>
                <input type="text" name="cpf" id="cpf" required>
            </div>
            <div class="col s2">
                <label>rg</label>
                <input type="text" name="rg" id="rg" required>
            </div>
            <div class="col s2">
                <label>Emissor</label>
                <input type="text" name="emissor" id="emissor" required>
            </div>
            <div class="col s2">
                <label>Expedição</label>
                <input type="text" name="expedicao" id="expedicao" required>
            </div>
            <div class="col s2">
                <label>Nascimento</label>
                <input type="text" name="nascimento" id="nascimento" required>
            </div>
        </div>
<br><br><br>
        <div class="row">
            <div class="col s2">

                <select class="browser-default " name="civil">

                <option value="" disabled selected>Estado Civil</option>
                              
                <option value="Solteiro(a)">Solteiro(a)</option>
                <option value="Casado(a)">Casado(a)</option>
                <option value="Divorciado(a)">Divorciado(a)</option>
                <option value="Viúvo(a)">Viúvo(a)</option>




            </select>
            </div>


            <div class="col s2">
                <label>Profissão</label>
                <input type="text" name="profissao" id="profissao" required>
            </div>
             <div class="col s2">
                <label>Orgão</label>
                <input type="text" name="orgao" id="orgao" required>
            </div>
             <div class="col s2">
                <label>UPAG</label>
                <input type="text" name="upag" id="upag" required>
            </div>
             <div class="col s3">
            <select class="browser-default " name="situacao">

                <option value="" disabled selected>Situação Servidor/militar</option>
                              
                <option value="Ativo">Ativo</option>
                <option value="Inativo">Inativo</option>
                <option value="Aposentado">Aposentado</option>




            </select>
            </div>
            </div>
            <br><br><br>
            <div class="row">

                

            <div class="col s3">
                <label>Endereço</label>
                <input type="text" name="endereco" id="endereco" required>
            </div>

            <div class="col s2">
                <label>Bairro</label>
                <input type="text" name="bairro" id="bairro" required>
            </div>
            <div class="col s2">
                <label>Cidade</label>
                <input type="text" name="cidade" id="cidade" required>
            </div>
            <div class="col s1">
                <label>UF</label>
                <input type="text" maxlength="2" name="uf" id="uf" required>
            </div>
            <div class="col s2">
                <label>CEP</label>
                <input type="text" maxlength="9" name="cep" id="cep" required>
            </div>

            </div>
                        <br><br><br>

            <div class="row">

            <div class="col s5">
                <label>E-mail</label>
                <input type="email"  name="email" id="email" required>
            </div>
            <div class="col s2">
                <label>Celular</label>
                <input type="text"  name="fone1" id="fone1" required>
            </div>
            <div class="col s2">
                <label>Telefone</label>
                <input type="text"  name="fone2" id="fone2"  >
            </div>
            <div class="col s2">
                <label>Fixo</label>
                <input type="text"  name="fixo" id="fixo" >
            </div>

            </div>
                        <br><br><br>

            <div class="row">

            <div class="col s3">
                <label>Mãe</label>
                <input type="text"  name="mae" id="mae" required>
            </div>
            <div class="col s3">
                <label>Pai</label>
                <input type="text"  name="pai" id="pai" >
            </div>

            <div class="col s3">
                <label>Naturalidade</label>
                <input type="text"  name="natural" id="natural" required >
            </div>
            <div class="col s3">
                <label>Nacionalidade</label>
                <input type="text"  name="nacionalidade" id="nacionalidade" required>
            </div>
            </div>
<br><br><br>
            <div class="row">
                <div class="col s1">
                    <label>Matricula</label>
                    <input type="text"  name="matricula" id="matricula" required>
                </div>
                <div class="col s2">
                    <select class="browser-default " name="operacao" required>

                    <option value="" disabled selected>Operação</option>
                                  
                    <option value="Novo">Novo</option>
                    <option value="Portabilidade">Portabilidade</option>
                    <option value="Compra de divida">Compra de divida</option>
                    <option value="Refinanciamento">Refinanciamento</option>
                    <option value="Cartão">Cartão</option>
                    <option value="CDC">CDC</option>
                </select>
            </div>

                <div class="col s1">
                    <label>Margem</label>
                    <input type="text"  name="margem" id="margem" required>
                </div>
                <div class="col s2">
                    <label>Parcela</label>
                    <input type="text"  name="parcela" id="parcela" required>
                </div>
                <div class="col s1">
                    <label>Fator</label>
                    <input type="text"  name="fator" id="fator" required>
                </div>
                <div class="col s2">
                    <label>Liquido</label>
                    <input type="text"  name="liquido" id="liquido" required>
                </div>
                <div class="col s2">
                    <label>Banco</label>
                    <input type="text"  name="banco" id="banco" required>
                </div>
                <div class="col s1">
                    <label>Prazo</label>
                    <input type="text" maxlength="2" name="prazo" id="prazo" required>
        
        </div>        </div>
<br><br>
<div class="row">
<div class="col s2">
                     <select class="browser-default " name="equipe">

                                        <option value="" disabled selected>Equipe</option>
                                        <?php
                                        include 'conexao.php';
                                        if($_SESSION["perfil"] == "gestor"){
                                            $sql = "SELECT * FROM equipes WHERE perfil like '".$_SESSION['equipe']."'";
                                        
                                        }elseif($_SESSION["perfil"] == "adm" or "operacional"){
                                            $sql = "SELECT * FROM equipes";
                                        }
                                        $result = mysqli_query($con,$sql);

                                            while($row = mysqli_fetch_array($result)){
                                                ?>
                                                
                                                <option value="<?php echo $row['perfil'] ?>"><?php echo $row['perfil'] ?></option>

                                                <?php
                                            }
                                            mysqli_close($con); ?>
                                            </select>
                </div></div>
                <br><br><br><br>

                <input type="submit" value="Enviar dados" class="btn black" required>

            </div>
<br><br><br><br>
<br><br><br><br>
        </form>




</div>

   <script src="materialize/js/materialize.min.js">   </script>     
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="materialize/js/materialize.min.js"></script> 
        <script src="js/maskedinput-1.4.1.js"></script> 
        <script src="js/jquery.validate.js"></script> 
        
        <script>
            $(document).ready(function(){

                $('#expedicao').mask("99/99/9999");
                $('#nascimento').mask("99/99/9999");
                $('#cep').mask("99999-999");
                $('#rg').mask("99.999.999-9");
                $('#cep').mask("99999-999");


                $('#fone1').mask("(99)99999-9999");
                $('#fone2').mask("(99)99999-9999");

                $('#fixo').mask("(99)9999-9999");

                $('#cpf').mask("999.999.999-99");

                $('form').validate();

            });
        </script>
</body>
</html>
