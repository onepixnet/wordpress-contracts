<?php

declare(strict_types=1);

namespace OnePix\WordPressContracts;

interface StylesRegistrar
{
    public function registerStyle(Style $style): bool;

    public function enqueueStyle(Style $style): bool;

    public function deregisterStyle(Style $style): bool;

    public function dequeueStyle(Style $style): bool;
}
