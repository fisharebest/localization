<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageAn;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleAn - Anglo-Saxon / Old-English
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleAn extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'aragonés';
    }

    public function endonymSortable(): string
    {
        return 'ARAGONÉS';
    }

    public function language(): LanguageInterface
    {
        return new LanguageAn();
    }
}
