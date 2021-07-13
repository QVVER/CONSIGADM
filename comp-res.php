
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF</title>
    <style> 
    #container {
  position: relative;
}
</style>


    

</head>
<body>
<a href="menu.php" class="red" ><button>Voltar</button></a><br><br>

    <div id="container">
   
                <form action="comp.php" METHOD="GET">

                <input type="text" name="nome"  placeholder="Nome Completo" required>    
                <input type="text" size="40" name="endereco" placeholder="PADRAO:Rua número - complemento - bairro" required>
                <input type="text" name="cep" size="40" placeholder="PADRAO: CEP(12345-678) - MUNICIPIO - UF" required>


            <br><br>

            <input type="text" name="valor" placeholder="Valor Conta" required>
            <input type="text" name="vencimento" maxlength="10" placeholder="Vencimento" required>
            <input type="text" name="emissao" maxlength="10" placeholder="Emissão" required>
            <input type="text" name="periodo1" maxlength="10" placeholder="Periodo util: 1ª data" required>
            <input type="text" name="periodo2" maxlength="10" placeholder="Periodo util: 2ª data" required>
            <input type="text" name="mesref" maxlength="6" placeholder="Mês referencia: MAI/20" required>

            <br><br>
            <input type="text" size="40" name="mes1" maxlength="6" placeholder="Mês Atual. Ex: Jan 2020" required>
            <input type="text" size="40" name="mes2" maxlength="6" placeholder="Mês passado. Ex: Fev 2020" required>
            <input type="text" size="40" name="mes3" maxlength="6" placeholder="Mês retras. Ex: Mar 2020" required>
            <input type="text" size="40" name="mes4" maxlength="6" placeholder="Mês antepass. Ex: Abr 2020" required>

            <br><br>
            <input type="submit" class="btn" value="Montar Comprovante">
                
                
                
                
                
                </form>




    </div>    
</body>
</html>