<?php


$xml = new \Toll_Integration\XML();

$log = new \Toll_Integration\Log();
$api = new \Toll_Integration\API();
$db = new \Toll_Integration\DB();
$sftp = new \Toll_Integration\RemoteSFTP();

// print_r($sftp->alldirectoreis());
// echo "<pre>";
//$sam = $api->getOrder('4777522724942');
//print_r($sam);
// print_r($api->getOrder('5255641235759'));
$xml->generateOrdersXML('5162106290278');
// $api->test();
// echo APP_DIR;
// echo "<pre>";
// print_r($api->updateOrderPrefix(4417031405739));
// print_r($api->createOrder());

// echo "<pre>";

//$api->test();
// print_r($api->getFulfillment(4912108961963));
//print_r($sftp->fileCheckSftp());







