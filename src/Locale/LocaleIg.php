<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageIg;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleIg - Igbo
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleIg extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Igbo';
    }

    public function endonymSortable(): string
    {
        return 'IGBO';
    }

    public function language(): LanguageInterface
    {
        return new LanguageIg();
    }
}
