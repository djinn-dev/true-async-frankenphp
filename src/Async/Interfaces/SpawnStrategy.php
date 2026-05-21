<?php

declare(strict_types=1);

namespace Async;

interface SpawnStrategy extends ScopeProvider
{
    public function beforeCoroutineEnqueue(Coroutine $coroutine, Scope $scope): array;

    public function afterCoroutineEnqueue(Coroutine $coroutine, Scope $scope): void;
}
