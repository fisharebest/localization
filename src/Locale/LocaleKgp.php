<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageKgp;

/**
 * Class LocaleKgp - Kaingang
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleKgp extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'kanhgág';
    }

    public function language(): LanguageInterface
    {
        return new LanguageKgp();
    }

    public function numberSymbols(): array
    {
        return array(
            self::DECIMAL => self::COMMA,
            self::GROUP   => self::DOT,
        );
    }
}
