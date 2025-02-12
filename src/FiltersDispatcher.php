<?php

declare(strict_types=1);

namespace OnePix\WordPressContracts;

interface FiltersDispatcher
{
    public function apply(string $hook, mixed $value, mixed ...$args): void;
}
