<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptRjng - Representation of the Rejang (Redjang, Kaganga) script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptRjng extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Rjng';
    }

    public function number(): string
    {
        return '363';
    }

    public function unicodeName(): ?string
    {
        return 'Rejang';
    }
}
