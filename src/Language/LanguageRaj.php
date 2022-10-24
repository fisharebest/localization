<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Script\ScriptDeva;
use Fisharebest\Localization\Script\ScriptInterface;
use Fisharebest\Localization\Territory\TerritoryIn;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageRaj - Representation of the Rajastani language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageRaj extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'raj';
    }

    public function defaultScript(): ScriptInterface
    {
        return new ScriptDeva();
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryIn();
    }
}
