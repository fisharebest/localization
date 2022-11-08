<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageKab;

/**
 * Class LocaleKab - Kabyle
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleKab extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Taqbaylit';
    }

    public function endonymSortable(): string
    {
        return 'TAQBAYLIT';
    }

    public function language(): LanguageInterface
    {
        return new LanguageKab();
    }

    public function numberSymbols(): array
    {
        return array(
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        );
    }
}
