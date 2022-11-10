<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageHe;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleHe - Hebrew
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleHe extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'עברית';
    }

    public function language(): LanguageInterface
    {
        return new LanguageHe();
    }

    public function numberSymbols(): array
    {
        return [
            self::NEGATIVE => self::LTR_MARK . self::HYPHEN,
        ];
    }
}
