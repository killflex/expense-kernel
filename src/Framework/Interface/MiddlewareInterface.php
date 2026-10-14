<?php

declare(strict_types=1);

namespace Framework\Interface;

interface MiddlewareInterface
{
    public function process(callable $next);
}
