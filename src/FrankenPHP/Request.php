<?php

declare(strict_types=1);

namespace FrankenPHP;

use UploadedFile;

final class Request
{
    public function getMethod(): string {}
    
    public function getUri(): string {}

    public function getHeader(string $name): ?string {}

    public function getHeaders(): array {}

    public function getBody(): string {}

    public function getQueryParams(): array {}

    public function getCookies(): array {}

    /**
     * @return UploadedFile[]
     */
    public function getUploadedFiles(): array {}
}
