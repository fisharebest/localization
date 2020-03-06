<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageTe;

/**
 * Class LocaleTe - Telugu
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleTe extends AbstractLocale implements LocaleInterface
{
    protected function digitsGroup()
    {
        return 2;
    }

    public function endonym()
    {
        return 'తెలుగు';
    }

    public function language()
    {
        return new LanguageTe();
    }
}
