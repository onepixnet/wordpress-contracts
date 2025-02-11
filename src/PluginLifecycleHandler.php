<?php

declare(strict_types=1);

namespace OnePix\WordPressContracts;

interface PluginLifecycleHandler
{
    public function registerActivationHook(callable $callback): void;
    public function registerDeactivationHook(callable $callback): void;
    public function registerUninstallHook(callable $callback): void;
}
