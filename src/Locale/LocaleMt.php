<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageMt;

/**
 * Class LocaleMt - Maltese
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleMt extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Malti';
    }

    public function endonymSortable()
    {
        return 'MALTI';
    }

    public function language()
    {
        return new LanguageMt();
    }
}
