<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryAe;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleArAe
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleArAe extends LocaleAr
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryAe();
    }

    public function numberSymbols(): array
    {
        return array(
            self::GROUP    => self::COMMA,
            self::DECIMAL  => self::DOT,
            self::NEGATIVE => self::LTR_MARK . self::HYPHEN,
        );
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::LTR_MARK . self::PERCENT . self::LTR_MARK;
    }
}
