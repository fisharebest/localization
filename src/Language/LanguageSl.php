<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule10;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritorySi;

/**
 * Class LanguageSl - Representation of the Slovenian language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageSl extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'sl';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritorySi();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule10();
    }
}
