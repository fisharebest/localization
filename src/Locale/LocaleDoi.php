<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageDoi;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleDoi - Dogri
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleDoi extends AbstractLocale implements LocaleInterface
{
    protected function digitsGroup(): int
    {
        return 2;
    }

    public function endonym(): string
    {
        return 'डोगरी';
    }

    public function endonymSortable(): string
    {
        return 'डोगरी';
    }

    public function language(): LanguageInterface
    {
        return new LanguageDoi();
    }
}
