<?php

namespace AdapterExample;

/**
 * Class FileController
 *
 * @package AdapterExample
 */
class FileController {

  /**
   * @param $filename
   *
   * @return bool
   */
  public function readFile($filename) {
    print_r('Reading file ' . $filename . PHP_EOL);

    if ($filename === 'file1.txt') {
      return TRUE;
    }
    else {
      return FALSE;
    }

  }

}
