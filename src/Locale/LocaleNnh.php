<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageNnh;

/**
 * Class LocaleNnh - Ngiemboon
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleNnh extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Shwóŋò ngiembɔɔn';
    }

    public function endonymSortable(): string
    {
        return 'SHWONO NGIEMBOON';
    }

    public function language(): LanguageInterface
    {
        return new LanguageNnh();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
