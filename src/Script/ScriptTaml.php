<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptTaml - Representation of the Tamil script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptTaml extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Taml';
    }

    public function numerals(): array
    {
        return array('௦', '௧', '௨', '௩', '௪', '௫', '௬', '௭', '௮', '௯');
    }

    public function number(): string
    {
        return '346';
    }

    public function unicodeName(): ?string
    {
        return 'Tamil';
    }
}
