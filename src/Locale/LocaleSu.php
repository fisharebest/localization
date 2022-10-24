<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageSu;

/**
 * Class LocaleSu
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleSu extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Basa Sunda';
    }

    public function endonymSortable(): string
    {
        return 'BASA SUNDA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSu();
    }

    public function numberSymbols(): array
    {
        return array(
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        );
    }
}
