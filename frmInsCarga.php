<?php
include('protect.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <title>Cadastro de Carga</title>
</head>
<body>
<nav>
        <div class="nav-wrapper black">
            <a href="" class="brand-logo right"><img src="./imagens/volvo_fh.png" width="90"></a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="index.php">Acessar o Painel</a></li>
                <li><a href="frmInsImovel.php">Soluções Motorista</a></li>
            </ul>
            
        </div>
    </nav>
    <div class= "container grey darken-1">
    <div class = "red accent-4">
            <h1> <center>Cadastro de Carga</center> </h1>
            </div>
        <div class="row">
            <form action="insCarga.php" method= "post" id= "frmInsCarga" name="frmInsCarga" class= "col s12">
                <div class="input-field s8">
                    <label for="lblNome_Empresa" class="black-text">Empresa</label>
                    <input placeholder="" id="txt_Empresa" name= "txtEmpresa" type="text">                  
                </div>               
                <div class="input-field s8">
                    <label for="lblOrigem" class="black-text">Origem</label>
                    <input placeholder="" id="txt_Origem" name= "txtOrigem" type="text">                  
                </div>               
                <div class="input-field s8">
                    <label for="lblDestino" class="black-text">Destino</label>
                    <input placeholder="" id="txt_Destino" name= "txtDestino" type="text">                  
                </div>              
                <div class="input-field s8">
                    <label for="lblPostagem" class="black-text">Data Postagem</label>
                    <input placeholder="" id="txt_Data_Postagem" name= "txtPostagem" type="date">                  
                </div>              
                <div class="input-field s8">
                    <label for="lblValor" class="black-text">Valor</label>
                    <input placeholder="" id="txt_Valor" name= "txtValor" type="text">                  
                </div>         
                <div class="input-field s8">
                    <label for="lblEntrega" class="black-text">Data Entrega</label>
                    <input placeholder="" id="txt_Entrega" name= "txtEntrega" type="date">                  
                </div>
                <div class="input-field s8">
                    <label for="lblPeso" class="black-text">Peso</label>
                    <input placeholder="" id="txt_Peso" name= "txtPeso" type="text">                  
                </div>
                <div class="input-field s8">
                    <label for="lblVeiculo" class="black-text">Tipo Veículo</label>
                    <input placeholder="" id="txt_Veiculo" name= "txtVeiculo" type="text">                  
                </div>
                <div class="input-field s8">
                    <label for="lblCarga" class="black-text">Tipo Carga</label>
                    <input placeholder="" id="txt_Carga" name= "txtCarga" type="text">                  
                </div>
    
    <div class = "input-field col s8">
        <br>
            <button class="btn waves-effect waves-light green" type="submit" name="action">Salvar
                <i class="material-icons right"></i>
                    </button>
                    <button class="btn waves-effect waves-light red" type="reset" name="action">Limpar
                <i class="material-icons right"></i>
                    </button>

                    <button class="btn waves-effect waves-light  indigo darken-4" 
                    type="button" name="btnVoltar" onclick="JavaScript:location.href='painel.php'">
                    Voltar <i class="material-icons right"></i> 
                    </button>
    </div>

            </form>
    </div>
</body>
</html>