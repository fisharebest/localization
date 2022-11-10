<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryDz;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleArDz
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleArDz extends LocaleAr
{
    public function numberSymbols(): array
    {
        return [
            self::GROUP    => self::DOT,
            self::DECIMAL  => self::COMMA,
            self::NEGATIVE => self::LTR_MARK . self::HYPHEN,
        ];
    }

    protected function numerals(): array
    {
        $latin = new ScriptLatn();

        return $latin->numerals();
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::LTR_MARK . self::PERCENT . self::LTR_MARK;
    }

    public function territory(): TerritoryInterface
    {
        return new TerritoryDz();
    }
}
