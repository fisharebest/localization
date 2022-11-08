<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptMaka - Representation of the Makasar script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptMaka extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Maka';
    }

    public function number(): string
    {
        return '366';
    }

    public function unicodeName(): ?string
    {
        return 'Makasar';
    }
}
