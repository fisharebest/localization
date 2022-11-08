<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Script\ScriptEthi;
use Fisharebest\Localization\Script\ScriptInterface;
use Fisharebest\Localization\Territory\TerritoryEr;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageTig - Representation of the Tigre language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageTig extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'tig';
    }

    public function defaultScript(): ScriptInterface
    {
        return new ScriptEthi();
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryEr();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule1(); //
    }
}
