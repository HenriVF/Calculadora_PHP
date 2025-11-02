<?php
//Inclui a logica da calculadora
$dados = include 'processa.php';
$expressao = $dados['expressao'];
$resultao = $dados['resultado'];
?>


<!DOCTYPE html>
<html>
<head>
    <meta lang="pt-br">
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Calculadora</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="icon" type="image/png" sizes="192x192"  href="android-icon-192x192.png">
    <link rel='stylesheet' type='text/css' media='screen' href='styles00.css'>
    <script src='meu_js.js'></script>
</head>
<body>
    <div class="calculadora">


        <form method="post" action="">
            <input type="text" id="expressao" name="expressao" class="tela" readonly value="<?php echo htmlspecialchars($expressao); ?>">


            <div class="botoes">
                <button type="button" class="limpar" onclick="limpar()">C</button>
                <button type="button" class="operador" onclick="addValor('%')">%</button>
                <button type="button" class="operador" onclick="addValor('÷')">÷</button>
                <button type="button" class="operador" onclick="addValor('x')">x</button>


                <button type="button" class="numero" onclick="addValor('7')">7</button>
                <button type="button" class="numero" onclick="addValor('8')">8</button>
                <button type="button" class="numero" onclick="addValor('9')">9</button>
                <button type="button" class="operador" onclick="addValor('-')">-</button>


                <button type="button" class="numero" onclick="addValor('4')">4</button>
                <button type="button" class="numero" onclick="addValor('5')">5</button>
                <button type="button" class="numero" onclick="addValor('6')">6</button>
                <button type="button" class="operador" onclick="addValor('+')">+</button>


                <button type="button" class="numero" onclick="addValor('1')">1</button>
                <button type="button" class="numero" onclick="addValor('2')">2</button>
                <button type="button" class="numero" onclick="addValor('3')">3</button>
                <button type="button" class="emoji" onclick="addValor('$')">$</button>
                <button type="submit" class="igual">=</button>


                <button type="button" class="numero" onclick="addValor('0')">0</button>
                <button type="button" class="numero" onclick="addValor('.')">.</button>
            </div>
        </form>
        <br><?php if($resultado !== ""): ?>
            <div class="tela">
                <?php echo "Resultado: ".htmlspecialchars($resultado); ?>
                <?php endif; ?>
            </div>
       


    </div>
</body>
</html>