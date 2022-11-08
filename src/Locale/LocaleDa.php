<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageDa;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleDa - Danish
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleDa extends AbstractLocale implements LocaleInterface
{
    public function collation(): string
    {
        return 'danish_ci';
    }

    public function endonym(): string
    {
        return 'dansk';
    }

    public function endonymSortable(): string
    {
        return 'DANSK';
    }

    public function language(): LanguageInterface
    {
        return new LanguageDa();
    }

    public function numberSymbols(): array
    {
        return array(
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        );
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
