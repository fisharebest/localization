<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageBho;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleBho - Bhojpuri
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleBho extends AbstractLocale implements LocaleInterface
{
    protected function digitsGroup(): int
    {
        return 2;
    }

    public function endonym(): string
    {
        return 'भोजपुरी';
    }

    public function endonymSortable(): string
    {
        return 'भोजपुरी';
    }

    public function language(): LanguageInterface
    {
        return new LanguageBho();
    }
}
