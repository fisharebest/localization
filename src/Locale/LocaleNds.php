<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageNds;

/**
 * Class LocaleNds - Low German
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleNds extends LocaleDe
{
    public function endonym(): string
    {
        return 'Neddersass’sch';
    }

    public function endonymSortable(): string
    {
        return 'NEDDERSASS’SCH';
    }

    public function language(): LanguageInterface
    {
        return new LanguageNds();
    }
}
