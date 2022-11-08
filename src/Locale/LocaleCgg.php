<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageCgg;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleCgg - Chiga
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleCgg extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Rukiga';
    }

    public function endonymSortable(): string
    {
        return 'RUKIGA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageCgg();
    }
}
