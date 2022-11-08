<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptOrya - Representation of the Oriya script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptOrya extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Orya';
    }

    public function numerals(): array
    {
        return array('୦', '୧', '୨', '୩', '୪', '୫', '୬', '୭', '୮', '୯');
    }

    public function number(): string
    {
        return '327';
    }

    public function unicodeName(): ?string
    {
        return 'Oriya';
    }
}
