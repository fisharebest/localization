<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptDeva;
use Fisharebest\Localization\Territory\TerritoryIn;

/**
 * Class LanguageBh - Representation of the Bihari language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageBh extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'bh';
    }

    public function defaultScript()
    {
        return new ScriptDeva();
    }

    public function defaultTerritory()
    {
        return new TerritoryIn();
    }

    public function pluralRule()
    {
        return new PluralRule2();
    }
}
