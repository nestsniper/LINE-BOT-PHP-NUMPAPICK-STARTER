 <?php

 function send_LINE($msg){
  
  //$access_token = 'Ehdbh7r5LudCZCM0lytY+4hW9qe6ewf388+DGDiIoDHEpsH2jO8UH+0N+DqOrQdj+CAKx2c6lWScJ4MWfHwSJSfgoFLzzwKFn3jp4Nqdpb2gBdIuCJlybNJX';
  //$access_token = 'Ehdbh7r5LudCZCM0lytY+4hW9qe6ewf388+DGDiIoDHEpsH2jO8UH+0N+DqOrQdj+CAKx2c6lWScJ4MWfHwSJSfgoFLzzwKFn3jp4Nqdpb2gBdIuCJlybNJX';
  $access_token = "Ehdbh7r5LudCZCM0lytY+4hW9qe6ewf388+DGDiIoDHEpsH2jO8UH+0N+DqOrQdj+CAKx2c6lWScJ4MWfHwSJSfgoFLzzwKFn3jp4Nqdpb2gBdIuCJlybNJXT8ZyX33/PRM0bSUwxXhcQ5FBDXjR3QdB04t89/1O/w1cDnyilFU="; 
  $messages = [
         'type' => 'text',
         'text' => $msg
         //'text' => $text
       ];

       // Make a POST Request to Messaging API to reply to sender

       $url = 'https://api.line.me/v2/bot/message/push';
       $data = [

         'to' => 'Uf00004aab9254c39ade77e1b2a0772d0',
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
