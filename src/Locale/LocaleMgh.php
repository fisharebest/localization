<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageMgh;

/**
 * Class LocaleMgh - Makhuwa-Meetto
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleMgh extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Makua';
    }

    public function endonymSortable(): string
    {
        return 'MAKUA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageMgh();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
