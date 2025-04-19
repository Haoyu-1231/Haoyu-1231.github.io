<?php
$id = $_GET['id'];
$n = array(
    'gdws' => 1182,//广东卫视
    'gdzj' => 1183,//广东珠江
    'nfws' => 1197,//南方卫视
    'gdgg' => 1185,//广东公共
    'gdxw' => 1186,//广东新闻
    'gdjjkj' => 1196,//广东经济科教
    'gdty' => 1184,//广东体育
    'gdse' => 1200,//广东少儿
    'gdys' => 1199,//广东影视
    'jjkt' => 1187,//嘉佳卡通
    'gdfc' => 1192,//广东房产
    'gdgj' => 1191,//广东国际
    'nfgw' => 2393,//南方购物
    'gdyd' => 2463,//广东移动
    'gdzy' => 1198,//广东综艺
    'xdjy' => 2436,//现代教育
    'lnxq' => 2510,//岭南戏曲
    'gdwh' => 2511,//GRTN文化频道
    'jxws' => 957,//江西卫视
    'nmws' => 1886,//内蒙古卫视
    'xjws' => 1842,//新疆卫视
    'sdjy' => 1447,//山东教育台
    'btws' => 1861,//兵团卫视
    'hubws' => 811,//湖北卫视
    'cqws' => 742,//重庆卫视
    'tjws' => 729,//天津卫视
    'qhws' => 1880,//青海卫视
    'xzws' => 1866,//西藏卫视
    'hbws' => 1625,//河北卫视
    'scws' => 1302,//四川卫视
    'hnws' => 1558,//河南卫视
    'lnws' => 1765,//辽宁卫视
    'szws' => 1206,//深圳卫视
    'szdsj' => 1208,//深圳电视剧
    'szcjsh' => 1209,//深圳财*生活
    'szgg' => 1213,//深圳公共
    'szse' => 1212,//深圳少儿
    'szds' => 1207,//深圳都市
    'szgj' => 1214,//深圳国际
    'szyl' => 1210,//深圳娱乐
    'szyd' => 1217,//深圳移动电视
    'xhgw' => 1219,//深圳宜和购物
    'zqxwzh' => 1232,//肇庆新闻综合
    'hyzh' => 2402,//河源综合
    'hygg' => 2496,//河源公共
    'jyzh' => 1254,//揭阳综合
    'jmzh' => 1248,//江门综合
    'zjzh' => 1225,//湛江综合
    'gdxwzh' => 2395,//东莞新闻综合
    'dggg' => 1235,//东莞公共
    'hzxwzh' => 2396,//惠州新闻综合
    'zhzh' => 2397,//珠海综合
    'mzzh' => 2401,//梅州综合
    'yfzh' => 2389,//云浮综合
    'mmzh' => 1247,//茂名综合
    'swzh' => 1261,//汕尾综合
    'sgxwzh' => 2386,//韶关新闻综合
    'qyzh' => 2400,//清远综合
    'fszh' => 1227,//佛山综合
    'fsgg' => 1229,//佛山公共
    'yjzh' => 2505,//阳江-1
    'yjgg' => 2506,//阳江-2
    'stxwzh' => 2398,//汕头新闻综合
    'qxzh' => 2448,//清新综合x
    'mtgxw' => 2429,//门头沟新闻x
    );
