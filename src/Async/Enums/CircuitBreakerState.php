<?php

declare(strict_types=1);

namespace Async;

enum CircuitBreakerState
{
    case ACTIVE;
    case INACTIVE;
    case RECOVERING;
}
