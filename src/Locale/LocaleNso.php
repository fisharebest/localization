<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageNso;

/**
 * Class LocaleNso - Northern Sotho
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleNso extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Sesotho sa Leboa';
    }

    public function endonymSortable(): string
    {
        return 'SESOTHO SA LEBOA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageNso();
    }

    public function numberSymbols(): array
    {
        return array(
            self::GROUP => self::NBSP,
        );
    }
}
