<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageRu;

/**
 * Class LocaleRu - Russian
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleRu extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'русский';
    }

    public function endonymSortable(): string
    {
        return 'РУССКИЙ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageRu();
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
