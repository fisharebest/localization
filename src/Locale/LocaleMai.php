<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageMai;
use Fisharebest\Localization\Script\ScriptDeva;
use Fisharebest\Localization\Script\ScriptInterface;

/**
 * Class LocaleMai - Maithili
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleMai extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'मैथिली';
    }

    public function endonymSortable(): string
    {
        return 'मैथिली';
    }

    public function language(): LanguageInterface
    {
        return new LanguageMai();
    }

    public function script(): ScriptInterface
    {
        return new ScriptDeva();
    }
}
