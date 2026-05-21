<?php

declare(strict_types=1);

namespace Async;

class CompositeException extends AsyncException
{
    public function getExceptions(): array {}
}
