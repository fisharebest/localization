<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageHy;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleHy - Armenian
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleHy extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'հայերեն';
    }

    public function endonymSortable(): string
    {
        return 'ՀԱՅԵՐԵՆ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageHy();
    }

    public function numberSymbols(): array
    {
        return array(
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        );
    }
}
