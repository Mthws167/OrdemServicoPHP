<!DOCTYPE html>
<html lang="pt-BR">

<title>Ordem de Serviço</title>

<link rel="stylesheet" href="style.css" />


<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/5c632ebf55.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>


</head>
<?php 
$dados = filter_input_array(INPUT_POST,FILTER_DEFAULT);
?>
<body class="box">
    <div class="cards" id="form1">
        <form action="ordemservico.php" onsubmit="resultado()" method="post">
            <b>Ordem de Serviço</b>
            <div>
                <h2>Nº da O.S:</h2>
                <input type="text" name="nos" id="nos" class="Caixa-Texto-N-OS" onkeypress='numeroOS()' required />
                
            </div>
            <div>
                <h2>Nome do Prestador de Serviço:</h2>
                <input type="text" name="nome" id="nome" class="Caixa-Texto-Nome-Prestador" required />
            </div>
            <div>
                <h2>Endereço:</h2>
                <input type="text" name="endereco" id="endereco" class="Caixa-Texto-Endereco" required />
            </div>
            <div class="row">
                <div class="column">
                    <h2>Número:</h2>
                    <input type="text" name="numero" id="numero" class="Caixa-Texto-Numero-Casa" onkeypress='numeroCasa();' required />
                </div>
                <div class="column">
                    <h2>Bairro:</h2>
                    <input type="text" name="bairro" id="bairro" class="Caixa-Texto-Bairro" required />
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <h2>Cidade:</h2>
                    <input type="text" name="cidade" id="cidade" class="Caixa-Texto-Cidade" required />
                </div>
                <div class="columnEstado">
                    <h2>Estado:</h2>
                    <select type="text" name="estado" id="estado" name="estado" class="Caixa-Texto-Estado" style="font-size: medium;" required>
                        <option selected="" value="">Selecione o Estado (UF)</option>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                    </select>
                </div>
                <div class="columnCEP">
                    <h2>CEP:</h2>
                    <input type="text" name="CEP" id="cep" class="Caixa-Texto-CEP" placeholder="00000-000" size="10" maxlength="9" onkeypress="$(this).mask('00000-000')" required />
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <h2>Telefone (opicional):</h2>
                    <input type="text" name="telefone" id="telefone" class="Caixa-Texto-Telefone" placeholder="(DDD)0000-0000" style="margin: auto;" onkeypress="$(this).mask('(00)00000-0000')" />
                </div>
                <div class="columnCpfCnpj">
                    <h2>CPF ou CNPJ:</h2>
                    <input type="text" name="CpfCnpj" id="CpfCnpj" class="Caixa-Texto-CPF-CNPJ1" onkeypress="$(this).mask(CpfCnpjMask, cpfCnpjpOpcao)" required />
                    <sub>Somente os números</sub>
                </div>
            </div>
            <hr>

            <head>
                <b>Informações do Cliente</b>
            </head>
            <div>
                <h2>Cliente:</h2>
                <input type="text" name="cliente" id="cliente" class="Caixa-Texto-Cliente" required />
            </div>
            <div class="row">
                <div class="column">
                    <h2>Telefone (opcional):</h2>
                    <input type="text" name="telefone2" id="telefone2" class="Caixa-Texto-Telefone" placeholder="(DDD)0000-0000" style="margin: auto;" onkeypress="$(this).mask('(00)00000-0000')" />
                </div>
                <div class="columnCpfCnpj">
                    <h2>CPF ou CNPJ(opicional):</h2>
                    <input type="text" name="CpfCnpj2" id="CpfCnpj2" class="Caixa-Texto-CPF-CNPJ2" onkeypress="$(this).mask(CpfCnpjMask, cpfCnpjpOpcao)" />
                    <sub>Somente os números</sub>
                </div>
            </div>
            <div>
                <h2>Obs.: (opicional)</h2>
                <input type="text" name="obs" id="obs" class="Caixa-Texto-Observacao" />
            </div>
            <div>
                <h2>Descrição do Serviço:</h2>
                <textarea name="descricao" id="descricao" cols="30" rows="10" placeholder="Descreva o problema relatado ou o serviço que será realizado" class="Caixa-Texto-Descricao" required></textarea>
            </div>
            <div>
                <h2>Serviço Executado:</h2>
                <textarea name="servico" id="servico" cols="30" rows="10" placeholder="Descreva o serviço que será realizado" class="Caixa-Texto-Servico" required></textarea>
            </div>
            <div class="row">
                <div class="column">
                    <h2>Data:</h2>
                    <input id="data" class="Caixa-Data" type="date" maxlength="10" name="data" pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" required >
                                  
                </div>
                <div class="column">
                    <h2>Hora:</h2>
                    <input id="hora" class="Caixa-Hora" type="time" maxlength="8" name="hora" pattern="[0-9]{2}:[0-9]{2} [0-9]{2}$" required>
                    
                    <sub>Somente os números</sub>
                </div>
            </div>
            <br>
            <div>
                <input type="submit" name="botao" class="Botao-GerarOS" value="Gerar O.S" />
            </div>
            <br>

        </form>
    </div>
    <script src="script.js"></script>
  
</body>

</html>
