<?php
ob_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $dadosboleto["identificacao"]; ?></title>
        <meta http-equiv=Content-Type content=text/html charset=UTF-8>
        <meta name="Generator" content="Projeto BoletoPHP - www.boletophp.com.br - Licença GPL" />

        <style type=text/css>
            .cp {  font: bold 10px Arial; color: black}
            .ti {  font: 9px Arial, Helvetica, sans-serif}
            .ld { font: bold 15px Arial; color: #000000}
            .ct { FONT: 9px "Arial Narrow"; COLOR: #000033}
            .cn { FONT: 9px Arial; COLOR: black }
            .bc { font: bold 20px Arial; color: #000000 }
            .ld2 { font: bold 12px Arial; color: #000000 }
            .b-bottom {border-bottom: solid 1px; width: 100%;}
            .b-left {border-left: solid 1px;}
        </style>
    </head>

    <body text=#000000 bgColor=#ffffff topMargin=0 rightMargin=0>

        <table width=666 cellspacing=0 cellpadding=0 border=0>
            <tr>
                <td valign=top class=cp>
                    <div align="center">Instru&ccedil;&otilde;es de Impress&atilde;o</div>
                </TD>
            </tr>
            <tr>
                <td valign=top class=cp>
                    <div align="left">
                        <ul>
                            <li>Imprima em impressora jato de tinta (ink jet) ou laser em qualidade normal ou alta (N&atilde;o use modo econ&ocirc;mico).</li>
                            <li>Utilize folha A4 (210 x 297 mm) ou Carta (216 x 279 mm) e margens m&iacute;nimas &agrave; esquerda e &agrave; direita do formul&aacute;rio.</li>
                            <li>Corte na linha indicada. N&atilde;o rasure, risque, fure ou dobre a regi&atilde;o onde se encontra o c&oacute;digo de barras.</li>
                            <li>Caso n&atilde;o apare&ccedil;a o c&oacute;digo de barras no final, clique em F5 para atualizar esta tela.</li>
                            <li>Caso tenha problemas ao imprimir, copie a sequencia num&eacute;rica abaixo e pague no caixa eletr&ocirc;nico ou no internet banking:</li>
                        </ul>

                        <br>

                        <span class="ld2">
                            Linha Digit&iacute;vel: &nbsp;<?php echo $dadosboleto["linha_digitavel"]?><br>
                            Valor: &nbsp;&nbsp;R$ <?php echo $dadosboleto["valor_boleto"]?><br>
                        </span>
                    </div>
                </td>
            </tr>
        </table>

        <br>

        <!-- ####### PARTE 2 ####### -->

        <table cellspacing=0 cellpadding=0 width=666 border=0>
            <tbody>
                <tr>
                    <td class=ct width=666>
                        <img height=1 src=imagens/6.png width=665 border=0>
                    </td>
                </tr>
                <tr>
                    <td class=ct width=666>
                        <div align=right><b class=cp>Recibo do Sacado</b></div>
                    </td>
                </tr>
            </tbody>
        </table>

        <br>

        <table cellspacing=0 cellpadding=0 width=666 border=0 class='b-bottom'>
            <thead>
                <tr>
                    <td class=cp width=150>
                        <span class="campo">
                            <img src="imagens/logobradesco.jpg" width="150" height="40" border=0>
                        </span>
                    </td>
                    <td width=3 valign=bottom>
                        <img height=22 src=imagens/3.png width=2 border=0>
                    </td>
                    <td class=cpt width=58 valign=bottom>
                        <div align=center>
                            <font class=bc><?php echo $dadosboleto["codigo_banco_com_dv"]?></font>
                        </div>
                    </td>
                    <td width=3 valign=bottom>
                        <img height=22 src=imagens/3.png width=2 border=0>
                    </td>
                    <td class=ld align=right width=453 valign=bottom>
                        <span class="ld2">
                            <span class="campotitulo">
                                <?php echo $dadosboleto["linha_digitavel"]?>
                            </span>
                        </span>
                    </td>
                </tr>
            </thead>
        </table>

        <table cellspacing=0 cellpadding=0 border=0 class='b-bottom'>
            <tbody>
                <tr>
                    <td class=ct valign=top width=7 height=13>
                        <img height=13 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=ct valign=top width=298 height=13>
                        Cedente
                    </td>
                    <td class=ct valign=top width=7 height=13>
                        <img height=13 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=ct valign=top width=126 height=13>
                        Ag&ecirc;ncia/C&oacute;digo do Cedente
                    </td>
                    <td class=ct valign=top width=7 height=13>
                        <img height=13 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=ct valign=top width=34 height=13>
                        Esp&eacute;cie
                    </td>
                    <td class=ct valign=top width=7 height=13>
                        <img height=13 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=ct valign=top width=53 height=13>
                        Quantidade
                    </td>
                    <td class=ct valign=top width=7 height=13>
                        <img height=13 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=ct valign=top width=120 height=13>
                        Nosso n&uacute;mero
                    </td>
                </tr>
                <tr>
                    <td class=cp valign=top width=7 height=12>
                        <img height=12 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=cp valign=top width=298 height=12>
                        <span class="campo"><?php echo $dadosboleto["cedente"]; ?></span>
                    </td>
                    <td class=cp valign=top width=7 height=12>
                        <img height=12 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=cp valign=top width=126 height=12>
                        <span class="campo">
                            <?php echo $dadosboleto["agencia_codigo"]?>
                        </span>
                    </td>
                    <td class=cp valign=top width=7 height=12>
                        <img height=12 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=cp valign=top  width=34 height=12>
                        <span class="campo">
                            <?php echo $dadosboleto["especie"]?>
                        </span>
                    </td>
                    <td class=cp valign=top width=7 height=12>
                        <img height=12 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=cp valign=top  width=53 height=12>
                        <span class="campo">
                            <?php echo $dadosboleto["quantidade"]?>
                        </span>
                    </td>
                    <td class=cp valign=top width=7 height=12>
                        <img height=12 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=cp valign=top align=right width=120 height=12>
                        <span class="campo">
                            <?php echo $dadosboleto["nosso_numero"]?>
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>

        <table cellspacing=0 cellpadding=0 border=0 class='b-bottom'>
            <tbody>
                <tr>
                    <td class=ct valign=top width=7 height=13>
                        <img height=13 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=ct valign=top colspan=3 height=13>
                        N&uacute;mero do documento
                    </td>
                    <td class=ct valign=top width=7 height=13>
                        <img height=13 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=ct valign=top width=132 height=13>
                        CPF/CNPJ
                    </td>
                    <td class=ct valign=top width=7 height=13>
                        <img height=13 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=ct valign=top width=134 height=13>
                        Vencimento
                    </td>
                    <td class=ct valign=top width=7 height=13>
                        <img height=13 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=ct valign=top height=13>
                        Valor documento
                    </td>
                </tr>
                <tr>
                    <td class=cp valign=top width=7 height=12>
                        <img height=12 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=cp valign=top colspan=3 height=12>
                        <span class="campo">
                            <?php echo $dadosboleto["numero_documento"]?>
                        </span>
                    </td>
                    <td class=cp valign=top width=7 height=12>
                        <img height=12 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=cp valign=top width=132 height=12>
                        <span class="campo">
                            <?php echo $dadosboleto["cpf_cnpj"]?>
                        </span>
                    </td>
                    <td class=cp valign=top width=7 height=12>
                        <img height=12 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=cp valign=top width=134 height=12>
                        <span class="campo">
                            <?php echo $dadosboleto["data_vencimento"]?>
                        </span>
                    </td>
                    <td class=cp valign=top width=7 height=12>
                        <img height=12 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=cp valign=top align=right height=12>
                        <span class="campo">
                            <?php echo $dadosboleto["valor_boleto"]?>
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>

        <table cellspacing=0 cellpadding=0 border=0 class='b-bottom'>
            <tbody>
                <tr>
                    <td class=ct valign=top width=7 height=13>
                        <img height=13 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=ct valign=top width=113 height=13>
                        (-) Desconto / Abatimentos
                    </td>
                    <td class=ct valign=top width=7 height=13>
                        <img height=13 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=ct valign=top width=112 height=13>
                        (-) Outras dedu&ccedil;&otilde;es
                    </td>
                    <td class=ct valign=top width=7 height=13>
                        <img height=13 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=ct valign=top width=113 height=13>
                        (+) Mora / Multa
                    </td>
                    <td class=ct valign=top width=7 height=13>
                        <img height=13 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=ct valign=top width=113 height=13>
                        (+) Outros acr&eacute;scimos
                    </td>
                    <td class=ct valign=top width=7 height=13>
                        <img height=13 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=ct valign=top width=180 height=13>
                        (=) Valor cobrado
                    </td>
                </tr>
                <tr>
                    <td class=cp valign=top width=7 height=12>
                        <img height=12 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=cp valign=top align=right width=113 height=12></td>
                    <td class=cp valign=top width=7 height=12>
                        <img height=12 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=cp valign=top align=right width=112 height=12></td>
                    <td class=cp valign=top width=7 height=12>
                        <img height=12 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=cp valign=top align=right width=113 height=12></td>
                    <td class=cp valign=top width=7 height=12>
                        <img height=12 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=cp valign=top align=right width=113 height=12></td>
                    <td class=cp valign=top width=7 height=12>
                        <img height=12 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=cp valign=top align=right width=180 height=12></td>
                </tr>
            </tbody>
        </table>

        <table cellspacing=0 cellpadding=0 border=0 class='b-bottom'>
            <tbody>
                <tr>
                    <td class=ct valign=top width=7 height=13>
                        <img height=13 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=ct valign=top width=659 height=13>
                        Sacado
                    </td>
                </tr>
                <tr>
                    <td class=cp valign=top width=7 height=12>
                        <img height=12 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=cp valign=top width=659 height=12>
                        <span class="campo">
                            <?php echo $dadosboleto["sacado"]?>
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>

        <table cellspacing=0 cellpadding=0 border=0>
            <tbody>
                <tr>
                    <td class=ct  width=7 height=12></td>
                    <td class=ct  width=564 >
                        Demonstrativo
                    </td>
                    <td class=ct  width=7 height=12></td>
                    <td class=ct  width=88 >
                        Autentica&ccedil;&atilde;o mec&acirc;nica
                    </td>
                </tr>
                <tr>
                    <td  width=7 ></td><td class=cp width=564 >
                        <span class="campo">
                            <?php echo $dadosboleto["demonstrativo1"]?><br>
                            <?php echo $dadosboleto["demonstrativo2"]?><br>
                            <?php echo $dadosboleto["demonstrativo3"]?><br>
                        </span>
                    </td>
                    <td  width=7 ></td>
                    <td  width=88 ></td>
                </tr>
            </tbody>
        </table>

        <br>

        <!-- ####### PARTE 3 ####### -->

        <table cellspacing=0 cellpadding=0 width=666 border=0>
            <tr>
                <td class=ct width=666></td>
            </tr>
            <tbody>
                <tr>
                    <td class=ct width=666>
                        <div align=right>
                            Corte na linha pontilhada
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class=ct width=666>
                        <img height=1 src=imagens/6.png width=665 border=0>
                    </td>
                </tr>
            </tbody>
        </table>

        <br>

        <table cellspacing=0 cellpadding=0 width=666 border=0 class='b-bottom'>
            <tr>
                <td class=cp width=150>
                    <span class="campo">
                        <img src="imagens/logobradesco.jpg" width="150" height="40" border=0>
                    </span>
                </td>
                <td width=3 valign=bottom>
                    <img height=22 src=imagens/3.png width=2 border=0>
                </td>
                <td class=cpt width=58 valign=bottom>
                    <div align=center>
                        <font class=bc>
                            <?php echo $dadosboleto["codigo_banco_com_dv"]?>
                        </font>
                    </div>
                </td>
                <td width=3 valign=bottom>
                    <img height=22 src=imagens/3.png width=2 border=0>
                </td>
                <td class=ld align=right width=453 valign=bottom>
                    <span class='ld2'>
                        <span class="campotitulo">
                            <?php echo $dadosboleto["linha_digitavel"]?>
                        </span>
                    </span>
                </td>
            </tr>
        </table>

        <table cellspacing=0 cellpadding=0 border=0 class='b-bottom'>
            <tbody>
                <tr>
                    <td class=ct valign=top width=7 height=13>
                        <img height=13 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=ct valign=top width=472 height=13>
                        Local de pagamento
                    </td>
                    <td class=ct valign=top width=7 height=13>
                        <img height=13 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=ct valign=top width=180 height=13>
                        Vencimento
                    </td>
                </tr>
                <tr>
                    <td class=cp valign=top width=7 height=12>
                        <img height=12 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=cp valign=top width=472 height=12>
                        Pag&aacute;vel em qualquer Banco at&eacute; o vencimento
                    </td>
                    <td class=cp valign=top width=7 height=12>
                        <img height=12 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=cp valign=top align=right width=180 height=12>
                        <span class="campo">
                            <?php echo $dadosboleto["data_vencimento"]?>
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>

        <table cellspacing=0 cellpadding=0 border=0 class='b-bottom'>
            <tbody>
                <tr>
                    <td class=ct valign=top width=7 height=13>
                        <img height=13 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=ct valign=top width=472 height=13>
                        Cedente
                    </td>
                    <td class=ct valign=top width=7 height=13>
                        <img height=13 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=ct valign=top width=180 height=13>
                        Ag&ecirc;ncia/C&oacute;digo cedente
                    </td>
                </tr>
                <tr>
                    <td class=cp valign=top width=7 height=12>
                        <img height=12 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=cp valign=top width=472 height=12>
                        <span class="campo">
                            <?php echo $dadosboleto["cedente"]?>
                        </span>
                    </td>
                    <td class=cp valign=top width=7 height=12>
                        <img height=12 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=cp valign=top align=right width=180 height=12>
                        <span class="campo">
                            <?php echo $dadosboleto["agencia_codigo"]?>
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>

        <table cellspacing=0 cellpadding=0 border=0 class='b-bottom'>
            <tbody>
                <tr>
                    <td class=ct valign=top width=7 height=13>
                        <img height=13 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=ct valign=top width=113 height=13>
                        Data do documento
                    </td>
                    <td class=ct valign=top width=7 height=13>
                        <img height=13 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=ct valign=top width=153 height=13>
                        N&ordm; documento
                    </td>
                    <td class=ct valign=top width=7 height=13>
                        <img height=13 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=ct valign=top width=62 height=13>
                        Esp&eacute;cie doc.
                    </td>
                    <td class=ct valign=top width=7 height=13>
                        <img height=13 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=ct valign=top width=34 height=13>
                        Aceite
                    </td>
                    <td class=ct valign=top width=7 height=13>
                        <img height=13 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=ct valign=top width=82 height=13>
                        Data processamento
                    </td>
                    <td class=ct valign=top width=7 height=13>
                        <img height=13 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=ct valign=top width=180 height=13>
                        Nosso n&uacute;mero
                    </td>
                </tr>
                <tr>
                    <td class=cp valign=top width=7 height=12>
                        <img height=12 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=cp valign=top  width=113 height=12>
                        <div align=left>
                            <span class="campo">
                                <?php echo $dadosboleto["data_documento"]?>
                            </span>
                        </div>
                    </td>
                    <td class=cp valign=top width=7 height=12>
                        <img height=12 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=cp valign=top width=153 height=12>
                        <span class="campo">
                            <?php echo $dadosboleto["numero_documento"]?>
                        </span>
                    </td>
                    <td class=cp valign=top width=7 height=12>
                        <img height=12 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=cp valign=top  width=62 height=12>
                        <div align=left>
                            <span class="campo">
                                <?php echo $dadosboleto["especie_doc"]?>
                            </span>
                        </div>
                    </td>
                    <td class=cp valign=top width=7 height=12>
                        <img height=12 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=cp valign=top  width=34 height=12>
                        <div align=left>
                            <span class="campo">
                                <?php echo $dadosboleto["aceite"]?>
                            </span>
                        </div>
                    </td>
                    <td class=cp valign=top width=7 height=12>
                        <img height=12 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=cp valign=top  width=82 height=12>
                        <div align=left>
                            <span class="campo">
                                <?php echo $dadosboleto["data_processamento"]?>
                            </span>
                        </div>
                    </td>
                    <td class=cp valign=top width=7 height=12>
                        <img height=12 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=cp valign=top align=right width=180 height=12>
                        <span class="campo">
                            <?php echo $dadosboleto["nosso_numero"]?>
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>

        <table cellspacing=0 cellpadding=0 border=0 class='b-bottom'>
            <tbody>
                <tr>
                    <td class=ct valign=top width=7 height=13>
                        <img height=13 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=ct valign=top COLSPAN="3" height=13>
                        Uso do banco
                    </td>
                    <td class=ct valign=top height=13 width=7>
                        <img height=13 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=ct valign=top width=83 height=13>
                        Carteira
                    </td>
                    <td class=ct valign=top height=13 width=7>
                        <img height=13 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=ct valign=top width=53 height=13>
                        Esp&eacute;cie
                    </td>
                    <td class=ct valign=top height=13 width=7>
                        <img height=13 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=ct valign=top width=123 height=13>
                        Quantidade
                    </td>
                    <td class=ct valign=top height=13 width=7>
                        <img height=13 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=ct valign=top width=72 height=13>
                        Valor Documento
                    </td>
                    <td class=ct valign=top width=7 height=13>
                        <img height=13 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=ct valign=top width=180 height=13>
                        (=) Valor documento
                    </td>
                </tr>
                <tr>
                    <td class=cp valign=top width=7 height=12>
                        <img height=12 src=imagens/1.png width=1 border=0>

                    </td>
                    <td valign=top class=cp height=12 COLSPAN="3">
                        <div align=left></div>
                    </td>
                    <td class=cp valign=top width=7 height=12>
                        <img height=12 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=cp valign=top  width=83>
                        <div align=left>
                            <span class="campo">
                                <?php echo $dadosboleto["carteira"]?>
                            </span>
                        </div>
                    </td>
                    <td class=cp valign=top width=7 height=12>
                        <img height=12 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=cp valign=top  width=53>
                        <div align=left>
                            <span class="campo">
                                <?php echo $dadosboleto["especie"]?>
                            </span>
                        </div>
                    </td>
                    <td class=cp valign=top width=7 height=12>
                        <img height=12 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=cp valign=top  width=123>
                        <span class="campo">
                            <?php echo $dadosboleto["quantidade"]?>
                        </span>
                    </td>
                    <td class=cp valign=top width=7 height=12>
                        <img height=12 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=cp valign=top  width=72>
                        <span class="campo">
                            <?php echo $dadosboleto["valor_unitario"]?>
                        </span>
                    </td>
                    <td class=cp valign=top width=7 height=12>
                        <img height=12 src=imagens/1.png width=1 border=0>
                    </td>
                    <td class=cp valign=top align=right width=180 height=12>
                        <span class="campo">
                            <?php echo $dadosboleto["valor_boleto"]?>
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>

        <table cellspacing=0 cellpadding=0 border=0 class='b-bottom'>
            <tbody>
                <tr>
                    <td valign=top width=468 class="b-left">
                        <table cellspacing=0 cellpadding=0 border=0>
                            <tbody>
                                <tr>
                                    <td class=ct>
                                        &nbsp;Instru&ccedil;&otilde;es (Texto de responsabilidade do cedente)
                                    </td>
                                </tr>
                                <tr>
                                    <td class=cp>
                                        &nbsp;<?php echo $dadosboleto["instrucoes1"]; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class=cp>
                                        &nbsp;<?php echo $dadosboleto["instrucoes2"]; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class=cp>
                                        &nbsp;<?php echo $dadosboleto["instrucoes3"]; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class=cp>
                                        &nbsp;<?php echo $dadosboleto["instrucoes4"]; ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td align=right width=188 class="b-left">
                        <table cellspacing=0 cellpadding=0 border=0>
                            <tbody>
                                <tr>
                                    <td class=ct valign=top width=180 height=13>
                                        (-) Desconto / Abatimentos
                                    </td>
                                </tr>
                                <tr>
                                    <td class=ct valign=top width=180 height=13></td>
                                </tr>
                                <tr>
                                    <td class=ct valign=top width=180 height=13>
                                        (-) Outras dedu&ccedil;&otilde;es
                                    </td>
                                </tr>
                                <tr>
                                    <td class=ct valign=top width=180 height=13></td>
                                </tr>
                                <tr>
                                    <td class=ct valign=top width=180 height=13>
                                        (+) Mora / Multa
                                    </td>
                                </tr>
                                <tr>
                                    <td class=ct valign=top width=180 height=13></td>
                                </tr>
                                <tr>
                                    <td class=ct valign=top width=180 height=13>
                                        (+) Outros acr&eacute;scimos
                                    </td>
                                </tr>
                                <tr>
                                    <td class=ct valign=top width=180 height=13></td>
                                </tr>
                                <tr>
                                    <td class=ct valign=top width=180 height=13>
                                        (=) Valor cobrado
                                    </td>
                                </tr>
                                <tr>
                                    <td class=ct valign=top width=180 height=13></td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>

        <table cellspacing=0 cellpadding=0 border=0 class='b-bottom b-left'>
            <tbody>
                <tr>
                    <td class=ct>
                        &nbsp;Sacado
                    </td>
                </tr>
                <tr>
                    <td class=cp>
                        &nbsp;<span class="campo"><?php echo $dadosboleto["sacado"]?></span>
                    </td>
                </tr>
                <tr>
                    <td class=cp>
                        &nbsp;<span class="campo"><?php echo $dadosboleto["endereco1"]?></span>
                    </td>
                </tr>
                <tr>
                    <td class=cp>
                        &nbsp;<span class="campo"><?php echo $dadosboleto["endereco2"]?></span>
                    </td>
                    <td class=cp style="border-left:solid 1px">
                        <div align='left'>
                            &nbsp;<span class="campo">C&oacute;d. baixa</span>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <table cellSpacing=0 cellPadding=0 border=0 width=666>
            <tbody>
                <tr>
                    <td class=ct  width=7 height=12></td>
                    <td class=ct  width=409 >
                        Sacador/Avalista
                    </td>
                    <td class=ct  width=250 >
                        <div align=right>
                            Autentica&ccedil;&atilde;o mec&acirc;nica - <b class=cp>Ficha de Compensa&ccedil;&atilde;o</b>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <br>

        <table cellSpacing=0 cellPadding=0 width=666 border=0>
            <tbody>
                <tr>
                    <td vAlign=bottom align=left height=50>
                        <?php fbarcode($dadosboleto["codigo_barras"]);?>
                    </td>
                </tr>
            </tbody>
        </table>

        <br>

        <table cellSpacing=0 cellPadding=0 width=666 border=0>
            <tbody>
                <tr>
                    <td class=ct width=666>
                        <img height=1 src=imagens/6.png width=665 border=0>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>

<?php
  define('MPDF_PATH', '/var/www/html/boletophp/mpdf60/');
  include(MPDF_PATH.'mpdf.php');
  $mpdf=new mPDF();
  $html = ob_get_clean();
  $mpdf->WriteHTML(mb_convert_encoding($html, 'UTF-8', 'UTF-8'));
  $mpdf->Output();
  // $mpdf->WriteHTML(ob_get_clean());
  exit();
