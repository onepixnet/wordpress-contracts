<?php

declare(strict_types=1);

namespace OnePix\WordPressContracts;

interface StylesRegistrar
{
    /**
     * @param  non-empty-string  $handle
     * @param  non-empty-string  $src
     * @param  array[]  $deps
     */
    public function registerStyle(string $handle, string $src, array $deps = []): bool;

    /**
     * @param  non-empty-string  $handle
     */
    public function enqueueStyle(string $handle, mixed ...$args): bool;

    /**
     * @param  non-empty-string  $handle
     */
    public function deregisterStyle(string $handle): bool;

    /**
     * @param  non-empty-string  $handle
     */
    public function dequeueStyle(string $handle): bool;
}
