<?php
    include "conTransp.php";
    include('protect.php');
    $sql = "select * from empregador order by id";
    $pdo = conTransp::conectar(); 
    $lstCarga = $pdo->query($sql); 
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

    <title>Lista de Cargas</title>
</head>
<body>
<div class="card-panel grey darken-1">
       <H1>Lista de Cargas
           <a class="btn-floating btn-large waves-effect waves-light green" 
              onclick="JavaScript:location.href='frmInsCarga.php'">
              <i class="material-icons">add</i>
          </a>

       </H1>
    </div>


    <table class="striped blue lighten-4">
        <tr>
            <th>ID</th>
            <th>NOME DA EMPRESA</th>
            <th>ORIGEM</th>
            <th>DESTINO</th>
            <th>DATA POSTAGEM</th>
            <th>VALOR</th> 
            <th>DATA ENTREGA</th>
            <th>PESO</th>
            <th>TIPO VEICULO</th>
            <th>TIPO CARGA</th>
            <th></th>
        </tr>
        <?php 
           foreach($lstCarga as $empregador) {
        ?>
        <tr>
            <td><?php echo $empregador['id']?> </td>
            <td><?php echo $empregador['nome_empresa']?> </td>
            <td><?php echo $empregador['origem']?> </td>
            <td><?php echo $empregador['destino']?> </td>
            <td><?php echo $empregador['data_postagem']?> </td>
            <td><?php echo $empregador['valor']?> </td>
            <td><?php echo $empregador['data_entrega']?> </td>
            <td><?php echo $empregador['peso']?> </td>
            <td><?php echo $empregador['tipo_veiculo']?> </td>
            <td><?php echo $empregador['tipo_carga']?> </td>
            <td>  <a class="btn-floating btn-small waves-effect waves-light orange"
                   onclick="JavaScript:location.href='frmEdtCarga.php?id=' + 
                           <?php echo $empregador['id'];?>">
                        <i class="material-icons">edit</i>
                    </a>
                    <a class="btn-floating btn-small waves-effect waves-light red"
                      onclick="JavaScript:location.href='frmRemCarga.php?id=' + 
                           <?php echo $empregador['id'];?>">
                        <i class="material-icons">delete</i>
                    </a>
            </td>
        </tr> 
        <?php } ?>
    </table>
    </div>
</body>
</html>