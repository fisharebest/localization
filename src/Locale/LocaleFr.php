<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageFr;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleFr - French
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleFr extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'français';
    }

    public function endonymSortable(): string
    {
        return 'FRANCAIS';
    }

    public function language(): LanguageInterface
    {
        return new LanguageFr();
    }

    public function numberSymbols(): array
    {
        return array(
            self::GROUP   => self::NARROW_NBSP,
            self::DECIMAL => self::COMMA,
        );
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
