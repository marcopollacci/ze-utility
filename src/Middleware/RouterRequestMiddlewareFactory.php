<?php

declare(strict_types=1);

namespace MarcoPollacci\Tipsandtrick\Middleware;

use Psr\Container\ContainerInterface;
use Zend\Expressive\Router\RouterInterface;

class RouterRequestMiddlewareFactory
{
    public function __invoke(ContainerInterface $container) : RouterRequestMiddleware
    {
        return new RouterRequestMiddleware(
          $container->get(RouterInterface::class)
        );
    }
}
