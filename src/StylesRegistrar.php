<?php

declare(strict_types=1);

namespace OnePix\WordPressContracts;

interface StylesRegistrar
{
    public function registerStyle(Script $script): bool;

    public function enqueueStyle(Script $script): bool;

    public function deregisterStyle(Script $script): bool;

    public function dequeueStyle(Script $script): bool;
}
