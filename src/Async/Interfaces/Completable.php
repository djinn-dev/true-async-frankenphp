<?php

declare(strict_types=1);

namespace Async;

interface Completable extends Awaitable
{
    public function cancel(?AsyncCancellation $cancellation = null): void;

    public function isCompleted(): bool;

    public function isCancelled(): bool;
}
