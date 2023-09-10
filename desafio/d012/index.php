<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota {
            height: 50px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php 
        $saque = $_REQUEST['saque'] ?? 0;
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="saque">Qual valor deseja sacar? (R$)<sup>*</sup></label>
            <input type="number" name="saque" id="saque" step="1" required value="<?=$saque?>">
            <p style="font-size: 0.7em"><sup>*</sup>Notas disponíveis: R$100, R$50, R$20 R$10, R$5 e R$2</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <?php 
            $resto = $saque;

            $tot100 = floor($resto / 100);
            $resto %= 100;

            $tot50 = floor($resto / 50);
            $resto %= 50;

            $tot20 = floor($resto / 20);
            $resto %= 20;
            
            $tot10 = floor($resto / 10);
            $resto %= 10;

            $tot5 = floor($resto / 5);
            $resto %= 5;

            $tot2 = floor($resto / 2);
            $resto %= 2;

        ?>
        <h2>Saque de R$<?=number_format($saque, 2, ",", ".")?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="img/100-reais.jpg" alt="Nota de 100 reais" class="nota"> <strong>x<?=$tot100?></strong></li>
            <li><img src="img/50-reais.jpg" alt="Nota de 50 reais" class="nota"> <strong>x<?=$tot50?></strong></li>
            <li><img src="img/20-reais.jpg" alt="Nota de 20 reais" class="nota"> <strong>x<?=$tot20?></strong></li>
            <li><img src="img/10-reais.jpg" alt="Nota de 10 reais" class="nota"> <strong>x<?=$tot10?></strong></li>
            <li><img src="img/5-reais.jpg" alt="Nota de 5 reais" class="nota"> <strong>x<?=$tot5?></strong></li>
            <li><img src="img/2-reais.jpg" alt="Nota de 2 reais" class="nota"> <strong>x<?=$tot2?></strong></li>
        </ul>
    </section>
</body>
</html>