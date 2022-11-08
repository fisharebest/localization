<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptGeok - Representation of the Khutsuri (Asomtavruli and Nuskhuri) script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptGeok extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Geok';
    }

    public function number(): string
    {
        return '241';
    }

    public function unicodeName(): ?string
    {
        return 'Georgian';
    }
}
