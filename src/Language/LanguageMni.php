<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Script\ScriptInterface;
use Fisharebest\Localization\Script\ScriptMtei;
use Fisharebest\Localization\Territory\TerritoryIn;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageMai - Representation of the Meitei language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageMni extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'mni';
    }

    public function defaultScript(): ScriptInterface
    {
        return new ScriptMtei();
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryIn();
    }
}
