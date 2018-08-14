<?php
$url = 'https://www.myip.com/';
 
// Khởi tạo CURL
$ch = curl_init($url);
 
// Thiết lập có return
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
$result = curl_exec($ch);
 
curl_close($ch);

echo $result;
//file_put_contents("log.txt", $result);

?>
