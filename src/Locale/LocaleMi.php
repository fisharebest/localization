<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageMi;

/**
 * Class LocaleDv - Divehi
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleMi extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Māori';
    }

    public function language()
    {
        return new LanguageMi();
    }
}
