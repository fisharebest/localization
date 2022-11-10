<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageMk;

/**
 * Class LocaleMk - Macedonian
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleMk extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'македонски';
    }

    public function endonymSortable(): string
    {
        return 'МАКЕДОНСКИ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageMk();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
