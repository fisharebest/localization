<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageYue;
use Fisharebest\Localization\Territory\TerritoryHk;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleYueHk - Chinese
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleYueHk extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return '粵語';
    }

    public function language(): LanguageInterface
    {
        return new LanguageYue();
    }

    public function territory(): TerritoryInterface
    {
        return new TerritoryHk();
    }
}
