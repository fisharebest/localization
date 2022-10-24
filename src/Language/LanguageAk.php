<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryGh;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageAk - Representation of the Akan language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageAk extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ak';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryGh();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule2();
    }
}
