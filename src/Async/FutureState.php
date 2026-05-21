<?php

declare(strict_types=1);

namespace Async;

use Throwable;

final class FutureState
{
    public function complete(mixed $value = null): void {}

    public function error(Throwable $error): void {}

    public function isCompleted(): bool {}

    public function isCancelled(): bool {}

    public function getCreatedFileAndLine(): array {}

    public function getCreatedLocation(): string {}

    public function getCompletedFileAndLine(): array {}

    public function getCompletedLocation(): string {}

    public function getAwaitingInfo(): array {}
}

