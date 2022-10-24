<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageEl;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleEl - Greek
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleEl extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Ελληνικά';
    }

    public function endonymSortable(): string
    {
        return 'ΕΛΛΗΝΙΚΆ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageEl();
    }

    public function numberSymbols(): array
    {
        return array(
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        );
    }
}
