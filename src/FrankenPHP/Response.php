<?php

declare(strict_types=1);

namespace FrankenPHP;

final class Response
{
    public function setStatus(int $status): void {}

    public function setHeader(string $name, string $value): void {}

    public function write(string $data): void {}

    public function end(): void {}
    
    public function redirect(string $url, int $status = 302): void {}
}
