<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageMua;

/**
 * Class LocaleMua - Mundang
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleMua extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'MUNDAŊ';
    }

    public function endonymSortable(): string
    {
        return 'MUNDAN';
    }

    public function language(): LanguageInterface
    {
        return new LanguageMua();
    }

    public function numberSymbols(): array
    {
        return array(
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        );
    }
}
