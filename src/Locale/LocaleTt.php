<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageTt;

/**
 * Class LocaleTt - Tatar
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleTt extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'татар';
    }

    public function endonymSortable(): string
    {
        return 'ТАТАР';
    }

    public function language(): LanguageInterface
    {
        return new LanguageTt();
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
