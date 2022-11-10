<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageJv;

/**
 * Class LocaleJv - Javanese
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleJv extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Jawa';
    }

    public function language(): LanguageInterface
    {
        return new LanguageJv();
    }

    public function numberSymbols(): array
    {
        return array(
            self::DECIMAL => self::COMMA,
            self::GROUP   => self::DOT,
        );
    }
}
