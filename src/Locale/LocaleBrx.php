<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageBrx;

/**
 * Class LocaleBrx - Bodo
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleBrx extends AbstractLocale implements LocaleInterface
{
    protected function digitsGroup()
    {
        return 2;
    }

    public function endonym()
    {
        return 'बड़ो';
    }

    public function language()
    {
        return new LanguageBrx();
    }
}
