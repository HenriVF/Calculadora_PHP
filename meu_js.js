function addValor(valor){
    let tela = document.getElementById("expressao");
    tela.value += valor;
}

function limpar(){
    document.getElementById("expressao").value = "";
}