<?php

declare(strict_types=1);

namespace OnePix\WordPressContracts;

interface ActionsRegistrar
{
    public function add(string $hook, callable $callback, int $priority = 10, int $acceptedArgs = 1): void;

    public function remove(string $hook, callable $callback, int $priority = 10): void;

    public function has(string $hook, callable $callback): bool;

    public function hasAny(string $hook):bool;
}
