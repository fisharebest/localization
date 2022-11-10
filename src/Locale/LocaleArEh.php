<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryEh;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleArEh
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleArEh extends LocaleAr
{
    public function numberSymbols(): array
    {
        return [
            self::NEGATIVE => self::LTR_MARK . '-',
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
        return new TerritoryEh();
    }
}
