<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageSi;

/**
 * Class LocaleSi - Sinhala
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleSi extends AbstractLocale implements LocaleInterface
{
    public function collation(): string
    {
        return 'sinhala_ci';
    }

    public function endonym(): string
    {
        return 'සිංහල';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSi();
    }
}
