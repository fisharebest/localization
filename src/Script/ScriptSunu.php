<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptSunu - Representation of the Sunuwar script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptSunu extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Sunu';
    }

    public function number(): string
    {
        return '274';
    }
}
