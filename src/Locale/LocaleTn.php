<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageTn;

/**
 * Class LocaleTn - Tswana
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleTn extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Setswana';
    }

    public function endonymSortable()
    {
        return 'SETSWANA';
    }

    public function language()
    {
        return new LanguageTn();
    }

    public function numberSymbols()
    {
        return array(
            self::GROUP => self::NBSP,
        );
    }
}
