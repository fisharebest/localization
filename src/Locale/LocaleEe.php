<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageEe;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleEe - Ewe
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleEe extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Eʋegbe';
    }

    public function endonymSortable(): string
    {
        return 'EWEGBE';
    }

    public function language(): LanguageInterface
    {
        return new LanguageEe();
    }
}
