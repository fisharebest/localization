<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageIo;

/**
 * Class LocaleIo - Ido
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleIo extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Ido';
    }

    public function endonymSortable(): string
    {
        return 'IDO';
    }

    public function language(): LanguageInterface
    {
        return new LanguageIo();
    }
}
