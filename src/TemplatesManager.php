<?php

declare(strict_types=1);

namespace OnePix\WordPressContracts;

interface TemplatesManager
{
    public function printTemplate(string $templateName, array $data = []): void;

    public function getTemplate(string $templateName, array $data = []): string;

    public function templateExists(string $templateName): bool;
}
