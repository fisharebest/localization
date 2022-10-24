<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageBg;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleBg - Bulgarian
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleBg extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'български';
    }

    public function endonymSortable(): string
    {
        return 'БЪЛГАРСКИ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageBg();
    }

    protected function minimumGroupingDigits(): int
    {
        return 2;
    }

    public function numberSymbols(): array
    {
        return array(
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        );
    }
}
