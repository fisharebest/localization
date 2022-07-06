<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageSi;

/**
 * Class LocaleSi - Sinhala
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleSi extends AbstractLocale implements LocaleInterface
{
    public function collation()
    {
        return 'sinhala_ci';
    }

    public function endonym()
    {
        return 'සිංහල';
    }

    public function language()
    {
        return new LanguageSi();
    }
}
