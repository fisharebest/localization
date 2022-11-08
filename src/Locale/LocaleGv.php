<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageGv;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleGv - Manx
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleGv extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Gaelg';
    }

    public function endonymSortable(): string
    {
        return 'GAELG';
    }

    public function language(): LanguageInterface
    {
        return new LanguageGv();
    }
}
