<?php

declare(strict_types=1);

namespace OnePix\WordPressContracts;

interface ScriptsRegistrar
{
    /**
     * @param  non-empty-string  $handle
     * @param  non-empty-string  $src
     * @param  array[]  $deps
     * @param  array<string, mixed> $localizations
     */
    public function registerScript(string $handle, string $src, array $deps = [], array $localizations = [], bool $setScriptTranslation = true): bool;

    /**
     * @param  non-empty-string  $handle
     */
    public function enqueueScript(string $handle, mixed ...$args): bool;

    /**
     * @param  non-empty-string  $handle
     */
    public function deregisterScript(string $handle): bool;

    /**
     * @param  non-empty-string  $handle
     */
    public function dequeueScript(string $handle): bool;
}
