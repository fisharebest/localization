<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageSe;

/**
 * Class LocaleSe - Northern Sami
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleSe extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'davvisámegiella';
    }

    public function endonymSortable(): string
    {
        return 'DAVVISAMEGIELLA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSe();
    }

    public function numberSymbols(): array
    {
        return array(
            self::GROUP    => self::NBSP,
            self::DECIMAL  => self::COMMA,
            self::NEGATIVE => self::MINUS_SIGN,
        );
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
