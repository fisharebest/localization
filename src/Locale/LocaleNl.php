<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageNl;

/**
 * Class LocaleNl - Dutch
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleNl extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Nederlands';
    }

    public function endonymSortable(): string
    {
        return 'NEDERLANDS';
    }

    public function language(): LanguageInterface
    {
        return new LanguageNl();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
