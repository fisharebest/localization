<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageEo;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleEo - Esperanto
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleEo extends AbstractLocale implements LocaleInterface
{
    public function collation(): string
    {
        return 'esperanto_ci';
    }

    public function endonym(): string
    {
        return 'esperanto';
    }

    public function endonymSortable(): string
    {
        return 'ESPERANTO';
    }

    public function language(): LanguageInterface
    {
        return new LanguageEo();
    }

    public function numberSymbols(): array
    {
        return array(
            self::GROUP    => self::NBSP,
            self::DECIMAL  => self::COMMA,
            self::NEGATIVE => self::MINUS_SIGN,
        );
    }
}
