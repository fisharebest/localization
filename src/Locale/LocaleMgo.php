<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageMgo;

/**
 * Class LocaleMgo - Metaʼ
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleMgo extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'metaʼ';
    }

    public function endonymSortable(): string
    {
        return 'META';
    }

    public function language(): LanguageInterface
    {
        return new LanguageMgo();
    }
}
