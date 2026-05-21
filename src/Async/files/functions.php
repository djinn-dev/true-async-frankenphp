<?php

declare(strict_types=1);

namespace Async;

function spawn(callable $callable, mixed ...$args): Coroutine {}

function spawn_with(mixed $options, callable $callable, mixed ...$args): Coroutine {}

function await(Completable|Coroutine|Future $awaitable): mixed {}

function await_all(array $awaitables): array {}

function await_all_or_fail(array $awaitables): array {}

function await_any_or_fail(array $awaitables): mixed {}

function await_first_success(array $awaitables): mixed {}

function await_any_of(array $awaitables): mixed {}

function await_any_of_or_fail(array $awaitables): mixed {}

function iterate(iterable $items, callable $callback): iterable {}

function suspend(): void {}

function delay(int|float $milliseconds): void {}

function timeout(int|float $milliseconds): mixed {}

function protect(callable $callback): mixed {}

function current_coroutine(): ?Coroutine {}

function current_context(): Context {}

function coroutine_context(Coroutine $coroutine): Context {}

function root_context(): Context {}

function get_coroutines(): array {}

function signal(int $signal): mixed {}

function graceful_shutdown(): void {}
