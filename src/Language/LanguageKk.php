<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Script\ScriptCyrl;
use Fisharebest\Localization\Script\ScriptInterface;
use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryKz;

/**
 * Class LanguageKk - Representation of the Kazakh language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageKk extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'kk';
    }

    public function defaultScript(): ScriptInterface
    {
        return new ScriptCyrl();
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryKz();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule1();
    }
}
