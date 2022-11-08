<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageKsb;

/**
 * Class LocaleKsb - Shambala
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleKsb extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Kishambaa';
    }

    public function endonymSortable(): string
    {
        return 'KISHAMBAA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageKsb();
    }
}
