<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageNah;

/**
 * Class LocaleNah - Nahuatl
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleNah extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Nahuatlahtolli';
    }

    public function endonymSortable(): string
    {
        return 'NAHUATLAHTOLLI';
    }

    public function language(): LanguageInterface
    {
        return new LanguageNah();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::COMMA,
            self::DECIMAL => self::DOT,
        ];
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::PERCENT;
    }
}
