<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageTr;

/**
 * Class LocaleTr - Turkish
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleTr extends AbstractLocale implements LocaleInterface
{
    public function collation(): string
    {
        return 'turkish_ci';
    }

    public function endonym(): string
    {
        return 'Türkçe';
    }

    public function endonymSortable(): string
    {
        return 'TURKCE';
    }

    public function language(): LanguageInterface
    {
        return new LanguageTr();
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
        return self::PERCENT . '%s';
    }
}
