<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryCh;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageRm - Representation of the Romansh language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageRm extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'rm';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryCh();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule1();
    }
}
