<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageYo;

/**
 * Class LocaleYo - Yoruba
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleYo extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Èdè Yorùbá';
    }

    public function endonymSortable(): string
    {
        return 'EDE YORUBA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageYo();
    }
}
