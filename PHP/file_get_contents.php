<?php
function sendGetByCurl($url, $time)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, $time);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $time);
    $return = curl_exec($ch);
    curl_close($ch);
    return $return;
}

$url = 'http://thirdwx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTIrQKRNquic8GwsU951TC7PDCFzIew3RFwTOFoNx8u1fln0FOzHv04YBoEqXPTHHfyU0Xa1qoFULCw/132';

$start1 = microtime(true);
$data1 = file_get_contents($url);
file_put_contents('1.jpg', $data1);
$end1 = microtime(true);
$span1 = $end1 - $start1;
echo $span1 . PHP_EOL;

$start2 = microtime(true);
$data2 = sendGetByCurl($url, 3);
file_put_contents('2.jpg', $data2);
$end2 = microtime(true);
$span2 = $end2 - $start2;
echo $span2 . PHP_EOL;

exit;
