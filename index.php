<!DOCTYPE html>
<html>
<head>
    <title>Folha</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>--- Calcula Salário 2000 ---</h1>
    
    <form method="POST">
        Cidadão (Nome): <input type="text" name="n"><br><br>
        Poder aquisitivo (Salário): <input type="text" name="s"><br><br>
        
        <button type="submit">Calcular</button>
    </form>
    <br>

    <?php
    if ($_POST) {
        $nome = $_POST['n'];
        $salario = $_POST['s'];
        
        $ir = $salario * 0.11;
        $inss = $salario * 0.08;
        $sindicato = $salario * 0.02;
        
        $liquido = $salario - $ir - $inss - $sindicato;
        
        echo "Funcionario: " . $nome . "<br>";
        echo "Salario Bruto: " . $salario . "<br>";
        echo "Desconto IR: " . $ir . "<br>";
        echo "Desconto INSS: " . $inss . "<br>";
        echo "Desconto Sindicato: " . $sindicato . "<br>";
        echo "Salario Liquido: " . $liquido;
    }
    ?>

</body>
</html>