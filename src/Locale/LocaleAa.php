<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageAa;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleAa - Afar
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleAa extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Qafar';
    }

    public function endonymSortable(): string
    {
        return 'QAFAR';
    }

    public function language(): LanguageInterface
    {
        return new LanguageAa();
    }
}
