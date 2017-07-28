<?php

namespace AdapterExample;

use AdapterExample\Aws\AwsFileUpload;

class AwsAdapter {

  public function upload($filename) {
    $awsFileUpload = new AwsFileUpload();
    $awsFileUpload->uploadFile($filename);
  }
}
