<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptCham - Representation of the Cham script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptCham extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Cham';
    }

    public function numerals(): array
    {
        return array('꩐', '꩑', '꩒', '꩓', '꩔', '꩕', '꩖', '꩗', '꩘', '꩙');
    }

    public function number(): string
    {
        return '358';
    }

    public function unicodeName(): ?string
    {
        return 'Cham';
    }
}
