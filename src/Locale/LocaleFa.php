<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageFa;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleFa - Persian
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleFa extends AbstractLocale implements LocaleInterface
{
    public function collation(): string
    {
        return 'persian_ci';
    }

    public function endonym(): string
    {
        return 'فارسی';
    }

    public function language(): LanguageInterface
    {
        return new LanguageFa();
    }

    public function numerals(): array
    {
        return ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP    => self::ARAB_GROUP,
            self::DECIMAL  => self::ARAB_DECIMAL,
            self::NEGATIVE => self::LTR_MARK . self::MINUS_SIGN,
        ];
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::ARAB_PERCENT;
    }
}
