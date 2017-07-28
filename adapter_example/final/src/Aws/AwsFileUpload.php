<?php

namespace AdapterExample\Aws;

class AwsFileUpload {

  /**
   * @param $fileName
   */
  public function uploadFile($fileName) {
    print_r("Uploading file " . $fileName . " successful." . PHP_EOL);
  }
}
