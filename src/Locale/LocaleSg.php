<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageSg;

/**
 * Class LocaleSg - Sango
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleSg extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Sängö';
    }

    public function endonymSortable(): string
    {
        return 'SANGO';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSg();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
