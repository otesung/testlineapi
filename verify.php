<?php
$access_token = 'iSu2w+Ixj+P8RBMcbVIvcBavjEavTxaWtJEzZRcOFxSAaeFaZ3SQJUQ9bHQ8DxpSmAvoCp9EJrXeKYn0D9BSchtdDGTAT43yTtixVFhFc9QNcgDIdRsTOwsdTTRhMVTyQlu8WzswD73WaPo8VfT2+QdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v2/bot/profile/Ua4afc7093e897966bc88b3955ebd4aee';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>
