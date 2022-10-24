<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageKa;

/**
 * Class LocaleKa - Georgian
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleKa extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'ქართული';
    }

    public function language(): LanguageInterface
    {
        return new LanguageKa();
    }

    protected function minimumGroupingDigits(): int
    {
        return 2;
    }

    public function numberSymbols(): array
    {
        return array(
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        );
    }
}
