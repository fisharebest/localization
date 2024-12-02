<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageLag;

/**
 * Class LocaleLag - Langi
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2024 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleLag extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Kɨlaangi';
    }

    public function endonymSortable(): string
    {
        return 'KILAANGI';
    }

    public function language(): LanguageInterface
    {
        return new LanguageLag();
    }
}
