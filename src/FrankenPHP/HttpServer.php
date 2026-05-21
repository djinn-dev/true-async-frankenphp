<?php

declare(strict_types=1);

namespace FrankenPHP;

final class HttpServer
{
    /**
     * @param callable(Request, Response): void $handler
     */
    public static function onRequest(callable $handler): void {}
}
