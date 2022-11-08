<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageOc;

/**
 * Class LocaleOc - Occitan
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleOc extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'occitan';
    }

    public function endonymSortable(): string
    {
        return 'OCCITAN';
    }

    public function numberSymbols(): array
    {
        return array(
            self::DECIMAL => self::COMMA,
            self::GROUP   => self::NBSP,
         );
    }

    public function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }

    public function language(): LanguageInterface
    {
        return new LanguageOc();
    }
}
