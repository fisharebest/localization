<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageJbo;

/**
 * Class LocalePap - Lojban
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleJbo extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Lojban';
    }

    public function endonymSortable()
    {
        return 'LOJBAN';
    }

    public function language()
    {
        return new LanguageJbo();
    }
}
