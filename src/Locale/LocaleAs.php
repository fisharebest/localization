<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageAs;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleAs - Assamese
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleAs extends AbstractLocale implements LocaleInterface
{
    protected function digitsGroup(): int
    {
        return 2;
    }

    public function endonym(): string
    {
        return 'অসমীয়া';
    }

    public function language(): LanguageInterface
    {
        return new LanguageAs();
    }
}
