<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageHnj;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleHnj - Hmong
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2024 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleHnj extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return '𖬇𖬰𖬞 𖬌𖬣𖬵';
    }

    public function language(): LanguageInterface
    {
        return new LanguageHnj();
    }
}
