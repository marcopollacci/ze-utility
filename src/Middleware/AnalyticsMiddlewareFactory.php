<?php

declare(strict_types=1);

namespace MarcoPollacci\Tipsandtrick\Middleware;

use Psr\Container\ContainerInterface;
use Zend\Expressive\Template\TemplateRendererInterface;

class AnalyticsMiddlewareFactory
{
    public function __invoke(ContainerInterface $container) : AnalyticsMiddleware
    {

        return new AnalyticsMiddleware(
          $container->get('config')['google_analytics'],
          $container->get(TemplateRendererInterface::class) //mi prendo il template
        );
    }
}
