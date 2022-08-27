<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $numalunos = $_POST["numalunos"];
    do{ ?>
        <form action="6vaçodador.php" method="POST">

        <input type="text" name="nome_aluno" placeholder="Digite aqui o nome do aluno"><br><br>
        <input type="text" name="idade_aluno" placeholder="Digite aqui a idade do aluno"><br><br>
        <input type="text" name="media_aluno" placeholder="Digite aqui a média do aluno"><br><br>
        <input type="submit" name="enviar">
        </form>
        
    <?php $numalunos--;}while($numalunos > 0);?>
</body>
</html>
</body>
</html>