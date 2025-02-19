<?php

declare(strict_types=1);

namespace OnePix\WordPressContracts;

interface DbTableCreator
{
    public function createTable(DbTable $table): void;
}
