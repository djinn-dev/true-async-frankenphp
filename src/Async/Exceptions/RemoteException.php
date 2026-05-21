<?php

declare(strict_types=1);

namespace Async;

use Throwable;

class RemoteException extends AsyncException
{
    public function getRemoteClass(): string {}

    public function getRemoteException(): ?Throwable {}
}
