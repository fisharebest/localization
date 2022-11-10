<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageNo;

/**
 * Class LocaleNo - Norwegian Nynorsk
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleNo extends AbstractLocale implements LocaleInterface
{
    public function collation(): string
    {
        return 'danish_ci';
    }

    public function endonym(): string
    {
        return 'norsk';
    }

    public function endonymSortable(): string
    {
        return 'NORSK';
    }

    public function language(): LanguageInterface
    {
        return new LanguageNo();
    }

    public function numberSymbols(): array
    {
        return [
            self::DECIMAL  => self::COMMA,
            self::GROUP    => self::NBSP,
            self::NEGATIVE => self::MINUS_SIGN,
        ];
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
