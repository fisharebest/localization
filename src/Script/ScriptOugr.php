<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptOugr - Representation of the Old Uyghur script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptOugr extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Ougr';
    }

    public function number(): string
    {
        return '143';
    }

    public function unicodeName(): ?string
    {
        return 'Old_Uyghur';
    }
}
