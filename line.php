 <?php

 function send_LINE($msg){
  
  
  //$access_token = 'mRCliz7RpRQiI1f8Tld6Az9VFfQUYfbatbpwa6nThW0zRg+Hqw0Qm8vx51QCycisit/xq2WW9/dLFsk44wEulrhKtHYIZAD1yZxmosIe+zXZELPVdYUvweUBy4GVXAW9aBBtZm8Y0p7kMmyWKj+40wdB04t89/1O/w1cDnyilFU=';
  $access_token = 'mRCliz7RpRQiI1f8Tld6Az9VFfQUYfbatbpwa6nThW0zRg+Hqw0Qm8vx51QCycisit/xq2WW9/dLFsk44wEulrhKtHYIZAD1yZxmosIe+zXZELPVdYUvweUBy4GVXAW9aBBtZm8Y0p7kMmyWKj+40wdB04t89/1O/w1cDnyilFU='; 
  $messages = [
         'type' => 'text',
         'text' => $msg
         //'text' => $text
       ];

       // Make a POST Request to Messaging API to reply to sender  //api.line.me/v2/bot/message/push

       $url = 'https://api.line.me/v2/bot/message/push';
       $data = [

         'to' => 'U3360b69e239a44212a13b346da753beb',
         'messages' => [$messages],
       ];
       $post = json_encode($data);
       $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

       $ch = curl_init($url);
       curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
       curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
       curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
       curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
       $result = curl_exec($ch);
       curl_close($ch);

       echo $result . "\r\n"; 
 }

?>
