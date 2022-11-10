<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageDyo;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleDyo - Jola-Fonyi
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleDyo extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'joola';
    }

    public function endonymSortable(): string
    {
        return 'JOOLA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageDyo();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
