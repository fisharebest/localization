<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageAnn;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleAnn - Obolo
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleAnn extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Obolo';
    }

    public function endonymSortable(): string
    {
        return 'OBOLO';
    }

    public function language(): LanguageInterface
    {
        return new LanguageAnn();
    }
}
