<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageShi;

/**
 * Class LocaleShi - Tachelhit
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleShi extends AbstractLocale implements LocaleInterface
{
    public function direction(): string
    {
        return 'ltr';
    }

    public function endonym(): string
    {
        return 'ⵜⴰⵛⵍⵃⵉⵜ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageShi();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
