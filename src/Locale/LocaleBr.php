<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageBr;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleBr - Breton
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleBr extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'brezhoneg';
    }

    public function endonymSortable(): string
    {
        return 'BREZHONEG';
    }

    public function language(): LanguageInterface
    {
        return new LanguageBr();
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
