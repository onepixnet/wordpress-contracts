<?php

declare(strict_types=1);

namespace OnePix\WordPressContracts;

interface OptionsManager
{
    /**
     * @param  non-empty-string  $option
     */
    public function addOption(string $option, mixed $value, ?bool $autoload = null): bool;

    /**
     * @param  non-empty-string  $option
     */
    public function getOption(string $option, mixed $defaultValue = null): mixed;

    /**
     * @param  non-empty-string  $option
     */
    public function updateOption(string $option, mixed $value, ?bool $autoload = null): bool;

    /**
     * @param  non-empty-string  $option
     */
    public function deleteOption(string $option): bool;
}
