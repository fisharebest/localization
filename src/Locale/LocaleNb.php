<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageNb;

/**
 * Class LocaleNb - Norwegian Bokmål
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleNb extends AbstractLocale implements LocaleInterface
{
    public function collation(): string
    {
        return 'danish_ci';
    }

    public function endonym(): string
    {
        return 'norsk bokmål';
    }

    public function endonymSortable(): string
    {
        return 'NORSK BOKMAL';
    }

    public function language(): LanguageInterface
    {
        return new LanguageNb();
    }
}
