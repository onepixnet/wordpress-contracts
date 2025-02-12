<?php

declare(strict_types=1);

namespace OnePix\WordPressContracts;

interface ActionsDispatcher
{
    /**
     * @param  non-empty-string  $hook
     */
    public function do(string $hook,mixed ...$args): void;
}
