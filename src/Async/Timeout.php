<?php

declare(strict_types=1);

namespace Async;

final class Timeout implements Completable
{
    public function cancel(?AsyncCancellation $cancellation = null): void {}

    public function isCompleted(): bool {}

    public function isCancelled(): bool {}
}
