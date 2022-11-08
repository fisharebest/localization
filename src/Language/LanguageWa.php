<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryBe;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageWa - Representation of the Walloon language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageWa extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'wa';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryBe();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule2();
    }
}
