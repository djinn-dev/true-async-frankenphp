<?php

declare(strict_types=1);

namespace Async;

use Countable;

final class Channel implements Awaitable, Countable
{
    public function __construct(int $capacity = 0) {}

    public function send(mixed $value, ?Completable $cancellation = null): void {}

    public function recv(?Completable $cancellation = null): mixed {}

    public function close(): void {}

    public function isClosed(): bool {}

    public function count(): int {}
}

