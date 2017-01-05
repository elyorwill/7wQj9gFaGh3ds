<?php

use Aws\S3\S3Client;

require '../aws-sdk2/aws-autoloader.php';
$config = require('../aws-app/config.php');

//S3
$s3 = S3Client::factory([
  'key' => $config['s3']['key'],
  'secret' => $config['s3']['secret'],
  'region' => $config['s3']['region']
]);

 ?>
