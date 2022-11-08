<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageCy;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleCy - Welsh
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleCy extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Cymraeg';
    }

    public function endonymSortable(): string
    {
        return 'CYMRAEG';
    }

    public function language(): LanguageInterface
    {
        return new LanguageCy();
    }
}
