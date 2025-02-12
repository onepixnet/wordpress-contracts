<?php

declare(strict_types=1);

namespace OnePix\WordPressContracts;

interface ActionsDispatcher
{
    public function do(string $hook,mixed ...$args): void;
}
