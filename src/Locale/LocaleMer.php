<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageMer;

/**
 * Class LocaleMer - Meru
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleMer extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Kĩmĩrũ';
    }

    public function endonymSortable(): string
    {
        return 'KIMIRU';
    }

    public function language(): LanguageInterface
    {
        return new LanguageMer();
    }
}
