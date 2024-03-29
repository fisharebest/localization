<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageNqo;

/**
 * Class LocaleNqo - N'Ko
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleNqo extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'ߒߞߏ';
    }

    public function language()
    {
        return new LanguageNqo();
    }
}
