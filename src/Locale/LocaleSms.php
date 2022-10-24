<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageSms;

/**
 * Class LocaleSms
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleSms extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'sääʹmǩiõll';
    }

    public function endonymSortable(): string
    {
        return 'SAA MKIOLL';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSms();
    }
}
