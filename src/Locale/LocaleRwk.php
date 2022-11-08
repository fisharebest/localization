<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageRwk;

/**
 * Class LocaleRwk - Rwa
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleRwk extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Kiruwa';
    }

    public function endonymSortable(): string
    {
        return 'KIRUWA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageRwk();
    }
}
