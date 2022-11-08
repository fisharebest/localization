<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryMu;

/**
 * Class LanguageMfe - Representation of the Morisyen language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageMfe extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'mfe';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryMu();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule2();
    }
}
