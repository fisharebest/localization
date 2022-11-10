<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageSk;

/**
 * Class LocaleSk - Slovak
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleSk extends AbstractLocale implements LocaleInterface
{
    public function collation(): string
    {
        return 'slovak_ci';
    }

    public function endonym(): string
    {
        return 'slovenčina';
    }

    public function endonymSortable(): string
    {
        return 'SLOVENCINA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSk();
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
