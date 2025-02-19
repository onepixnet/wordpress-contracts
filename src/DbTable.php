<?php

declare(strict_types=1);

namespace OnePix\WordPressContracts;

interface DbTable
{
    /**
     * @return non-empty-string
     */
    public function getTableName(): string;

    /**
     * @return non-empty-string
     */
    public function getColumnsDefinition(): string;
}
