<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageCcp;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleCcp - Chakma
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2024 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleCcp extends AbstractLocale implements LocaleInterface
{
    protected function digitsGroup(): int
    {
        return 2;
    }

    public function endonym(): string
    {
        return '𑄌𑄋𑄴𑄟𑄳𑄦';
    }

    public function language(): LanguageInterface
    {
        return new LanguageCcp();
    }
}
