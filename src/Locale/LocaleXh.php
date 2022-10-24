<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageXh;

/**
 * Class LocaleXh - Xhosa
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleXh extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'IsiXhosa';
    }

    public function endonymSortable(): string
    {
        return 'XHOSA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageXh();
    }

    public function numberSymbols(): array
    {
        return array(
            self::GROUP => self::NBSP,
        );
    }
}
