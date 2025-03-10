<?php

declare(strict_types=1);

namespace OnePix\WordPressContracts;

interface ActionsRegistrar
{
    /**
     * @param  non-empty-string  $hook
     */
    public function add(string $hook, callable $callback, int $priority = 10, int $acceptedArgs = 1): void;

    /**
     * @param  non-empty-string  $hook
     */
    public function remove(string $hook, callable $callback, int $priority = 10): void;

    /**
     * @param  non-empty-string  $hook
     */
    public function has(string $hook, callable $callback): bool;

    /**
     * @param  non-empty-string  $hook
     */
    public function hasAny(string $hook): bool;
}
