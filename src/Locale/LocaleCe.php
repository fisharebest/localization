<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageCe;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleCe - Chechen
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleCe extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'нохчийн';
    }

    public function endonymSortable(): string
    {
        return 'НОХЧИЙН';
    }

    public function language(): LanguageInterface
    {
        return new LanguageCe();
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
