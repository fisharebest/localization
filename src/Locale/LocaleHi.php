<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageHi;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleHi - Hindi
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleHi extends AbstractLocale implements LocaleInterface
{
    protected function digitsGroup(): int
    {
        return 2;
    }

    public function endonym(): string
    {
        return 'हिन्दी';
    }

    public function language(): LanguageInterface
    {
        return new LanguageHi();
    }
}
