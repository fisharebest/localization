<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageWae;

/**
 * Class LocaleWae - Walser
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleWae extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Walser';
    }

    public function endonymSortable(): string
    {
        return 'WALSER';
    }

    public function language(): LanguageInterface
    {
        return new LanguageWae();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::APOSTROPHE,
            self::DECIMAL => self::COMMA,
        ];
    }
}
