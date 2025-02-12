<?php

declare(strict_types=1);

namespace OnePix\WordPressContracts;

interface AdminPageRegistrar
{
    public function addPage(AdminPage $adminPage): void;
}
