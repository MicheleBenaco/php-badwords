<!-- nome del file == a quello dell'action -->


<?php
    // quadre mettere in name dell'imput 
$nome = $_GET['nome'];
$badParola =$_GET['badParola'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo "ciao $nome" ?></h1>

        <!-- per stampare la lunghezza devo usare eco prima di strlen -->
    <h2>E sono lungo : <?php echo strlen($nome); ?></h2>
    <h2> <?php
    echo str_replace("$badParola","****","$badParola");
        ?>
    </h2>
    <h1> <?php echo strlen($nome + $badParola ) ?></h1>

</body>
</html>