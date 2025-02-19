<?php

declare(strict_types=1);

namespace OnePix\WordPressContracts;

use Closure;

interface Filter extends Hook
{
    /**
     * @return Closure(mixed):mixed
     */
    public function getCallback(): Closure;
}
