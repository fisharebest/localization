<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageFy;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleFy - Western Frisian
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleFy extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Frysk';
    }

    public function endonymSortable(): string
    {
        return 'FRYSK';
    }

    public function language(): LanguageInterface
    {
        return new LanguageFy();
    }

    public function numberSymbols(): array
    {
        return array(
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        );
    }
}
