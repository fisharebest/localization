<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageBh;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleBh - Bihari
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleBh extends AbstractLocale implements LocaleInterface
{
    protected function digitsGroup(): int
    {
        return 2;
    }

    public function endonym(): string
    {
        return 'Bihari';
    }

    public function endonymSortable(): string
    {
        return 'BIHARI';
    }

    public function language(): LanguageInterface
    {
        return new LanguageBh();
    }
}
