<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageBgc;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleBgc - Haryanvi
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleBgc extends AbstractLocale implements LocaleInterface
{
    protected function digitsGroup(): int
    {
        return 2;
    }

    public function endonym(): string
    {
        return 'हरियाणवी';
    }

    public function language(): LanguageInterface
    {
        return new LanguageBgc();
    }
}
