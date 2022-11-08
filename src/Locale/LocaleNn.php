<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageNn;

/**
 * Class LocaleNn - Norwegian Nynorsk
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleNn extends AbstractLocale implements LocaleInterface
{
    public function collation(): string
    {
        return 'danish_ci';
    }

    public function endonym(): string
    {
        return 'norsk nynorsk';
    }

    public function endonymSortable(): string
    {
        return 'NORSK NYNORSK';
    }

    public function language(): LanguageInterface
    {
        return new LanguageNn();
    }
}
