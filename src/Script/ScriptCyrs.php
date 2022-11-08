<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptCyrs - Representation of the Cyrillic (Old Church Slavonic variant) script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptCyrs extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Cyrs';
    }

    public function number(): string
    {
        return '221';
    }
}
