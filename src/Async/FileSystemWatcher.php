<?php

declare(strict_types=1);

namespace Async;

use Iterator;
use IteratorAggregate;

final class FileSystemWatcher implements IteratorAggregate
{
    public function __construct(
        string $path,
        bool $recursive = false,
        bool $coalesce = true,
    ) {}

    public function close(): void {}

    public function isClosed(): bool {}

    public function getIterator(): Iterator {}
}
