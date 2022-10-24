<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageBo;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleBo - Tibetan
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleBo extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'བོད་སྐད་';
    }

    public function language(): LanguageInterface
    {
        return new LanguageBo();
    }
}
