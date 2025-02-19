<?php

declare(strict_types=1);

namespace OnePix\WordPressContracts;

use Closure;

interface Hook
{
    /**
     * @return non-empty-string
     */
    public function getHook(): string;

    /**
     * @return Closure(mixed):mixed
     */
    public function getCallback(): Closure;

    public function getPriority(): int;

    /**
     * @return int<0, max>
     */
    public function getAcceptedArgs(): int;
}
