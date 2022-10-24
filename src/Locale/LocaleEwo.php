<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageEwo;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleEwo - Ewondo
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleEwo extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'ewondo';
    }

    public function endonymSortable(): string
    {
        return 'EWONDO';
    }

    public function language(): LanguageInterface
    {
        return new LanguageEwo();
    }

    public function numberSymbols(): array
    {
        return array(
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        );
    }
}
