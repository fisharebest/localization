<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageGuz;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleGuz - Gusii
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleGuz extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Ekegusii';
    }

    public function endonymSortable(): string
    {
        return 'EKEGUSII';
    }

    public function language(): LanguageInterface
    {
        return new LanguageGuz();
    }
}
