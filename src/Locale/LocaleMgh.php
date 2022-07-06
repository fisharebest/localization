<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageMgh;

/**
 * Class LocaleMgh - Makhuwa-Meetto
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleMgh extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Makua';
    }

    public function endonymSortable()
    {
        return 'MAKUA';
    }

    public function language()
    {
        return new LanguageMgh();
    }

    public function numberSymbols()
    {
        return array(
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        );
    }
}
