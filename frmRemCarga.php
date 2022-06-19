<?php 
   
   $id = $_GET['id']; 

   //include('protect.php');
   include 'conTransp.php';
   $sql = "select * from empregador where id=?;";
   $pdo = conTransp::conectar(); 
   $query = $pdo->prepare($sql);
   $query->execute (array($id));
   $dados = $query->fetch(PDO::FETCH_ASSOC);

   conTransp::desconectar(); 
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
   <title>Remover Carga do Portal</title>
</head>
<body>
<div class= "container brown lighten-4  black-text col s12">
       <div class = "brown lighten-2 col s12">
           <h1>Remover Carga do Sistema</h1>
       </div>
       <div class="row">
           <form action="remCarga.php" method="POST" id="frmRmvCrg"  class="col s12">
               <div class="input-field col s8">
                   <label for="lblid" class="black-text" >ID: <?php echo $dados['id'];?></label>
                   <br/>
                   <input type="hidden" name="id" id="id" value="<?php echo $id;?>">
               </div>
               <div class="row">
                   <div class="input-field col s12">
                      <label for="lblEmpresa"><h5><b>Empresa: </b><?php echo $dados['nome_empresa'];?></h5></label>
                  </div>
               </div>
               <div class="row">
                   <div class="input-field col s12">
                      <label for="lblOrigem"><h5><b>Origem: </b><?php echo $dados['origem'];?></h5></label>
                  </div>
               </div>
               <div class="row">
                   <div class="input-field col s12">
                      <label for="lblDestino"><h5><b>Destino: </b><?php echo $dados['destino'];?></h5></label>
                  </div>
               </div>
               <div class="row">
                   <div class="input-field col s12">
                      <label for="lblPostagem"><h5><b>Postagem: </b><?php echo $dados['data_postagem'];?></h5></label>
                  </div>
               </div>
               <div class="row">
                   <div class="input-field col s12">
                      <label for="lblValor"><h5><b>Valor: </b><?php echo $dados['valor'];?></h5></label>
                  </div>
               </div>
               <div class="row">
                   <div class="input-field col s12">
                      <label for="lblEntrega"><h5><b>Entrega: </b><?php echo $dados['data_entrega'];?></h5></label>
                  </div>
               </div>
               <div class="row">
                   <div class="input-field col s12">
                      <label for="lblPeso"><h5><b>Peso: </b><?php echo $dados['peso'];?></h5></label>
                  </div>
               </div>
               <div class="row">
                   <div class="input-field col s12">
                      <label for="lblVeiculo"><h5><b>Tipo de Veículo: </b><?php echo $dados['tipo_veiculo'];?></h5></label>
                  </div>
               </div>
               <div class="row">
                   <div class="input-field col s12">
                      <label for="lblCarga"><h5><b>Tipo de Carga: </b><?php echo $dados['tipo_carga'];?></h5></label>
                  </div>
               </div>
               

               <br/>
               <br/>
               <div class="row">
                   <div class="input-field col s12">

                   
                    <button class="btn waves-effect waves-light red" type="submit"
                           name="action">Remover
                        <i class="material-icons right">delete</i>
                    </button>
 

                   <a class="waves-effect waves-light btn blue" 
                      onclick="JavaScript:location.href='lstCarga.php'">
                      <i class="material-icons right">arrow_back</i>Voltar</a>


                   </div>
              </div>
            </form>
        </div>  
    </div>
   
</body>
</html>