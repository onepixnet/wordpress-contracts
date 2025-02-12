<?php

declare(strict_types=1);

namespace OnePix\WordPressContracts;

interface AdminPageRegistrar
{
    public function getPageTitle(): string;

    public function getMenuTitle(): string;

    public function getCapability(): string;

    public function getMenuSlug(): string;

    public function getCallback(): string;

    public function getIconUrl(): string;

    public function getPosition(): ?int;

    public function getParentSlug(): ?string;

    public function getPageHookName(): string;
}