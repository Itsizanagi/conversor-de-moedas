<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Desafio PHP</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
   <main>
   <h1>Conversor de Moedas</h1>
<?php
   //Cotação copiada do google
    $cotação = 5.17;

   //quando $$ você tem?
   $real = $_REQUEST["din"] ?? 0;
   
   //equivalência em dólar
   $dólar = $real / $cotação;

   //mostrar o resultado
   //echo "Seus R\$" . $real . " equivalem a US\$" . $dólar;
   
   // Formatação de moedas com internacionalização
   //biblioteca intl (internallization PHP)
   
   $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
   
   echo "<p>Seus " . numfmt_format_currency($padrão, $real, "BRL") . "
   equivalem a " . numfmt_format_currency($padrão, $dólar, "USD") . "<p>";
   
?>
<button onclick="javascript:history.go(-1)">Voltar</button>
   </main>
</body>
</html>