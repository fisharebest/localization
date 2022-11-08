<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryCd;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageLn - Representation of the Lingala language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageLn extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ln';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryCd();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule2();
    }
}
