<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRuleFilipino;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryPh;

/**
 * Class LanguageCeb - Representation of the Cebuano language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageCeb extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ceb';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryPh();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRuleFilipino();
    }
}
