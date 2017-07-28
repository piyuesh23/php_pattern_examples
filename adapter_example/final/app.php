<?php

use AdapterExample\AwsAdapter;
use AdapterExample\FileController;

require __DIR__ . '/vendor/autoload.php';

$awsAdapter = new AwsAdapter();
$awsAdapter->upload('file1.txt');

//$awsFileUpload->upload('file1.txt');

getUserFileAndUpload('file1.txt', $awsAdapter);
getUserFileAndUpload('file2.txt', $awsAdapter);

/**
 * @param $filename
 * @param $awsAdapter
 */
function getUserFileAndUpload($filename, $awsAdapter) {
  $fileController = new FileController();
  $file_contents = $fileController->readFile($filename);
  if ($file_contents) {
    $awsAdapter->upload($filename);
  }
  else {
    print_r("Cannot upload file " . $filename . PHP_EOL);
  }
}


