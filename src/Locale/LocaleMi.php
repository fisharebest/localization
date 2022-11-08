<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageMi;

/**
 * Class LocaleMi - Maori
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleMi extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Māori';
    }

    public function endonymSortable(): string
    {
        return 'MĀORI';
    }

    public function language(): LanguageInterface
    {
        return new LanguageMi();
    }
}
