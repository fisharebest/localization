<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageAf;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleAf - Afrikaans
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleAf extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Afrikaans';
    }

    public function endonymSortable(): string
    {
        return 'AFRIKAANS';
    }

    public function language(): LanguageInterface
    {
        return new LanguageAf();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
