<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio Maquina do tempo"</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $anoAtual = date("Y");
        $anoNasc = $_GET['nasc'] ?? '2000';
        $anoEscUsua = $_GET['ano'] ?? $anoAtual;
    ?>
    <main>
        <h1>Calculando a sua Idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="nasc">Em que ano você nasceu?</label>
        <input type="number" name="nasc" id="nasc" min="1900" max="<?=($anoAtual-1)?>" value="<?=$anoNasc?>">
        <label for="ano">Quer saber sua idade em qual ano? (atualmente estamos em <strong><?=$anoAtual?></strong>)</label>
        <input type="number" name="ano" id="ano" min="1900" value="<?=$anoEscUsua?>">
        <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <?php 
            $anoResp = $anoEscUsua - $anoNasc;
        ?>
        <h2>Resultado</h2>
        <p>Quem nasceu em <?=$anoNasc?> vai ter <strong><?=$anoResp?>anos</strong> em <?=$anoEscUsua?> </p>
    </section>
</body>
</html>