<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?= $titulo; ?></title>
    </head>
    <body>
    <form method="GET" action="relatorio.php">
        <h1>Vendedor <?= $vendedor; ?></h1> 
        <?php $vendedor+=1; ?>
        <label>Nome: </label><br>
        <input type="text" name="vendedorNovo"><br>
        <label>Semanas: </label><br>
        <input type="number" name="s1"><br>
        <input type="number" name="s2"><br>
        <input type="number" name="s3"><br>
        <input type="number" name="s4"><br><br>
        <button>Adicionar</button>
    </form>
</body>
</html>