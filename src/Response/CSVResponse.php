<?php

namespace MarcoPollacci\Tipsandtrick\Response;

use Zend\Diactoros\Response;
use Zend\Diactoros\Stream;

/**
 * CSV Response using zend diactors stream and zend diactors response
 */
class CSVResponse extends Response
{

    public function __construct($file, string $nameFile)
    {
      $headers = [
                    'Content-Type' => 'text/csv; charset=utf-8',
                    'Content-Disposition' => 'attachment;filename="'. $nameFile .'"'
                 ];

        $body = new Stream($file, 'r');

        @unlink($file);

        parent::__construct($body, 200, $headers);
    }

}
