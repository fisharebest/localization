<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageAz;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleAz - Azerbaijani
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleAz extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'azərbaycan';
    }

    public function endonymSortable(): string
    {
        return 'AZERBAYCAN';
    }

    public function language(): LanguageInterface
    {
        return new LanguageAz();
    }

    public function numberSymbols(): array
    {
        return array(
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        );
    }
}
