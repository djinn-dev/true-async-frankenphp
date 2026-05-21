<?php

declare(strict_types=1);

namespace Async;

use Closure;
use Countable;
use Iterator;
use IteratorAggregate;

final class TaskGroup implements Awaitable, Countable, IteratorAggregate
{
    public function __construct(?int $concurrency = null, ?Scope $scope = null) {}

    public function spawn(callable $task, mixed ...$args): void {}

    public function spawnWithKey(string|int $key, callable $task, mixed ...$args): void {}

    public function all(bool $ignoreErrors = false): Future {}

    public function race(): Future {}

    public function any(): Future {}

    public function awaitCompletion(): void {}

    public function seal(): void {}

    public function cancel(?AsyncCancellation $cancellation = null): void {}

    public function dispose(): void {}

    public function finally(Closure $callback): void {}

    public function isFinished(): bool {}

    public function isSealed(): bool {}

    public function count(): int {}

    public function getResults(): array {}

    public function getErrors(): array {}

    public function suppressErrors(): void {}

    public function getIterator(): Iterator {}
}
