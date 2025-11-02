<?php
//Inicia variaveis
$resultado = "";
$expressao = "";




// Se o formulario foi enviado
if($_SERVER['REQUEST_METHOD'] === 'POST')
    if(!empty($_POST['expressao'])){
        $expressao = $_POST['expressao'];


        //Substituir Simbolo
        $expressao = str_replace("x","*", $expressao);
        $expressao = str_replace("÷","/", $expressao);


        //conversão
        if(strpos($expressao, "%") !== false){
            $expressao = str_replace("%", "/100", $expressao);
        }
        }
        try{
            //Avaliar a Expressao
            eval("\$resultado = $expressao;");
        }catch(Throwable $e){
        $resultado = "Erro";
    }
//Retorna o valor pra calcular.php
return[
    'expressao' => $expressao,
    'resultado' => $resultado
];
?>
