<?php

declare(strict_types=1);

namespace Async;

use Throwable;

final class Future implements Completable
{
    public function __construct(FutureState $state) {}

    public static function completed(mixed $value = null): self {}

    public static function failed(Throwable $error): self {}

    public function await(?Completable $cancellation = null): mixed {}

    public function map(callable $callback): self {}

    public function catch(callable $callback): self {}

    public function finally(callable $callback): self {}

    public function ignore(): void {}

    public function cancel(?AsyncCancellation $cancellation = null): void {}

    public function isCompleted(): bool {}

    public function isCancelled(): bool {}

    public function getCreatedFileAndLine(): array {}

    public function getCreatedLocation(): string {}

    public function getCompletedFileAndLine(): array {}

    public function getCompletedLocation(): string {}

    public function getAwaitingInfo(): array {}
}
