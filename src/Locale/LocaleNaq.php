<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageNaq;

/**
 * Class LocaleNaq - Nama
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleNaq extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Khoekhoegowab';
    }

    public function endonymSortable(): string
    {
        return 'KHOEKHOEGOWAB';
    }

    public function language(): LanguageInterface
    {
        return new LanguageNaq();
    }
}
