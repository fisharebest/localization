<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageMy;

/**
 * Class LocaleMy - Burmese
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleMy extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'မြန်မာ';
    }

    public function language()
    {
        return new LanguageMy();
    }

    protected function minimumGroupingDigits()
    {
        return 3;
    }
}
