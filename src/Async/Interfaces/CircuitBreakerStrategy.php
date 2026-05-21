<?php

declare(strict_types=1);

namespace Async;

use Throwable;

interface CircuitBreakerStrategy
{
    public function reportSuccess(mixed $source): void;

    public function reportFailure(mixed $source, Throwable $error): void;
}
