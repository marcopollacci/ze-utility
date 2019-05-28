<?php

namespace MarcoPollacci\Tipsandtrick\Response;

use Zend\Diactoros\Response;
use Zend\Diactoros\Stream;

/**
 * Class rapresenting Excel HTTP responses based on PhpSpreadsheet.
 */
class ExcelResponse extends Response
{

    public function __construct($file, string $nameFile)
    {
      $headers = [
                    'Content-Type' => 'application/vnd.ms-excel',
                    'Content-Disposition' => 'attachment;filename="'. $nameFile,
                    'Cache-Control' => 'max-age=0'
                 ];

       $body = new Stream($file, 'r');

       @unlink($file);

       parent::__construct($body, 200, $headers);
    }

}
