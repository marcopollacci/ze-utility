## Minimal Example usage in middleware

```php

declare(strict_types=1);

namespace Example\Namespace\Middleware;

use MarcoPollacci\Tipsandtrick\Response\CSVResponse;

class MyBeautifulMiddleware implements MiddlewareInterface
{
    /**
     * {@inheritDoc}
     */
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler) : ResponseInterface
    {
      $list = array (
        array('aaa', 'bbb', 'ccc', 'dddd'),
        array('123', '456', '789'),
        array('"aaa"', '"bbb"')
      );

      $fp = fopen('file.csv', 'w');

      foreach ($list as $fields) {
        fputcsv($fp, $fields);
      }

      fclose($fp);

      return new CSVResponse('path-to-my-file.csv', 'mywonderfulfile');

}
```