<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageGl;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleGl - Galician
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleGl extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'galego';
    }

    public function endonymSortable(): string
    {
        return 'GALEGO';
    }

    public function language(): LanguageInterface
    {
        return new LanguageGl();
    }

    public function numberSymbols(): array
    {
        return array(
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        );
    }

    public function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
