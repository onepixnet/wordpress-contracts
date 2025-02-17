<?php

declare(strict_types=1);

namespace OnePix\WordPressContracts;

interface RewriteRulesManager
{
    /**
     * Flush rewrite rules if it was not flashed
     *
     * @param  bool $disablingPlugin if true set option 'rules_flushed to false. If false flush rules if not flushed.
     *
     * @return void
     */
    public function flushRewriteRules( bool $disablingPlugin = false );
}
