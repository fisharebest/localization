<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageWo;

/**
 * Class LocaleWo - Wo
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleWo extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Wolof';
    }

    public function endonymSortable(): string
    {
        return 'WOLOF';
    }

    public function language(): LanguageInterface
    {
        return new LanguageWo();
    }

    public function numberSymbols(): array
    {
        return array(
            self::DECIMAL => self::COMMA,
            self::GROUP   => self::DOT,
        );
    }
}
