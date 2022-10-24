<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryGh;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageEe - Representation of the Ewe language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageEe extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ee';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryGh();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule1();
    }
}
