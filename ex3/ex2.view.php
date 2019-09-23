<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?= $titulo; ?></title>
    </head>
    <body>
        <form method="POST" action="relatorio.php">
            <h1>Vendedor <?= $vendedor; ?></h1> 
            <?php $vendedor+=1; ?>
            <label>Nome: </label><br>
            <input type="text" name="vendedor1"><br>
            <label>Semanas: </label><br>
            <input type="number" name="s11"><br>
            <input type="number" name="s12"><br>
            <input type="number" name="s13"><br>
            <input type="number" name="s14"><br><br>
            
            <h1>Vendedor <?= $vendedor; ?></h1> 
            <?php $vendedor+=1; ?>
            <label>Nome: </label><br>
            <input type="text" name="vendedor2"><br>
            <label>Semanas: </label><br>
            <input type="number" name="s21"><br>
            <input type="number" name="s22"><br>
            <input type="number" name="s23"><br>
            <input type="number" name="s24"><br><br>

            <h1>Vendedor <?= $vendedor; ?></h1> 
            <?php $vendedor+=1; ?>
            <label>Nome: </label><br>
            <input type="text" name="vendedor3"><br>
            <label>Semanas: </label><br>
            <input type="number" name="s31"><br>
            <input type="number" name="s32"><br>
            <input type="number" name="s33"><br>
            <input type="number" name="s34"><br><br>

            <h1>Vendedor <?= $vendedor; ?></h1> 
            <?php $vendedor+=1; ?>
            <label>Nome: </label><br>
            <input type="text" name="vendedor4"><br>
            <label>Semanas: </label><br>
            <input type="number" name="s41"><br>
            <input type="number" name="s42"><br>
            <input type="number" name="s43"><br>
            <input type="number" name="s44"><br><br>

            <button>Enviar</button>
        </form>
        <!-- <button>Adicionar</button> -->
    </body>
</html>