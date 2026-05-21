<?php

declare(strict_types=1);

namespace FrankenPHP;

final class UploadedFile
{
    public function getName(): string {}

    public function getType(): string {}

    public function getSize(): int {}

    public function getError(): int {}
    
    public function moveTo(string $targetPath): void {}
}
