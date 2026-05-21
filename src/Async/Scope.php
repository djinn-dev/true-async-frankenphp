<?php

declare(strict_types=1);

namespace Async;

final class Scope implements ScopeProvider
{
    public function __construct() {}

    public static function global(): self {}

    public static function inherit(): self {}

    public function provideScope(): ?self {}

    public function spawn(callable $task, mixed ...$args): Coroutine {}

    public function awaitCompletion(?Completable $cancellation = null): void {}

    public function cancel(?AsyncCancellation $cancellation = null): void {}

    public function dispose(): void {}

    public function disposeSafely(): void {}

    public function awaitAfterCancellation(?Completable $cancellation = null): void {}

    public function disposeAfterTimeout(int|float $milliseconds): void {}

    public function setExceptionHandler(callable $handler): void {}

    public function getContext(): Context {}

    public function isDisposed(): bool {}

    public function isCancellationRequested(): bool {}
}
