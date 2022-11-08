<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageSaq;

/**
 * Class LocaleSaq - Samburu
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleSaq extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Kisampur';
    }

    public function endonymSortable(): string
    {
        return 'KISAMPUR';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSaq();
    }
}
