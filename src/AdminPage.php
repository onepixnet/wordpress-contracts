<?php

declare(strict_types=1);

namespace OnePix\WordPressContracts;

interface AdminPage
{
    public function getPageTitle(): string;

    public function getMenuTitle(): string;

    public function getCapability(): string;

    public function getMenuSlug(): string;

    public function getParentSlug(): ?string;

    public function printContent(): void;

    public function getIconUrl(): ?string;

    public function getPosition(): ?int;

    /**
     * Simply use get_plugin_page_hookname or \OnePix\WordPressContractsImplementation\get_admin_page_hook_name
     */
    public function getPageHookName(): string;

    /**
     * Enqueue scripts or just output it
     */
    public function enqueueScripts(): void;

    /**
     * Enqueue styles or just output it
     */
    public function enqueueStyles(): void;
}
