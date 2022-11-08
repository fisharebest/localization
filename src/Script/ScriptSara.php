<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptSara - Representation of the Sarati script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptSara extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Sara';
    }

    public function number(): string
    {
        return '292';
    }
}
