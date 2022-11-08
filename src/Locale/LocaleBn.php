<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageBn;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleBn - Bengali
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleBn extends AbstractLocale implements LocaleInterface
{
    protected function digitsGroup(): int
    {
        return 2;
    }

    public function endonym(): string
    {
        return 'বাংলা';
    }

    public function language(): LanguageInterface
    {
        return new LanguageBn();
    }
}
