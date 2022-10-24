<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageVun;

/**
 * Class LocaleVun - Vunjo
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleVun extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Kyivunjo';
    }

    public function endonymSortable(): string
    {
        return 'KYIVUNJO';
    }

    public function language(): LanguageInterface
    {
        return new LanguageVun();
    }
}
