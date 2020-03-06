<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageAs;

/**
 * Class LocaleAs - Assamese
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleAs extends AbstractLocale implements LocaleInterface
{
    protected function digitsGroup()
    {
        return 2;
    }

    public function endonym()
    {
        return 'অসমীয়া';
    }

    public function language()
    {
        return new LanguageAs();
    }
}
