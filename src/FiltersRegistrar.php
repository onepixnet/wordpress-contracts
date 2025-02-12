<?php

declare(strict_types=1);

namespace OnePix\WordPressContracts;

interface FiltersRegistrar
{
    /**
     * @param  non-empty-string  $hook
     * @param  callable(mixed):mixed  $callback
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
