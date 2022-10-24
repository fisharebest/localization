<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Script\ScriptDeva;
use Fisharebest\Localization\Script\ScriptInterface;

/**
 * Class LocaleSdDeva - Sindhi
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleSdDeva extends LocaleSd
{
    public function direction(): string
    {
        return 'rtl';
    }

    public function script(): ScriptInterface
    {
        return new ScriptDeva();
    }

    public function numberSymbols(): array
    {
        return array(
            self::GROUP    => self::COMMA,
            self::DECIMAL  => self::DOT,
            self::NEGATIVE => self::HYPHEN,
        );
    }

    protected function percentFormat(): string
    {
        return AbstractLocale::PLACEHOLDER . self::PERCENT;
    }
}
