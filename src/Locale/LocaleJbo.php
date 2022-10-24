<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageJbo;

/**
 * Class LocaleJbo - Lojban
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleJbo extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Lojban';
    }

    public function endonymSortable(): string
    {
        return 'LOJBAN';
    }

    public function language(): LanguageInterface
    {
        return new LanguageJbo();
    }
}
