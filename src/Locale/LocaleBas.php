<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageBas;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleBas - Basaa
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleBas extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Ɓàsàa';
    }

    public function endonymSortable(): string
    {
        return 'BASAA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageBas();
    }

    public function numberSymbols(): array
    {
        return array(
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        );
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
