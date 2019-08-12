<?php
  include_once("Produto.php");
  include_once("Assinatura.php");

  $Assinatura = new Assinatura();
  $Assinatura->setCodigo(123);
  $Assinatura->setNome("Assinatura MVP");
  $Assinatura->setPreco(69.99);
  $Assinatura->setDataExpiracao("2018-08-20");

  echo " Dias Restantes da assinatura: {$Assinatura->getTempoRestante()->days}";