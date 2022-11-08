<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageSes;

/**
 * Class LocaleSes - Koyraboro Senni
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleSes extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Koyraboro senni';
    }

    public function endonymSortable(): string
    {
        return 'KOYRABORO SENNI';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSes();
    }

    public function numberSymbols(): array
    {
        return array(
            self::GROUP => self::NBSP,
        );
    }
}
