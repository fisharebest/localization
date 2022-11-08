<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageSq;

/**
 * Class LocaleSq - Albanian
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleSq extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'shqip';
    }

    public function endonymSortable(): string
    {
        return 'SHQIP';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSq();
    }

    public function numberSymbols(): array
    {
        return array(
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        );
    }
}
