<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageNus;

/**
 * Class LocaleNus - Nuer
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleNus extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Thok Nath';
    }

    public function endonymSortable(): string
    {
        return 'THOK NATH';
    }

    public function language(): LanguageInterface
    {
        return new LanguageNus();
    }
}
