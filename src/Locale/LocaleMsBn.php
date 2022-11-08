<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBn;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleMsBn
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleMsBn extends LocaleMs
{
    public function numberSymbols(): array
    {
        return array(
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        );
    }

    public function territory(): TerritoryInterface
    {
        return new TerritoryBn();
    }
}
