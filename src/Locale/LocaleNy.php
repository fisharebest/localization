<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageNy;

/**
 * Class LocaleNy - Chewa
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleNy extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Chichewa';
    }

    public function endonymSortable(): string
    {
        return 'CHICHEWA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageNy();
    }
}
