<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageKy;

/**
 * Class LocaleKy - Kyrgyz
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleKy extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'кыргызча';
    }

    public function endonymSortable(): string
    {
        return 'КЫРГЫЗЧА';
    }

    public function language(): LanguageInterface
    {
        return new LanguageKy();
    }

    public function numberSymbols(): array
    {
        return array(
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        );
    }
}
