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

     <div id='form2' style='padding-right: 10px'>
     <div>
     <p> <?=$_POST["data"]?>  |   <?=$_POST["hora"]?> </p>
     </div>
     <br> <br>
     <div style=border:solid 2px>
     <p><?=$_POST["nome"]?> </p>
     <p> CPF/CNPJ: <?=$_POST["CpfCnpj"]?> </p>
     <p><?=$_POST["cidade"]?> ,<?=$_POST["estado"]?> , CEP:<?=$_POST["CEP"]?> </p>
     <p><?=$_POST["endereco"]?> ,<?=$_POST["numero"]?> ,<?=$_POST["bairro"]?> </p>
     <p><?=$_POST["telefone"]?> </p>
     </div>
     <br> <br>
     <div style=text-align:center> ORDEM DE SERVIÇO Nº: <?=$_POST["nos"]?> </div>
     <div>
     <p> CLIENTE: <?=$_POST["cliente"]?> </p>
     <p> CPF/CNPJ: <?=$_POST["CpfCnpj2"]?> </p>
     <p> TELEFONE: <?=$_POST["telefone2"]?> </p> <br>
     <p>Obs.: <?=$_POST["obs"]?></p>
     </div>
     <div style=border:solid 2px>
     DESCRIÇÃO DO SERVIÇO/DEFEITO RELATADO:
     <p><?=$_POST["descricao"]?> </p>
     </div> <br>
     <div style=border:solid 2px>
     SERVIÇO EXECUTOADO:
     <p><?=$_POST["servico"]?> </p>
     </div>
     <br> <br> <br> <br> <br>
     <div class='row' style='padding-left:170px'>
     <div class='column'>
     <hr>
      <p> Assinatura do Cliente </p>
      </div>
      <div class='column' style='padding-left: 50px'>
      <hr>
      <p> Técnico Responsável </p>
      </div>
     </div>
     <br> <br> <br> <br>
     </div>
    
    <div style="padding-left:300px" ;>
        <button  class="Botao-GerarOS" onclick="imprimir()">
            <i class="fa-solid fa-file" style="color: rgb(19, 16, 48);font-size: x-large"></i>
            <b class="b">Imprimir</b>
        </button>
    </div>
    <br><br><br>
   
</body>

</html>
