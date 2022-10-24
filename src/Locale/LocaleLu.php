<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageLu;

/**
 * Class LocaleLu - Luba-Katanga
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleLu extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Tshiluba';
    }

    public function endonymSortable(): string
    {
        return 'TSHILUBA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageLu();
    }

    public function numberSymbols(): array
    {
        return array(
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        );
    }
}
