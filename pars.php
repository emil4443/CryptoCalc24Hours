<?php

     include 'simple_html_dom.php';

 //BTC
   $url_1 =('https://m.myfin.by/crypto-rates/bitcoin-rub');
   $file = file_get_html($url_1);
   $pars = $file->find('.table-body',1)->find('span',0);
   $pars_1 = $pars->plaintext;
   $result_1 = substr($pars_1, 0, -2);
//XRP
   $pars1 = $file->find('.table-body',1)->find('span',1);
   $pars_2 = $pars1->plaintext;
   $result1 = substr($pars_2, 0, -2);
  //ETH
   $pars2 = $file->find('.table-body',1)->find('span',2);
   $pars_3 = $pars2->plaintext;
   $result2 = substr($pars_3, 0, -2);
//EOS
   $pars3 = $file->find('.table-body',1)->find('span',4);
   $pars_4 = $pars3->plaintext;
   $result3 = substr($pars_4, 0, -2);
//LITECOIN
   $pars4 = $file->find('.table-body',1)->find('span',5);
   $pars_5 = $pars4->plaintext;
   $result4 = substr($pars_5, 0, -2);

//BTH
   $pars6 = $file->find('.table-body',1)->find('span',3);
   $pars_7 = $pars6->plaintext;
   $result6 = substr($pars_7, 0, -2);
//DASH
   $pars7 = $file->find('.table-body',1)->find('span',7);
   $pars_8 = $pars7->plaintext;
   $result7 = substr($pars_8, 0, -2);


$array = array(
   
   
    'resmath1' => $result_1,
    'resmath2' => $result1,
    'resmath3' => $result2,
    'resmath4' => $result3,
    'resmath5' => $result4,
    'resmath7' => $result6,
    'resmath8' => $result7,


);

             
echo json_encode($array);


   ?>
