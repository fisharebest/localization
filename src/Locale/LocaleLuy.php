<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageLuy;

/**
 * Class LocaleLuy - Luyia
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleLuy extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Luluhia';
    }

    public function endonymSortable(): string
    {
        return 'LULUHIA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageLuy();
    }
}
