<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageLn;

/**
 * Class LocaleLn - Lingala
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleLn extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'lingála';
    }

    public function endonymSortable(): string
    {
        return 'LINGALA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageLn();
    }

    public function numberSymbols(): array
    {
        return array(
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        );
    }
}
