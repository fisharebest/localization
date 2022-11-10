<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Script\ScriptAdlm;
use Fisharebest\Localization\Script\ScriptInterface;

/**
 * Class LocaleFfAdlm - Fulah
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleFfAdlm extends LocaleFf
{
    public function endonym(): string
    {
        return '𞤊𞤵𞤤𞤬𞤵𞤤𞤣𞤫';
    }

    public function endonymSortable(): string
    {
        return '𞤊𞤵𞤤𞤬𞤵𞤤𞤣𞤫';
    }

    public function numberSymbols(): array
    {
        return [
            self::DECIMAL => self::DOT,
            self::GROUP   => self::ADLM_GROUP,
        ];
    }

    public function script(): ScriptInterface
    {
        return new ScriptAdlm();
    }
}