$m = array(
    'kpzh' => 'kaiping,kpzh', //开平综合
    'kpsh' => 'kaiping,kpsh', //开平生活
    'shxwzh' => 'sihui,shxwzh', //四会新闻综合
    'shwhys' => 'sihui,shwhys', //四会文化艺术
    'lzzh' => 'lianzhou,lzzh', //连州综合
    'lzsx' => 'lianzhou,lzsx', //连州视讯
    'fgzh' => 'fogang,fgzh', //佛岗综合
    'hszh' => 'heshan,hszh', //鹤山综合
    'ldzh' => 'luoding,ldt', //罗定综合
    'pnzh' => 'puning,pnt', //普宁综合
    'ydzh' => 'yingde,ydxwzh', //英德综合
    'ljzh' => 'lianjiang,ljt', //连江综合
    'yxzh' => 'yangxi,yxzh', //阳西综合
    'yxgg' => 'yangxi,yxgg', //阳西公共
    'hftv' => 'haifeng,hft', //海丰台
    'zjtv' => 'zijin,zjt', //紫金台
    'xytv1' => 'xinyi,xytv1', //信宜1台
    'xytv2' => 'xinyi,xytv2', //信宜2台
    'gnzh' => 'guangning,gnzh', //广宁综合
    'gnsh' => 'guangning,gnsh', //广宁生活
    'gbjd' => 'gbjd,gbjd', //工布江达台
    'lctv' => 'lechang,lechang_tv', //乐昌台
    'hjzh' => 'huaiji,hjzh', //怀集综合
    'hptv' => 'heping,hpt', //和平台
    'rytv' => 'ruyuan,ryt', //乳源台
    'hzzh' => 'huazhou,hzzh', //化州综合
    'hzgg' => 'huazhou,hzgg', //化州公共
    'hdzh' => 'huidong,hdt', //惠东台
    'hlzh' => 'huilai,hlt', //惠来台
    'yczh' => 'yangchun,yct', //阳春综合
    'dytv' => 'dongyuan,dyt', //东源台
    'lhtv' => 'luhe,lht', //陆河台
    'cnzh' => 'chaonan,chaonan-1', //潮南综合x
    'leizzh' => 'leizhou,zjlzzh', //雷州综合
    'sxtv' => 'suixi,sxt', //遂溪台
    'tstv' => 'taishan,tst', //台山台
    'xhzh' => 'xinhui,xht', //新会综合
    'hytv' => 'huiyang,hyt', //惠阳电视台
    'xwzh' => 'xuwen,xwt', //徐闻台
    'rpzh' => 'raoping,rpt', //饶平台x
    );
$r = array(
    'pgxw' => 2428,//平谷新闻
    'cctv1' => 433,//CCTV1
    'cctv13' => 445,//CCTV13
    'bjws' => 659,//北京卫视x
    'bjdajs' => 673,//北京冬奥纪实
    'bjwy' => 660,//北京文艺
    'bjkj' => 661,//北京科教
    'bjys' => 662,//北京影视
    'bjcj' => 663,//北京财*
    'bjsh' => 665,//北京生活
    'bjqn' => 666,//北京青年
    'bjxw' => 667,//北京新闻
    'bjkk' => 668,//卡酷少儿
    );
    $tm = time();
    $url = "https://api.itouchtv.cn/liveservice/v2/tvChannelList";
    $sign = base64_encode(hash_hmac("SHA256","GET\n".$url."\n".$tm."\n","qmiHeB9bKgowHqxRv0prc2cPN2EwXL1HOYu3DPiYCcaYxyxdFIyT5mAfBmr0UKPO",1));
    if(!empty($n[$id])) $mj = 'mj1';
    if(!empty($m[$id])) $mj = 'mj5';
    if(!empty($r[$id])) $mj = 'mj45';
    $headers = array(
       'X-ITOUCHTV-Ca-Key:04039368653554864194910691389924',
       'X-ITOUCHTV-BRANCH:'.$mj,
       'X-ITOUCHTV-DEVICE-ID:IMEI_863295030426894',
       'X-ITOUCHTV-Ca-Signature:'.$sign,
       'X-ITOUCHTV-Ca-Timestamp:'.$tm,
       'X-ITOUCHTV-TS:'.$tm,
       );
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);    
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
    $data = curl_exec($ch);
    curl_close($ch);
    $d = json_decode($data);
    if(!empty($n[$id])){
       for($i=0;$i<150;$i++){
         if($n[$id] == $d->tvChannelList[$i]->pk){
           $playurl = $d->tvChannelList[$i]->url;
         }
       }
    if(empty($playurl)) echo "暂无信号!";
       header('location:'.$playurl);
       //echo $playurl;
    }
    if(!empty($m[$id])){
      $str = preg_split("/\,/","$m[$id]");  
      $uri = $d->tvChannelList[0]->url;
      $token = preg_split("/token\=/",$uri)[1];
      $playurl = 'https://'.$str[0].'-tv-live1.itouchtv.cn/touchtv/'.$str[1].'.m3u8?token='.$token;
      header('location:'.$playurl);
      //echo $playurl;
    }
    if(!empty($r[$id])){
       for($j=0;$j<20;$j++){
         if($r[$id] == $d->tvChannelList[$j]->pk){
           $playurl = $d->tvChannelList[$j]->url;
         }
       }
    if(empty($playurl)) echo "暂无信号!";
       header('location:'.$playurl);
       //echo $playurl;
    }
?>
