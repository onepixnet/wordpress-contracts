<?php

declare(strict_types=1);

namespace OnePix\WordPressContracts;

interface Script
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

    /**
     * @return array<string, mixed>
     */
    public function getLocalizations(): array;

    public function getSetScriptTranslation(): bool;
}