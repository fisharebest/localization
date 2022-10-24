<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageEu;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleEu - Basque
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleEu extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'euskara';
    }

    public function endonymSortable(): string
    {
        return 'EUSKARA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageEu();
    }

    public function numberSymbols(): array
    {
        return array(
            self::GROUP    => self::DOT,
            self::DECIMAL  => self::COMMA,
            self::NEGATIVE => self::MINUS_SIGN,
        );
    }

    protected function percentFormat(): string
    {
        return self::PERCENT . self::NBSP . '%s';
    }
}
