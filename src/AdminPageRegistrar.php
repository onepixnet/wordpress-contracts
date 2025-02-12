<?php

declare(strict_types=1);

namespace OnePix\WordPressContracts;

interface AdminPageRegistrar
{
    public function getPageTitle(): string;

    public function getMenuTitle(): string;

    public function getCapability(): string;

    public function getMenuSlug(): string;

    public function getParentSlug(): ?string;

    public function printContent(): void;

    public function getIconUrl(): ?string;

    public function getPosition(): ?int;

    public function getPageHookName(): string;
}