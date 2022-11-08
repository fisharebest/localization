<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageGd;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleGd - Scottish Gaelic
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleGd extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Gàidhlig';
    }

    public function endonymSortable(): string
    {
        return 'GAIDHLIG';
    }

    public function language(): LanguageInterface
    {
        return new LanguageGd();
    }
}
