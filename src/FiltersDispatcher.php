<?php

declare(strict_types=1);

namespace OnePix\WordPressContracts;

interface FiltersDispatcher
{
    /**
     * @param  non-empty-string  $hook
     */
    public function apply(string $hook, mixed $value, mixed ...$args): mixed;
}
