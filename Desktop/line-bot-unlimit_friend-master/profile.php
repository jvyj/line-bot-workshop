<?php


$access_token = '*NbvE6rbtMbYS/iGwdbs3LOog9P2h2krvO81JMhws05NgsAZ2Fd5cSeTt3SXfD0yLhX25b1rWRq34kgEx+ysKAwpiGZ8F9MhmH1O4hYcwDMB3s+3a1KgwFctpab7MhKFr50mLAcCaibKAIepl9uF2pAdB04t89/1O/w1cDnyilFU=*';

$userId = '*CoachJayACC*';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

