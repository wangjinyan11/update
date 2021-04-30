
<?php
// 制定允许其他域名访问
header("Access-Control-Allow-Origin:*");
// 响应类型
header('Access-Control-Allow-Methods:POST');
// 响应头设置
header('Access-Control-Allow-Headers:x-requested-with, content-type');
date_default_timezone_set("PRC");

$time = time()*1000;
$txt = sprintf("{\"result\": 200, \"srcGatewayIp\": \"xxx\", \"serverTime\": %u, \"msg\": \"success\"}", $time);
echo $txt;
?>