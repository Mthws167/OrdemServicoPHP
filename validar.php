<?php
    $erro =  false;
    
    if ( !isset( $_POST ) || empty( $_POST ) ) {
        $erro = 'Preencha o formulário!';
    }

    foreach ( $_POST as $chave => $valor ) {
        // Remove todas as tags HTML
        // Remove os espaços em branco do valor
        $$chave = trim( strip_tags( $valor ) );
        
        // Verifica se tem algum valor nulo
        if ( empty ( $valor ) ) {
            $erro = 'Existem campos em branco.';
        }
    }




    if ( $erro ) {
        echo $erro;
    } else {
        // Se a variável $erro continuar com valor falso
        // Você pode fazer o que preferir aqui, por exemplo, 
        // enviar para a base de dados, ou enviar um email
        // Tanto faz. Vou apenas exibir os dados na tela.
        echo "<h1> Veja os dados enviados</h1>";
        
        foreach ( $_POST as $chave => $valor ) {
            echo '<b>' . $chave . '</b>: ' . $valor . '<br><br>';
        }
    }

?>