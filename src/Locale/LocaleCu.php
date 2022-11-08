<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageCu;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleCu - Old Church Slavonic
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleCu extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'церковнослове́нскїй';
    }

    public function endonymSortable(): string
    {
        return 'ЦЕРКОВНОСЛОВЕ́НСКЇЙ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageCu();
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
