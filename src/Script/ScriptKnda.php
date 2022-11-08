<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptKnda - Representation of the Kannada script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptKnda extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Knda';
    }

    public function numerals(): array
    {
        return array('೦', '೧', '೨', '೩', '೪', '೫', '೬', '೭', '೮', '೯');
    }

    public function number(): string
    {
        return '345';
    }

    public function unicodeName(): ?string
    {
        return 'Kannada';
    }
}
