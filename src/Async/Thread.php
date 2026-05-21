<?php

declare(strict_types=1);

namespace Async;

use Throwable;

final class Thread implements Completable
{
    public function getResult(): mixed {}

    public function getException(): ?Throwable {}

    public function isRunning(): bool {}

    public function isCompleted(): bool {}

    public function isCancelled(): bool {}

    public function cancel(?AsyncCancellation $cancellation = null): void {}
}
