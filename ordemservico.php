<!DOCTYPE html>
<html lang="pt-BR">

<title>Ordem de Serviço</title>

<link rel="stylesheet" href="style.css" />


<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/5c632ebf55.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>


</head>


<body class="box">
    <?php   

    echo "<div id='form2' style='padding-right: 10px'>";
    echo "<div>";
    echo "<p>" . $_POST["data"] . " |  " . $_POST["hora"] . "</p>";
    echo "</div>";
    echo "<br>" . "<br>";
    echo "<div style=border:solid 2px;>";
    echo "<p>" . $_POST["nome"] . "</p>";
    echo "<p>" . "CPF/CNPJ: " . $_POST["CpfCnpj"] . "</p>";
    echo "<p>" . $_POST["cidade"] . "," . $_POST["estado"] . "," . "CEP:" . $_POST["CEP"] . "</p>";
    echo "<p>" . $_POST["endereco"] . "," . $_POST["numero"] . "," . $_POST["bairro"] . "</p>";
    echo "<p>" . $_POST["telefone"] . "</p>";
    echo "</div>";
    echo "<br>" . "<br>";
    echo "<div style=text-align:center;>" . "ORDEM DE SERVIÇO Nº: " . $_POST["nos"] . "</div>";
    echo "<div>";
    echo "<p>" . "CLIENTE: " . $_POST["cliente"] . "</p>";
    echo "<p>" . "CPF/CNPJ: " . $_POST["CpfCnpj2"] . "</p>";
    echo "<p>" . "TELEFONE: " . $_POST["telefone2"] . "</p>" . "<br>";
    echo "Obs.: " . $_POST["obs"];
    echo "</div>";
    echo "<div style=border:solid 2px;>";
    echo "DESCRIÇÃO DO SERVIÇO/DEFEITO RELATADO:";
    echo "<p>" . $_POST["descricao"] . "</p>";
    echo "</div>" . "<br>";
    echo "<div style=border:solid 2px;>";
    echo "SERVIÇO EXECUTOADO:";
    echo "<p>" . $_POST["servico"] . "</p>";
    echo "</div>";
    echo "<br>" . "<br>" . "<br>" . "<br>" . "<br>";
    echo "<div class='row' style='padding-left:170px;'>";
    echo "<div class='column'>";
    echo "<hr>";
    echo " <p>" . "Assinatura do Cliente" . "</p>";
    echo " </div>";
    echo " <div class='column' style='padding-left: 50px;'>";
    echo " <hr>";
    echo " <p>" . "Técnico Responsável" . "</p>";
    echo " </div>";
    echo "</div>";
    echo "<br>" . "<br>" . "<br>" . "<br>";
    echo "</div>";
    
    ?>
    <div style="padding-left:300px" ;>
        <button  class="Botao-GerarOS" onclick="imprimir()">
            <i class="fa-solid fa-file" style="color: rgb(19, 16, 48);font-size: x-large"></i>
            <b class="b">Imprimir</b>
        </button>
    </div>
    <br><br><br>
   
</body>

</html>
