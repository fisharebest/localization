<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageSms;

/**
 * Class LocaleSms
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleSms extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'sääʹmǩiõll';
    }

    public function endonymSortable()
    {
        return 'SAA MKIOLL';
    }

    public function language()
    {
        return new LanguageSms();
    }
}
