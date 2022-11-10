<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageBe;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleBe - Belarusian
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleBe extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'беларуская';
    }

    public function endonymSortable(): string
    {
        return 'БЕЛАРУСКАЯ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageBe();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
