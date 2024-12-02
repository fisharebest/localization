<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageSmj;

/**
 * Class LocaleSmj
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2024 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleSmj extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'julevsámegiella';
    }

    public function endonymSortable(): string
    {
        return 'JULEVSAMEGIELLA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSmj();
    }
}
