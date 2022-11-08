<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Script\ScriptInterface;
use Fisharebest\Localization\Script\ScriptKhmr;
use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryKh;

/**
 * Class LanguageKm - Representation of the Central Khmer language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageKm extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'km';
    }

    public function defaultScript(): ScriptInterface
    {
        return new ScriptKhmr();
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryKh();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule0();
    }
}
