<?php
$access_token ='mRCliz7RpRQiI1f8Tld6Az9VFfQUYfbatbpwa6nThW0zRg+Hqw0Qm8vx51QCycisit/xq2WW9/dLFsk44wEulrhKtHYIZAD1yZxmosIe+zXZELPVdYUvweUBy4GVXAW9aBBtZm8Y0p7kMmyWKj+40wdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v2/bot/message/push';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
