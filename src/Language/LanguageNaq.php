<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\PluralRule\PluralRuleOneTwoOther;
use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryNa;

/**
 * Class LanguageNaq - Representation of the Nama (Namibia) language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageNaq extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'naq';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryNa();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRuleOneTwoOther();
    }
}
