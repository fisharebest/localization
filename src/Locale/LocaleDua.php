<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageDua;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleDua - Duala
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleDua extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'duálá';
    }

    public function endonymSortable(): string
    {
        return 'DUALA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageDua();
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
