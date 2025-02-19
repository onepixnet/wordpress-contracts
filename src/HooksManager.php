<?php

declare(strict_types=1);

namespace OnePix\WordPressContracts;

use RuntimeException;

/**
 * Applies hooks (actions and filters)
 */
interface HooksManager
{
    /**
     * @throws RuntimeException If it is not possible to register a hook.
     */
    public function apply(): void;
}
