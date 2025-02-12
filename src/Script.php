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

    /**
     * @return string[]
     */
    public function getDeps(): array;

    /**
     * Array of object=>values to pass to the script
     *
     * @return array<string, array>
     */
    public function getData(): array;

    /**
     * @return non-empty-string
     */
    public function getVersion(): string;

    /**
     * @return array<string, mixed>
     */
    public function getArgs(): array;

    public function isTranslatable(): bool;
}
