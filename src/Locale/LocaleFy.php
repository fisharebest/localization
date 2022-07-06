<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageFy;

/**
 * Class LocaleFy - Western Frisian
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleFy extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Frysk';
    }

    public function endonymSortable()
    {
        return 'FRYSK';
    }

    public function language()
    {
        return new LanguageFy();
    }

    public function numberSymbols()
    {
        return array(
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        );
    }
}
