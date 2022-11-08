<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageEs;
use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Territory\TerritoryEs;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleEs - Spanish
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleEs extends AbstractLocale implements LocaleInterface
{
    public function collation(): string
    {
        return 'spanish_ci';
    }

    public function endonym(): string
    {
        return 'español';
    }

    public function endonymSortable(): string
    {
        return 'ESPANOL';
    }

    public function language(): LanguageInterface
    {
        return new LanguageEs();
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }

    public function territory(): TerritoryInterface
    {
        return new TerritoryEs();
    }

    public function numberSymbols(): array
    {
        return array(
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        );
    }
}
