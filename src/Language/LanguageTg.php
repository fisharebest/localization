<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptCyrl;
use Fisharebest\Localization\Territory\TerritoryTj;

/**
 * Class LanguageTg - Representation of the Tajik language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LanguageTg extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'tg';
    }

    public function defaultScript()
    {
        return new ScriptCyrl();
    }

    public function defaultTerritory()
    {
        return new TerritoryTj();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
