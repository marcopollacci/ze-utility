<?php

declare(strict_types=1);

namespace MarcoPollacci\Tipsandtrick\Middleware;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Zend\Expressive\Router\RouterInterface;

class RouterRequestMiddleware implements MiddlewareInterface
{
  /**
  * Simple add to the request object all Router Interface parameter to use when you want in your pipeline.
 */
  public function __construct(RouterInterface $router) {
        $this->router = $router;
  }
  public function process(ServerRequestInterface $request, RequestHandlerInterface $handler) : ResponseInterface
  {
    return $handler->handle($request->withAttribute('router-interface' , $this->router));
  }
}
