<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageSdh;

/**
 * Class LocaleSdh - Southern Kurdish
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleSdh extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'kurdî';
    }

    public function endonymSortable(): string
    {
        return 'KURDI';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSdh();
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
        return self::PERCENT . '%s';
    }
}
