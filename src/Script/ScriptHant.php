<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptHant - Representation of the Traditional Han script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptHant extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Hant';
    }

    public function number(): string
    {
        return '502';
    }
}
