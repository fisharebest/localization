<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageBn;

/**
 * Class LocaleBn - Bengali
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleBn extends AbstractLocale implements LocaleInterface
{
    protected function digitsGroup()
    {
        return 2;
    }

    public function endonym()
    {
        return 'বাংলা';
    }

    public function language()
    {
        return new LanguageBn();
    }
}
