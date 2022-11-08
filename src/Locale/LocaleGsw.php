<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageGsw;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleGsw - Swiss German
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleGsw extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Schwiizertüütsch';
    }

    public function endonymSortable(): string
    {
        return 'SCHWIIZERTUUTSCH';
    }

    public function language(): LanguageInterface
    {
        return new LanguageGsw();
    }

    public function numberSymbols(): array
    {
        return array(
            self::GROUP    => self::APOSTROPHE,
            self::NEGATIVE => self::MINUS_SIGN,
        );
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
