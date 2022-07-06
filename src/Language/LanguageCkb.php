<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptArab;
use Fisharebest\Localization\Territory\TerritoryIq;

/**
 * Class LanguageKu - Representation of the Kurdish language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageCkb extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'ckb';
    }

    public function defaultScript()
    {
        return new ScriptArab();
    }

    public function defaultTerritory()
    {
        return new TerritoryIq();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
