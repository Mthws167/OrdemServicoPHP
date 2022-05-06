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


<body class="box">
    <?php
        echo "<div id=form2 style=padding-right 10px>";
            echo "<div>";
                echo "<p>".$_POST["data"]." |  ". $_POST["hora"] ."</p>";
            echo "</div>";
            echo "<br>"."<br>";
            echo "<div style=border:solid 2px;>";
                echo "<p>".$_POST["nome"] ."</p>";
                echo "<p>"."CPF/CNPJ".$_POST["CpfCnpj"]. "</p>";
                echo "<p>".$_POST["cidade"].",".$_POST["estado"] .","."CEP:".$_POST["CEP"]."</p>";
                echo "<p>".$_POST["endereco"] . ",". $_POST["numero"] . ",". $_POST["bairro"]."</p>";
                echo "<p>".$_POST["telefone"] . "</p>";
            echo "</div>";
            echo "<br>"."<br>";
            echo "<div style=text-align:center;>"."ORDEM DE SERVIÇO Nº: ".$_POST["nos"] ."</div>";
            echo "<div>";
                echo "<p>".$_POST["cliente"] . "</p>";
                echo "<p>".$_POST["CpfCnpj2"] . "</p>";
                echo "<p>".$_POST["telefone2"] . "</p>";
            echo "</div>";
            echo $_POST["obs"] . "<br>";
            echo $_POST["descricao"] . "<br>";
            echo $_POST["servico"] . "<br>";
        echo "</div>"; 





    //   '"<div id=".form2." style=".padding-right ."10px".">"
    //    ."<div>"
    //        . "<p id=".dataHora." >"."</p>"
    //     ."</div>"

    //     ."<br>"."<br>"
    //     ."<div style=".border.":".solid." 2px";">"
    //        ." <p id=".nomeServidor.">"."</p>"
    //         ."<p id=".cpfcnpjs.">"."</p>"
    //         ."<p id=".cidadeEstadoCep.">"."</p>"
    //         ."<p id=".enderecoNumeroBairro.">"."</p>"
    //        ." <p id=".telefones.">"."</p>"
    //     ."</div>"
    //    ."<br>"
    //     ."<br>"
    //     ."<div style=".text-align.":". center.";"." id=".nosOS.">"."</div>"
    //     ."<div>"
    //         ."<p id=".clientes.">"."</p>"
    //        ."<p id=".cpfcnpjs2.">"."</p>"
    //        ." <p id=".telefones2.">"."</p>"
    //        ."<br>"
    //        ." <p id=".obss.">"."</p>"
    //   . " </div>"
    //    ." <div style=".border.":".solid ."2px".";".">"
    //         ."DESCRIÇÃO DO SERVIÇO/DEFEITO RELATADO:"
    //       ."<p id=".descricaos.">"."</p>"
    //   ." </div>"
    //     ."<br>"
    //     ."<div style=".border.":". solid ."2px";">"
    //         ."SERVIÇO EXECUTADO:"
    //       . " <p id=".servicos.">"."</p>"
    //    ." </div>"
    //     ."<br>"
    //     ."<br>"
    //    ." <br>"."<br>"."<br>"
    //   ." <div class=".row." style=".padding-left.":"."170px";">"
    //        ." <div class=".column.">"
    //             ."<hr>"
    //            ." <p>Assinatura do Cliente"."</p>"
    //        ." </div>"
    //        ." <div class=".column." style=".padding-left.":"." 50px";">"
    //            ." <hr>"
    //            ." <p>Técnico Responsável"."</p>"
    //        ." </div>"
    //   . " </div>"
    //    ." <br>"."<br>"."<br>"."<br>"
    //   ."  <div style=".padding-left.": "."265px";">"
    //        . "<button class=".Botao-GerarOS." onclick=".imprimir().">"
    //            ." <i class=".fa-solid .fa-file." style=". "color".":"." .rgb(19, 16, 48).";"font-size".":"." x-large";">"
    //             ."</i>"
    //            ." <b class=".b.">"." Imprimir"."</b>"
    //        . "</button>"
    //       . " <button class=".Botao-GerarOS." onclick=".retorna().">"
    //             ."<i class=".fa-solid .fa-solid .fa-arrow-rotate-left." style=" ."color".":". rgb(19, 16, 48).";"."font-size: x-large;">"
    //             ."<"/".i>"
    //            . "<b ."class=b">" ".Editar.""<"/".b>"
    //        ."<"/".button>"
    //    ."<"/".div>"
    //   . " <br>"."<br>"."<br>"
    // ."<"/".div>"'
    ?>
</body>

</html>

