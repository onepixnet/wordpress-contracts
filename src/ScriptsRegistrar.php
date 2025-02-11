<?php

declare(strict_types=1);

namespace OnePix\WordPressContracts;

interface ScriptsRegistrar
{
    public function registerScript(Script $script): bool;

    public function enqueueScript(Script $script): bool;

    public function deregisterScript(Script $script): bool;

    public function dequeueScript(Script $script): bool;
}
