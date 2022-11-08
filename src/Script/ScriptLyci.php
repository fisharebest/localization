<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptLyci - Representation of the Lycian script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptLyci extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Lyci';
    }

    public function number(): string
    {
        return '202';
    }

    public function unicodeName(): ?string
    {
        return 'Lycian';
    }
}
