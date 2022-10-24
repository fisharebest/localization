<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageCa;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleCa - Catalan
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleCa extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'català';
    }

    public function endonymSortable(): string
    {
        return 'CATALA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageCa();
    }

    public function numberSymbols(): array
    {
        return array(
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        );
    }

    public function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
