<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageCv;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleCv - Chuvash
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleCv extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'чӑваш';
    }

    public function endonymSortable(): string
    {
        return 'ЧӐВАШ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageCv();
    }

    public function numberSymbols(): array
    {
        return array(
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        );
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
