<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageAm;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleAm - Amharic
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleAm extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'አማርኛ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageAm();
    }
}
