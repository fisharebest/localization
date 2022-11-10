<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageSa;

/**
 * Class LocaleSa - Sanskrit
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleSa extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'संस्कृत भाषा';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSa();
    }

    protected function digitsGroup(): int
    {
        return 2;
    }
}
