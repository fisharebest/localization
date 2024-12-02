<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptCakm - Representation of the Chakma script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2024 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptCakm extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Cakm';
    }

    public function numerals(): array
    {
        return ['𑄶', '𑄷', '𑄸', '𑄹', '𑄺', '𑄻', '𑄼', '𑄽', '𑄾', '𑄿'];
    }

    public function number(): string
    {
        return '349';
    }

    public function unicodeName(): ?string
    {
        return 'Chakma';
    }
}
