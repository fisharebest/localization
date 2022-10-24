<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageBez;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleBez - Bena
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleBez extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Hibena';
    }

    public function endonymSortable(): string
    {
        return 'HIBENA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageBez();
    }
}
