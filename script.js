
document.getElementById('form2').style.display = "none"


function resultado() {
    document.getElementById('form1').style.display = "none";

    let nos1 = document.getElementById("nos").value;
    let nome1 = document.getElementById("nome").value;
    let endereco1 = document.getElementById("endereco").value;
    let numero1 = document.getElementById("numero").value;
    let bairro1 = document.getElementById("bairro").value;
    let cidade1 = document.getElementById("cidade").value;
    let estado1 = document.getElementById("estado").value;
    let cep1 = document.getElementById("cep").value;
    let telefone1 = document.getElementById("telefone").value;
    let cpfcnpj1 = document.getElementById("CpfCnpj").value;
    let cliente1 = document.getElementById("cliente").value;
    let telefone21 = document.getElementById("telefone2").value;
    let cpfcnpj21 = document.getElementById("CpfCnpj2").value;
    let obs1 = document.getElementById("obs").value;
    let descricao1 = document.getElementById("descricao").value;
    let servico1 = document.getElementById("servico").value;
    let data1 = document.getElementById("data").value;
    let hora1 = document.getElementById("hora").value;


    document.getElementById('form2').style.display = "block";

    document.getElementById("nosOS").innerHTML = "ORDEM DE SERVIÇO Nº: " + nos1;
    document.getElementById("nomeServidor").innerHTML = nome1;
    document.getElementById("enderecoNumeroBairro").innerHTML = endereco1 + "," + numero1 + "," + bairro1;
    document.getElementById("cidadeEstadoCep").innerHTML = cidade1 + "," + estado1 + ", CEP:" + cep1;
    document.getElementById("telefones").innerHTML = telefone1;
    document.getElementById("cpfcnpjs").innerHTML = "CPF/CNPJ: " + cpfcnpj1;
    document.getElementById("clientes").innerHTML = "Cliente: " + cliente1;
    document.getElementById("telefones2").innerHTML = "Telefone: " + telefone21;
    document.getElementById("cpfcnpjs2").innerHTML = "CPF/CNPJ: " + cpfcnpj21;
    document.getElementById("obss").innerHTML = "OBS.: " + obs1;
    document.getElementById("descricaos").innerHTML = descricao1;
    document.getElementById("servicos").innerHTML = servico1;
    document.getElementById("dataHora").innerHTML = data1 + ' | ' + hora1;


    ordem += 
    
    '<div id="form2" style="padding-right: 10px;">\
    <div>\
        <p id="dataHora"></p>\
    </div>\
    <br><br>\
    <div style="border:solid 2px;">\
        <p id="'+nomeServidor+'"></p>\
        <p id="'+cpfcnpjs+'"></p>\
        <p id="'+cidadeEstadoCep+'"></p>\
        <p id="'+enderecoNumeroBairro+'"></p>\
        <p id="'+telefones+'"></p>\
    </div>\
    <br>\
    <br>\
    <div style="text-align: center;" id="'+nosOS+'"></div>\
    <div>\
        <p id="'+clientes+'"></p>\
        <p id="'+cpfcnpjs2+'"></p>\
        <p id="'+telefones2+'"></p>\
        <br>\
        <p id="'+obss+'"></p>\
    </div>\
    <div style="border:solid 2px;">\
        DESCRIÇÃO DO SERVIÇO/DEFEITO RELATADO:\
        <p id="'+descricaos+'"></p>\
    </div>\
    <br>\
    <div style="border: solid 2px;">\
        SERVIÇO EXECUTADO:\
        <p id="'+servicos+'"></p>\
    </div>\
    <br>\
    <br>\
    <br><br><br>\
    <div class="row" style="padding-left: 170px;">\
        <div class="column">\
            <hr>\
            <p>Assinatura do Cliente</p>\
        </div>\
        <div class="column" style="padding-left: 50px;">\
            <hr>\
            <p>Técnico Responsável</p>\
        </div>\
    </div>\
    <br><br><br><br>\
    <div style="padding-left: 265px;">\
        <button class="Botao-GerarOS" onclick="imprimir()">\
            <i class="fa-solid fa-file" style=" color: rgb(19, 16, 48);font-size: x-large;">\
            </i>\
            <b class="b"> Imprimir</b>\
        </button>\
        <button class="Botao-GerarOS" onclick="retorna()">\
            <i class="fa-solid fa-solid fa-arrow-rotate-left" style=" color: rgb(19, 16, 48);font-size: x-large;">\
            </i>\
            <b class="b"> Editar</b>\
        </button>\
    </div>\
    <br><br><br>'


    document.querySelector("#ordem").innerHTML = ordem;
}

function retorna() {
    document.getElementById('form1').style.display = 'block';
    document.getElementById('form2').style.display = 'none';
}


function imprimir() {
    window.print();
}

