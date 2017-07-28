<?php

use AdapterExample\Aws\AwsFileUpload;
use AdapterExample\FileController;

require __DIR__ . '/vendor/autoload.php';

$awsFileUpload = new AwsFileUpload();

$awsFileUpload->uploadFile('file1.txt');
//$awsFileUpload->upload('file1.txt');

getUserFileAndUpload('file1.txt', $awsFileUpload);
getUserFileAndUpload('file2.txt', $awsFileUpload);

/**
 * @param $filename
 * @param $awsFileUpload
 */
function getUserFileAndUpload($filename, $awsFileUpload) {
  $fileController = new FileController();
  $file_contents = $fileController->readFile($filename);
  if ($file_contents) {
    $awsFileUpload->uploadFile($filename);
//    $awsFileUpload->upload($filename);
  }
  else {
    print_r("Cannot upload file " . $filename . PHP_EOL);
  }
}

