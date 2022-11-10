<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageMfe;

/**
 * Class LocaleMfe - Morisyen
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleMfe extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'kreol morisien';
    }

    public function endonymSortable(): string
    {
        return 'KREOL MORISIEN';
    }

    public function language(): LanguageInterface
    {
        return new LanguageMfe();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP => self::NBSP,
        ];
    }
}
