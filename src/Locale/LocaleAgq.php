<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageAgq;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleAgq - Aghem
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleAgq extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Aghem';
    }

    public function endonymSortable(): string
    {
        return 'AGHEM';
    }

    public function language(): LanguageInterface
    {
        return new LanguageAgq();
    }

    public function numberSymbols(): array
    {
        return array(
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        );
    }
}
