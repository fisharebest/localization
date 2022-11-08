<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageZgh;

/**
 * Class LocaleZgh - Standard Moroccan Tamazight
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleZgh extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'ⵜⴰⵎⴰⵣⵉⵖⵜ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageZgh();
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
