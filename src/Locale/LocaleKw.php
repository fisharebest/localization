<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageKw;

/**
 * Class LocaleKw - Cornish
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleKw extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'kernewek';
    }

    public function endonymSortable(): string
    {
        return 'KERNEWEK';
    }

    public function language(): LanguageInterface
    {
        return new LanguageKw();
    }
}
