<?php 
    // codice php 
    $name='Michele'
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>PHP ES1 </title>
</head>
<body>

    <h1><?php echo $name ?> </h1>

    <div class="container-md">
        <form action="parole.php"methods="GET">
            <input type="text" name="nome">
            <input type="text" name="badParola">
            <button type="submit">invia</button>
        </form>

    </div>



    
</body>
</html>