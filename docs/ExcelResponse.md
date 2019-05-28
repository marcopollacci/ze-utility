## Minimal Example usage in middleware

```php

declare(strict_types=1);

namespace Example\Namespace\Middleware;

use MarcoPollacci\Tipsandtrick\Response\ExcelResponse;

class MyBeautifulMiddleware implements MiddlewareInterface
{
    /**
     * {@inheritDoc}
     */
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler) : ResponseInterface
    {

      //create your beautiful excel with php library like PhpSpreadsheet and then

      return new ExcelResponse('path-to-my-file.xlsx', 'mywonderfulfile');

    }
```