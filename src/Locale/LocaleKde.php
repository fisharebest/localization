<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageKde;

/**
 * Class LocaleKde - Makonde
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleKde extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Chimakonde';
    }

    public function endonymSortable(): string
    {
        return 'CHIMAKONDE';
    }

    public function language(): LanguageInterface
    {
        return new LanguageKde();
    }
}
