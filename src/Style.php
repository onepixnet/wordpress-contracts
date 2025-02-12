<?php

declare(strict_types=1);

namespace OnePix\WordPressContracts;

interface Style
{
    /**
     * @return non-empty-string
     */
    public function getHandle(): string;

    /**
     * @return non-empty-string
     */
    public function getSrc(): string;

    public function getDeps(): array;
}
