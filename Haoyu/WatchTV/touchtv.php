<?php

$id = isset($_GET['id']) ? $_GET['id'] : 'gdws';
$n =array(

   'gdws'=>1182, //广东卫视
   'dwqws'=>1197, //大湾区卫视
   'dwqws2'=>1191, //大湾区卫视（海外版）
   'gdfc'=>1192, //大湾区卫视（海外版）
   'gdzj'=>1183, //广东珠江
   'gdms'=>1185, //广东民生
   'gdxw'=>1186, //广东新闻
   'gdzy'=>1198, //广东综艺
   'gdty'=>1184, //广东体育
   'gdys'=>1199, //广东影视
   'gdjjkj'=>1196, //广东经济科教
   'gdse'=>1200, //广东少儿
   'gdyd'=>2463, //广东移动
   'jjkt'=>1187, //嘉佳卡通
   'gdwh'=>2511, //GRTN文化
   'nfgw'=>2393,//南方购物
   'xdjy'=>2436,//现代教育
  );

$url = 'https://api.itouchtv.cn/liveservice/v2/tvChannelList';
$timestamp=time();
$str ="GET\n".$url."\n".$timestamp."\n";  
$key = 'qmiHeB9bKgowHqxRv0prc2cPN2EwXL1HOYu3DPiYCcaYxyxdFIyT5mAfBmr0UKPO';  
$hash = hash_hmac('SHA256', $str, $key, true);
$sign = base64_encode($hash);  
$headers =array(  
    'X-ITOUCHTV-Ca-Key: 04039368653554864194910691389924',  
    'X-ITOUCHTV-Ca-Signature: ' . $sign,  
    'X-ITOUCHTV-Ca-Timestamp: ' . $timestamp,  
    'X-ITOUCHTV-CLIENT: ews_APP',  
    'X-ITOUCHTV-DEVICE-ID: web_0',  
    'X-ITOUCHTV-TS: ' . $timestamp,
);  
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0" );
        curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
        $data = curl_exec($ch);
        curl_close($ch);
     $json = json_decode($data,true);
       
               
foreach($json['tvChannelList'] as $out){

                        if($out['pk'] == $n[$id]){
                                 $playurl =$out['url'];
                        }
     }
         
         
  header("location:".$playurl);
