<?php

include('protect.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>
<body>
    Bem vindo ao Painel, <?php echo $_SESSION['nome']; ?>

    <p></p>
    <p>O que deseja fazer?</p>
    
    <a href="frmInsCarga.php"><button>Cadastrar Carga</button></a>
    <button>Realizar Pagamento</button>
    <a href="logout.php"><button>Sair</button></a>

    <p>
        
    </p>
</body>
</html>