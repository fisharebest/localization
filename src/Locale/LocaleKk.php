<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageKk;

/**
 * Class LocaleKk - Kazakh
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleKk extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'қазақ тілі';
    }

    public function endonymSortable(): string
    {
        return 'ҚАЗАҚ ТІЛІ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageKk();
    }

    public function numberSymbols(): array
    {
        return array(
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        );
    }
}
