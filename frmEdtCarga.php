<?php 
   
    $id = $_GET['id']; 

    include('protect.php');
    include 'conTransp.php';
    $sql = "select * from empregador where id=?;";
    $pdo = ConTransp::conectar(); 
    $query = $pdo->prepare($sql);
    $query->execute (array($id));
    $dados = $query->fetch(PDO::FETCH_ASSOC);

    ConTransp::desconectar(); 
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

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Editar Informações da Carga</title>
 </head>
 <body>
    <div class= "container brown lighten-4  black-text col s12">
        <div class="row">
            <form action="edtCarga.php" method="post" id="frmEdtCarga" class="col s12">
            <div class="input-field col s8">
                    <label for="lblid" class="black-text" >ID: <?php echo $dados['id'];?></label>
                    <br/>
                    <input type="hidden" name="id" id="id" value="<?php echo $id;?>">
                </div>

                <div class="input-field col s8">
                    <label for="lblNomeEmpresa" class="black-text">Informe o nome da empresa: </label> 
                    <input placeholder="" id="txt_empresa" name="txtEmpresa" value="<?php echo $dados['nome_empresa']?>" type="text">
                </div>

                <div class="input-field col s8">
                    <label for="lblOrigem" class="black-text">Informe a Origem: </label> 
                    <input placeholder="" id="txt_origem" name="txtOrigem" value="<?php echo $dados['origem']?>" type="text">
                </div>
                
                <div class="input-field col s8">
                    <label for="lblDestino" class="black-text">Informe o Destino: </label> 
                    <input placeholder="" id="txt_destino" name="txtDestino" value="<?php echo $dados['destino']?>" type="text">
                </div>
                
                <div class="input-field col s8">
                    <label for="lblPostagem" class="black-text">Informe a Data de Postagem: </label> 
                    <input placeholder="" id="txt_postagem" name="txtPostagem" value="<?php echo $dados['data_postagem']?>" type="date">
                </div>
                
                <div class="input-field col s8">
                    <label for="lblValor" class="black-text">Informe o Valor: </label> 
                    <input placeholder="" id="txt_valor" name="txtValor" value="<?php echo $dados['valor']?>" type="text">
                </div>
                
                <div class="input-field col s8">
                    <label for="lblEntrega" class="black-text">Informe a Data de Entrega: </label> 
                    <input placeholder="" id="txt_entrega" name="txtEntrega" value="<?php echo $dados['data_entrega']?>" type="date">
                </div>
                
                <div class="input-field col s8">
                    <label for="lblPeso" class="black-text">Informe o Peso: </label> 
                    <input placeholder="" id="txt_peso" name="txtPeso" value="<?php echo $dados['peso']?>" type="text">
                </div>
                
                <div class="input-field col s8">
                    <label for="lblVeiculo" class="black-text">Informe a Tipo de Veículo: </label> 
                    <input placeholder="" id="txt_veiculo" name="txtVeiculo" value="<?php echo $dados['tipo_veiculo']?>" type="text">
                </div>
                
                <div class="input-field col s8">
                    <label for="lblCarga" class="black-text">Informe O Tipo de Carga: </label> 
                    <input placeholder="" id="txt_carga" name="txtCarga" value="<?php echo $dados['tipo_carga']?>" type="text">
                </div>
                <div class = "input-field col s8">
                    <br>
                    <button class="btn waves-effect waves-light green" type="submit" >Salvar
                        <i class="material-icons right">save</i>
                    </button>
                    <button class="btn waves-effect waves-light red" type="reset" >Limpar
                        <i class="material-icons right">brush</i>
                    </button>

                    <button class="btn waves-effect waves-light  indigo darken-4" 
                    type="button" id="btnVoltar" onclick="JavaScript:location.href='lstCarga.php'">
                    Voltar <i class="material-icons right">arrow_back</i> 
                    </button>
     
                </div>

            </form>

        </div>
    </div>
    
 </body>
 </html>