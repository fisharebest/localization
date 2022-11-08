<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageTok;

/**
 * Class LocaleTok - Toki Pona
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleTok extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Toki Pona';
    }

    public function endonymSortable(): string
    {
        return 'TOKI PONA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageTok();
    }
}
