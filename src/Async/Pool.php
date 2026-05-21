<?php

declare(strict_types=1);

namespace Async;

final class Pool
{
    public function __construct(
        callable $factory,
        ?callable $destructor = null,
        ?callable $healthcheck = null,
        int $min = 0,
        int $max = 10,
        int|float|null $healthcheckInterval = null,
    ) {}

    public function acquire(int|float|null $timeout = null): mixed {}

    public function release(mixed $resource): void {}

    public function close(): void {}

    public function getState(): CircuitBreakerState {}

    public function activate(): void {}

    public function deactivate(): void {}

    public function recover(): void {}

    public function setCircuitBreakerStrategy(CircuitBreakerStrategy $strategy): void {}

    public function count(): int {}

    public function getFreeCount(): int {}

    public function getBusyCount(): int {}
}
