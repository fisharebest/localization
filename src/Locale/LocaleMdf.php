<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageMdf;

/**
 * Class LocaleMdf - Moksha
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleMdf extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'мокшень кяль';
    }

    public function endonymSortable(): string
    {
        return 'МОКШЕНЬ КЯЛЬ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageMdf();
    }
}
