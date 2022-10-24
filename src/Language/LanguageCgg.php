<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryUg;

/**
 * Class LanguageCgg - Representation of the Chiga language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageCgg extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'cgg';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryUg();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule1();
    }
}
