<?php

declare(strict_types=1);

namespace Async;

use Closure;

final class Coroutine implements Completable
{
    public function getId(): int {}
    
    public function asHiPriority(): self {}

    public function getContext(): Context {}

    public function getResult(): mixed {}

    public function getException(): mixed {}

    public function isStarted(): bool {}

    public function isQueued(): bool {}

    public function isRunning(): bool {}

    public function isSuspended(): bool {}

    public function isCompleted(): bool {}

    public function isCancelled(): bool {}

    public function isCancellationRequested(): bool {}

    public function cancel(?AsyncCancellation $cancellation = null): void {}

    public function finally(\Closure $callback): void {}

    public function getTrace(
        int $options = DEBUG_BACKTRACE_PROVIDE_OBJECT,
        int $limit = 0
    ): ?array {}

    public function getSpawnFileAndLine(): array {}

    public function getSpawnLocation(): string {}

    public function getSuspendFileAndLine(): array {}

    public function getSuspendLocation(): string {}

    public function getAwaitingInfo(): array {}
}
