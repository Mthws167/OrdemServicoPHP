<html>

<body>
    <?php
        echo $_POST["data"]." |  ". $_POST["hora"] . "<br><br>";
        echo $_POST["nome"] . "<br>";
        echo $_POST["CpfCnpj"]. "<br>";
        echo $_POST["cidade"].",".$_POST["estado"] .",".$_POST["CEP"]."<br>";
        echo $_POST["endereco"] . ",". $_POST["numero"] . ",". $_POST["bairro"]."<br>";
        echo $_POST["telefone"] . "<br><br>";
        echo $_POST["nos"] . "<br><br>";
        echo $_POST["cliente"] . "<br>";
        echo $_POST["CpfCnpj2"] . "<br>";
        echo $_POST["telefone2"] . "<br><br>";
        echo $_POST["obs"] . "<br>";
        echo $_POST["descricao"] . "<br>";
        echo $_POST["servico"] . "<br>";






        "<div id=".form2." style=".padding-right ."10px".">"
       ."<div>"
           . "<p id=".dataHora." >"."</p>"
        ."</div>"

        ."<br>"."<br>"
        ."<div style=".border.":".solid." 2px";">"
           ." <p id=".nomeServidor.">"."</p>"
            ."<p id=".cpfcnpjs.">"."</p>"
            ."<p id=".cidadeEstadoCep.">"."</p>"
            ."<p id=".enderecoNumeroBairro.">"."</p>"
           ." <p id=".telefones.">"."</p>"
        ."</div>"
       ."<br>"
        ."<br>"
        ."<div style=".text-align.":". center.";"." id=".nosOS.">"."</div>"
        ."<div>"
            ."<p id=".clientes.">"."</p>"
           ."<p id=".cpfcnpjs2.">"."</p>"
           ." <p id=".telefones2.">"."</p>"
           ."<br>"
           ." <p id=".obss.">"."</p>"
      . " </div>"
       ." <div style=".border.":".solid ."2px".";">""
            ."DESCRIÇÃO DO SERVIÇO/DEFEITO RELATADO:"
          ."<p id=".descricaos.">"."</p>"
      ." </div>"
        ."<br>"
        ."<div style=".border.":". solid ."2px";">"
            ."SERVIÇO EXECUTADO:"
          . " <p id=".servicos.">"."</p>"
       ." </div>"
        ."<br>"
        ."<br>"
       ." <br>"."<br>"."<br>"
      ." <div class=".row." style=".padding-left.":"."170px";">"
           ." <div class=".column.">"
                ."<hr>"
               ." <p>Assinatura do Cliente"."</p>"
           ." </div>"
           ." <div class=".column." style=".padding-left.":"." 50px";">"
               ." <hr>"
               ." <p>Técnico Responsável"."</p>"
           ." </div>"
      . " </div>"
       ." <br>"."<br>"."<br>"."<br>"
      ."  <div style=".padding-left.": "."265px";">"
           . "<button class=".Botao-GerarOS." onclick=".imprimir().">"
               ." <i class=".fa-solid fa-file." style=" color.":" .rgb("19", "16", "48").";"font-size":" x-large";">"
                ."</i>"
               ." <b class=".b.">"." Imprimir"."</b>"
           . "</button>"
          . " <button class=".Botao-GerarOS." onclick=".retorna().">"
                ."<i class="fa-solid fa-solid fa-arrow-rotate-left" style=" color: rgb(19, 16, 48);font-size: x-large;">"
                ."</i>"
               . "<b class=".b.">" ."Editar"."</b>"
           ." </button>"
       ." </div>"
      . " <br>"."<br>"."<br>"
    ."</div>"
    ?>
</body>

</html>
