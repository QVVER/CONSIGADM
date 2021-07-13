<?php include_once "autenticacao.php";   
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Menu</title>
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
                
                <h3> Painel do Sistema</h3>

                <p> Seja Bem Vindo(a) <?php echo utf8_encode($_SESSION["nome"]); ?> </p>
                <h4> Menu </h4>

                    <?php 
                    
                    if($_SESSION["perfil"] == "adm"){ ?>
                                    
            <a href="registro.php" class="btn blue"> Registro de cessão</a> <!-- Ok -->
            <a href="visita.php" class="btn blue"> Registro de visitas</a>
            <a href="metas.php" class="btn black"> Metas</a>
            <a href="funcionarios.php" class="btn blue"> Funcionários</a>
            <a href="comp-res.php" class="btn grey cyan pulse" > Gerar comprovante</a>


            <br><br>
            <a href="menu-projecao.php" class="btn blue"> Menu Projeção</a>
            <a href="usuarios.php" class="btn blue"> Usuários</a>

            <a href="producao.php" class="btn black"> Produção</a>
            <a href="menu-acompanhar.php" class="btn black"> Acompanhar</a>
            <a href="datacliente.php" class="btn black"> Clientes </a>
            <a href="propostas.php" class="btn black"> Propostas Operacional </a>

    



<a href="sair.php" class="btn red">Sair</a> <?php
                    }elseif($_SESSION["perfil"] == "gestor"){
                        ?>
                        <a href="registro.php" class="btn blue"> Registro de cessão</a> <!-- Ok -->
                        <a href="visita.php" class="btn blue"> Registro de visitas</a>
                        <a href="funcionarios.php" class="btn blue"> Funcionários</a>
                        <a href="producao.php" class="btn black"> Produção</a>
                        <a href="menu-projecao.php" class="btn blue"> Acompanhar Projeção</a>
                        <br>                        <br>

                        <a href="clientes.php" class="btn black"> Clientes </a>
                        <a href="comp-res.php" class="btn grey cyan pulse"> Gerar comprovante</a>
                        <a href="propostas.php" class="btn black"> Propostas Operacional </a>

            
            
                
            
            <a href="sair.php" class="btn red">Sair</a>
                            <?php    }                    
                            elseif($_SESSION["perfil"] == "operacional"){ ?>

                                <a href="producao.php" class="btn black"> Produção </a>
                                <a href="clientes.php" class="btn black"> Clientes </a>
                                <a href="propostas.php" class="btn black"> Registro de Proposta </a>
                                <a href="operacional.php" class="btn black"> Propostas do comercial </a>
                                <a href="comp-res.php" class="btn grey  cyan pulse"> Gerar comprovante</a>

            
            
                
            
                                <a href="sair.php" class="btn red">Sair</a>

<?php
                            }

                       
                    ?>
                    
            </div>

        
        
    </body>
</html>