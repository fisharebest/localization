<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptKhar - Representation of the Kharoshthi script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptKhar extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Khar';
    }

    public function number(): string
    {
        return '305';
    }

    public function unicodeName(): ?string
    {
        return 'Kharoshthi';
    }
}
