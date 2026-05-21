<?php

declare(strict_types=1);

namespace Async;

final readonly class FileSystemEvent
{
    public function __construct(
        public string $path,
        public ?string $filename,
        public bool $renamed,
        public bool $changed,
    ) {}
}
