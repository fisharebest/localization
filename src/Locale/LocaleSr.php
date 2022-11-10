<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageSr;

/**
 * Class LocaleSr - Serbian
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleSr extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'српски';
    }

    public function endonymSortable(): string
    {
        return 'СРПСКИ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSr();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
