<?php 
   //Cotação copiada do google
    $cotação = 5.17;

   //quando $$ você tem?
   $real = 1000;
   
   //equivalência em dólar
   $dólar = $real / $cotação;

   //mostrar o resultado
   //echo "Seus R\$" . $real . " equivalem a US\$" . $dólar;
   
   // Formatação de moedas com internacionalização
   
   $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
   
   echo "Seus " . numfmt_format_currency($padrão, $real, "BRL") . " equivalem a US\$" . $dólar;
?><?php 
   //Cotação copiada do google
    $cotação = 5.17;

   //quando $$ você tem?
   $real = 1000;
   
   //equivalência em dólar
   $dólar = $real / $cotação;

   //mostrar o resultado
   //echo "Seus R\$" . $real . " equivalem a US\$" . $dólar;
   
   // Formatação de moedas com internacionalização
   
   $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
   
   echo "Seus " . numfmt_format_currency($padrão, $real, "BRL") . " equivalem a US\$" . $dólar;
?>