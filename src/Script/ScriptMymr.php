<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptMymr - Representation of the Myanmar script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptMymr extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Mymr';
    }

    public function numerals(): array
    {
        return array('၀', '၁', '၂', '၃', '၄', '၅', '၆', '၇', '၈', '၉');
    }

    public function number(): string
    {
        return '350';
    }

    public function unicodeName(): ?string
    {
        return 'Myanmar';
    }
}
