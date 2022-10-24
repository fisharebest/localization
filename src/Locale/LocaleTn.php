<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageTn;

/**
 * Class LocaleTn - Tswana
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleTn extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Setswana';
    }

    public function endonymSortable(): string
    {
        return 'SETSWANA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageTn();
    }

    public function numberSymbols(): array
    {
        return array(
            self::GROUP => self::NBSP,
        );
    }
}
