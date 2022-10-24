<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageArs;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleArs - Najdi Arabic
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleArs extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'اللهجة النجدية';
    }

    public function language(): LanguageInterface
    {
        return new LanguageArs();
    }

    public function numberSymbols(): array
    {
        return array(
            self::GROUP    => self::ARAB_GROUP,
            self::DECIMAL  => self::ARAB_DECIMAL,
            self::NEGATIVE => self::ALM . self::HYPHEN,
        );
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::ARAB_PERCENT . self::ALM;
    }
}
