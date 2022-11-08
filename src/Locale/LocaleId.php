<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageId;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleId - Indonesian
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleId extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Indonesia';
    }

    public function endonymSortable(): string
    {
        return 'INDONESIA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageId();
    }

    public function numberSymbols(): array
    {
        return array(
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        );
    }
}
