<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageFrr;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleFrr - North Frisian
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleFrr extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Nordfriisk';
    }

    public function endonymSortable(): string
    {
        return 'NORDFRIISK';
    }

    public function language(): LanguageInterface
    {
        return new LanguageFrr();
    }

    public function numberSymbols(): array
    {
        return [
            self::DECIMAL => self::COMMA,
            self::GROUP   => self::DOT,
        ];
    }
}
