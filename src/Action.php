<?php

declare(strict_types=1);

namespace OnePix\WordPressContracts;

use Closure;

interface Action extends Hook
{
    /**
     * @return Closure(mixed):void
     */
    public function getCallback(): Closure;
}
