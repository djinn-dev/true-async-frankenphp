<?php

declare(strict_types=1);

namespace Async;

use Countable;

final class ThreadPool implements Countable
{
    public function __construct(
        int $workers,
        ?callable $bootloader = null,
    ) {}

    public function submit(callable $task, mixed ...$args): Future {}

    public function shutdown(): void {}

    public function close(): void {}

    public function isClosed(): bool {}

    public function count(): int {}
}
