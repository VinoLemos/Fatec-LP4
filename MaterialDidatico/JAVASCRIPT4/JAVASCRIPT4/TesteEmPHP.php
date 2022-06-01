<?php
/*
  Este código PHP é requisitado pelo código javascript executado no cliente (navegador). 
  Ele retorna ao javascript uma string contendo objeto JSON correspondente ao vetor $x.
*/
$X=array("ID"=>100,"NOME"=>"MARIO");
sleep(10); // aguarda 10 segundos, para demonstrar o comportamento assíncrono
echo json_encode($X); // gera a string contendo objeto JSON: {"ID":100,"NOME":"MARIO"} 
?>