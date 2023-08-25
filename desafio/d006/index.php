<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body> 
    <?php 
        $salarioMin = 1_320.00;
        $salario = $_GET['sal'] ?? $salarioMin;

    
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="sal" id="sal" min="0" value="<?=$salario?>" step="0.01">
            <p>Considerando o salário minimo de <strong>R$<?=number_format($salarioMin, 2, ",", ".")?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
                $quociente = intdiv($salario, $salarioMin);
                $resto = $salario % $salarioMin;

                echo "<p>Quem recebe um salário  de R\$".number_format($salario, 2, ",", ".")." ganha <strong>$quociente salários minimos</strong> + R\$".number_format($resto, 2, ",", ".").".</p>";
            ?>
    </section>
    
</body>
</html>