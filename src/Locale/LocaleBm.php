<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageBm;

/**
 * Class LocaleBm - Bambara
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleBm extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'bamanakan';
    }

    public function endonymSortable()
    {
        return 'BAMANAKAN';
    }

    public function language()
    {
        return new LanguageBm();
    }
}
