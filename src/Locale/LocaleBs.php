<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageBs;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleBs - Bosnian
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleBs extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'bosanski';
    }

    public function endonymSortable(): string
    {
        return 'BOSANSKI';
    }

    public function language(): LanguageInterface
    {
        return new LanguageBs();
    }

    public function numberSymbols(): array
    {
        return array(
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        );
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
