<?php

declare(strict_types=1);

namespace MarcoPollacci\Tipsandtrick\Middleware;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Zend\Expressive\Template;

class AnalyticsMiddleware implements MiddlewareInterface
{
    public function __construct(string $analytics, Template\TemplateRendererInterface $template) {
      $this->analytics = $analytics;
      $this->template = $template;
    }
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler) : ResponseInterface
    {
     // inject to template
     $this->template->addDefaultParam(Template\TemplateRendererInterface::TEMPLATE_ALL, 'google_analytics', $this->analytics);
     return $handler->handle($request);
    }
}
