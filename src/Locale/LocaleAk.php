<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageAk;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleAk - Akan
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleAk extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Akan';
    }

    public function endonymSortable(): string
    {
        return 'AKAN';
    }

    public function language(): LanguageInterface
    {
        return new LanguageAk();
    }
}
