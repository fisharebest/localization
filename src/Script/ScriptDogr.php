<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptDogr - Representation of the Dogra script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptDogr extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Dogr';
    }

    public function number(): string
    {
        return '328';
    }

    public function unicodeName(): ?string
    {
        return 'Dogra';
    }
}
